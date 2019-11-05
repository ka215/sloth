<?php
$_is_dev = boolval( filter_input( INPUT_GET, 'dev' ) );
$_is_hori = boolval( filter_input( INPUT_GET, 'hori' ) );
$_is_innr = boolval( filter_input( INPUT_GET, 'innr' ) );
$_ary = explode( 'sloth', __DIR__ );
$_abs_path = rtrim( array_shift( $_ary ), '\\' );
$current_year = (int) date( 'Y' );
$sloth_dist_path = $_is_dev ? '/sloth/dist/sloth.min.css' : '/sloth/docs/assets/sloth.min.css';
$sloth_ext_script_path = $_is_dev ? '/sloth/dist/sloth.extension.js' : '/sloth/docs/assets/sloth.extension.min.js';
//var_dump( file_exists( $sloth_dist_path ), file_exists( $sloth_ext_script_path ) );

/**
 * Retrieve dummy image from the placehold.jp for using as mockup
 *
 * @link https://placehold.jp
 *
 * @param int    $width  (optional; defaults to 150(px))
 * @param int    $height (optional; defaults to 150(px))
 * @param string $file   (optional; defaults to 'png', or allowed 'jpg')
 * @param string $text_color (optional)
 * @param string $bg_color   (optional)
 * @param string $text   (optional)
 * @return string URL of image
 */
function get_image( $width=150, $height=150, $file='png', $text_color=null, $bg_color=null, $text=null ) {
    $width = (int) $width > 0 ? (int) $width : 150;
    $height = (int) $height > 0 ? (int) $height: 150;
    $file = preg_match( '/\A(png|jpg)\z/i', $file ) === 1 ? $file : 'png';
    $text = ! empty( $text ) ? '?text=' . rawurlencode( $text ) : '';
    $colorset = randColorSet();
    $text_color = trim( ! empty( $text_color ) ? $text_color : $colorset['text'], '#' ) . '/';
    $bg_color   = trim( ! empty( $bg_color ) ? $bg_color : $colorset['bg'], '#' ) . '/';
    $image_url = sprintf( 'https://placehold.jp/%s%s%dx%d.%s%s', $bg_color, $text_color, $width, $height, $file, $text );
    return $image_url;
}

/**
 * Retrieve a color set of random background color and text color.
 * It is optimized for a text color with high readability according to the luminance of the background color.
 *
 * @param int $luminance (optional; Luminance as a branch point of light and darkness is in the range of 0 to 255)
 *
 * @return array $colorset (has keys of "bg" and "text")
 */
function randColorSet( $luminance = 128 ) {
    $rgb = [ 'r' => 0, 'g' => 0, 'b' => 0 ];
    $colorset = [ 'bg' => '#', 'text' => '#FFFFFF' ];

    foreach( $rgb as $_key => $_val ) {
        $rgb[$_key] = mt_rand( 0, 255 );
        $colorset['bg'] .= str_pad( dechex( $rgb[$_key] ), 2, '0', STR_PAD_LEFT );
    }
    $yuv = 0.299 * $rgb['r'] + 0.587 * $rgb['g'] + 0.114 * $rgb['b'];
    if ( $yuv >= $luminance ) {
        $colorset['text'] = '#101010';
    }
    return $colorset;
}

?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lazy Loading Images | Sloth</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php /* link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" */ ?>
  <link rel="stylesheet" href="<?= sprintf( '%s?v=%s', $sloth_dist_path, filemtime( $_abs_path . $sloth_dist_path ) ); ?>">
  <link rel="shortcut icon" href="assets/sloth.ico" type="image/x-icon">
</head>
<body class="sloth" data-dialog-effect="1" data-dialog-button="outline">
  <div>
    <h2 class="px2 txt-fog">Lazy Loading Images</h2>
<?php if ( $_is_innr ) : ?>
    <div class="mx2 brd of-a lazy-load" data-size="h:(100vh - 5em)">
<?php endif; ?>
<?php if ( $_is_hori ) : ?>
    <div class="flx-row px2">
<?php else : ?>
    <div class="mxa px2" data-size="mw:480px">
<?php endif; ?>
<?php
$is_random_size = true;//false;
$is_caption_overlay = false;
$max_images     = 20;
$img_width      = 144;
$img_height     = 144;
$caption_height = 26;
$preload_buffer = 72; //$img_height; //ceil((144 - $caption_height) / 2);
for ( $i = 1; $i <= $max_images; $i++ ) {
    if ( $is_random_size ) {
        $img_width  = mt_rand( 62, 320 );
        $img_height = $img_width;
        $preload_buffer = $preload_buffer != 0 ? $img_width / 2 : 0;
    }
?>
    <div class="vcard">
        <figure<?php if ( $is_caption_overlay ) : ?> class="overlay"<?php endif; ?>>
            <img data-src="<?= get_image( $img_width, $img_height, 'png', null, null, 'Image #' . $i ); ?>" data-buffer="<?= $preload_buffer ?>" width="<?= $img_width ?>" height="<?= $img_height ?>" alt="Image #<?= $i ?>">
            <?php if ( $caption_height > 0 ) : ?><figcaption>Image #<?= $i ?></figcaption><?php endif; ?>
        </figure>
        <dl<?php if ( $_is_hori ) : ?> data-size="w:240px"<?php endif; ?>>
            <dt>Image #<?= $i ?></dt>
            <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
        </dl>
    </div>
<?php
}
?>
    </div>
    <?php if ( $_is_innr ) : ?>
      </div><!-- /.of-a -->
    <?php endif; ?>
  </div>
  <script async src="<?= sprintf( '%s?v=%s', $sloth_ext_script_path, filemtime( $_abs_path . $sloth_ext_script_path ) ); ?>"></script>
</body>
</html>
