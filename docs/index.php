<?php
define('DOCROOT', $_SERVER['DOCUMENT_ROOT']);
define('ENV', preg_match( '/\A(127.0.0.|::)[0-9]{1,3}\z/', $_SERVER['SERVER_ADDR'] ) === 1 ? 'dev' : 'prod' );
define('DEV', true ); // On/Off debug mode
$sloth_version = 'unknown';
$_assets_dir = __DIR__ . ( @file_exists( __DIR__ . '/dist/sloth.min.css' ) ? '/dist/' : '/assets/' );
$_file = new SplFileObject( $_assets_dir . 'sloth.min.css', 'r' );
$_file->setFlags( SplFileObject::SKIP_EMPTY );
while ( ! $_file->eof() ) {
    $_row = $_file->fgets();
    if ( preg_match( '/^v(.*)$/', $_row, $matches ) ) {
        $sloth_version = trim( $matches[1] );
        break;
    }
}
$default_page = filter_input( INPUT_GET, 'p' ) ?: 'intr-sloth';
set_globals( 'page', filter_input( INPUT_POST, 'page' ) ?: $default_page );
set_globals( 'body_class', filter_input( INPUT_POST, 'body_class' ) ?: 'sloth' );
set_globals( 'body_atts', filter_input( INPUT_POST, 'body_atts' ) ?: [] );
set_globals( 'sloth_version', $sloth_version );
set_globals( 'compressed_css_size', file_exists( $_assets_dir . 'sloth.min.compress.css.gz' ) ? round( filesize( $_assets_dir . 'sloth.min.compress.css.gz' ) / 1024, 2 ) : 'unknown' );
set_globals( 'compressed_js_size', file_exists( $_assets_dir . 'sloth.extension.min.compress.js.gz' ) ? round( filesize( $_assets_dir . 'sloth.extension.min.compress.js.gz' ) / 1024, 2 ) : 'unknown' );

function optimize_uri( $resource_filename = null ) {
    if ( empty( $resource_filename ) ) {
        return '';
    }
    $_dirname = DEV ? '../dist' : '../*/assets';
    $_match_path = glob( "{$_dirname}/{$resource_filename}", GLOB_MARK );
    if ( empty( $_match_path ) ) {
        $_match_path = glob( "../*/assets/{$resource_filename}", GLOB_MARK );
        if ( empty( $_match_path ) ) {
            return $resource_filename;
        }
    }
    $_full_path = __DIR__ .'/'. $_match_path[0];
    if ( @file_exists( $_full_path ) ) {
        return $_match_path[0] .'?'. filemtime( $_full_path );
    } else {
        return $resource_filename;
    }
}
function set_globals( $key, $value ) {
    $GLOBALS[$key] = $value;
}
function get_globals( $key ) {
    return array_key_exists( $key, $GLOBALS ) ? $GLOBALS[$key] : null;
}
function include_tmpl( $template_name ) {
    if ( empty( $template_name ) ) {
        $template_name = 'intr-sloth';
    }
    $full_path = __DIR__ .'/pages/'. $template_name .'.php';
    if ( file_exists( $full_path ) ) {
        include( $full_path );
        //include('./pages/'.$template_name.'.php');
    } else {
        printf(
            '<div class="w-full flx-row flx-center item-center" style="height: calc(100vh - 133px);"><h2 class="muted">%s</h2></div>',
            'Not found the page template file.'
        );
    }
}

/*
require_once __DIR__ .'/pages/config.php';

set_globals( 'pages', $pages );

$now_page = get_globals( 'page' );
$page_tmpl = get_page_template( $now_page );
set_globals( 'page_tmpl', $page_tmpl );
set_globals( 'page_cat', get_page_category( $now_page, false ) );
set_globals( 'page_menu', get_page_menu( get_page_category( $now_page ) ) );
*/
if ( ! empty( get_globals( 'body_atts' ) ) ) {
    $body_atts = implode( ' ', get_globals( 'body_atts' ) );
} else {
    $body_atts = '';
}

// if ( ! ob_start( 'ob_gzhandler' ) ) ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include_tmpl( 'head' ); ?>
<body id="sloth-docs" class="<?= get_globals( 'body_class' ); ?>" <?= $body_atts; ?> data-standby="shown">
<?php include_tmpl( 'navi_menu' ); ?>
<main<?php if ( isset( $_POST['main'] ) && $_POST['main'] === 'overflow' ) : ?> class="lazy-load of-xs"<?php else : ?><?php endif; ?>>
<?php include_tmpl( $page ); ?>
</main>
<?php include_tmpl( 'footer' ); ?>
<?php include_tmpl( 'scripts' ); ?>
</body>
</html>
<?php
/*
$output = ob_get_conents();
ob_end_clean();
echo $output;
*/
