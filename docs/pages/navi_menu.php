<?php
$pages = [
    // category slug => {array}
    //'uncategorized' => [],
    'introduction'  => [
        // page slug       => [ label: {string}, icon: {string}, tmpl?: {string}, url?: {string} ],
        'overview'         => [ 'label' => 'Sloth','icon' => 'fas fa-heading', 'tmpl' => 'intr-sloth', 'url' => 'key-visual' ],
        'why-sloth'        => [ 'label' => 'Why Sloth?', 'icon' => 'fas fa-question', 'tmpl' => 'intr-sloth', 'url' => 'why-sloth' ],
        'get-started'      => [ 'label' => 'Get Started Sloth!', 'icon' => 'fas fa-fire', 'tmpl' => 'intr-sloth', 'url' => 'get-started' ],
        'sloth-extensions' => [ 'label' => 'About Sloth Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => 'intr-sloth', 'url' => 'sloth-extensions' ],
        'basic-structures' => [ 'label' => 'Basic Structures', 'icon' => 'fas fa-chalkboard', 'tmpl' => 'intr-sloth', 'url' => 'basic-structures' ],
    ],
    'styles'        => [
        'typograpy'             => [ 'label' => 'Typograpy', 'icon' => 'fas fa-font', 'tmpl' => 'styl-typo' ],
        'lists'                 => [ 'label' => 'Lists', 'icon' => 'fas fa-list-ul', 'tmpl' => 'styl-lists' ],
        'links'                 => [ 'label' => 'Links', 'icon' => 'fas fa-link', 'tmpl' => 'styl-links' ],
        'forms'                 => [ 'label' => 'Forms', 'icon' => 'fas fa-edit', 'tmpl' => 'styl-forms' ],
        'buttons'               => [ 'label' => 'Buttons', 'icon' => 'fas fa-toggle-on', 'tmpl' => 'styl-btns' ],
        'tables'                => [ 'label' => 'Tables', 'icon' => 'fas fa-table', 'tmpl' => 'styl-table' ],
        'grid-systems'          => [ 'label' => 'Grid Systems', 'icon' => 'fas fa-th', 'tmpl' => 'styl-grids' ],
        'components'            => [ 'label' => 'Components', 'icon' => 'far fa-address-card', 'tmpl' => 'styl-compo' ],
        'colors'                => [ 'label' => 'Colors', 'icon' => 'fas fa-palette', 'tmpl' => 'styl-color' ],
        'utilities'             => [ 'label' => 'Utilities', 'icon' => 'fas fa-toolbox', 'tmpl' => 'styl-util' ],
        'overriding-properties' => [ 'label' => 'Overriding Properties', 'icon' => 'far fa-edit', 'tmpl' => 'styl-props' ],
    ],
    'extensions'    => [
        'what-extensions'  => [ 'label' => 'What are Extensions?', 'icon' => 'fas fa-question', 'tmpl' => 'exti-desc', 'url' => 'what-extensions' ],
        'about-extensions' => [ 'label' => 'About Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => 'exti-desc', 'url' => 'about-extensions' ],
    ],
    'features'      => [
        'element-sizing'  => [ 'label' => 'Element Sizing', 'icon' => 'fas fa-expand-arrows-alt', 'tmpl' => 'exts-sizes' ],
        'option-mapping'  => [ 'label' => 'Option Mapping', 'icon' => 'fas fa-align-justify', 'tmpl' => 'exts-optmap' ],
        'toggle-password' => [ 'label' => 'Toggle Password', 'icon' => 'fas fa-low-vision', 'tmpl' => 'exts-passwd' ],
        'image-uploader'  => [ 'label' => 'Image Uploader', 'icon' => 'fas fa-file-upload', 'tmpl' => 'exts-upload' ],
        'class-switching' => [ 'label' => 'Class Switching', 'icon' => 'fas fa-exchange-alt', 'tmpl' => 'exts-switch' ],
        'validation-form' => [ 'label' => 'Validation Form', 'icon' => 'fab fa-wpforms', 'tmpl' => 'exts-valid' ],
        'dialog'          => [ 'label' => 'Dialog Notification', 'icon' => 'far fa-window-restore', 'tmpl' => 'exts-dialog' ],
        'lazy-loading'    => [ 'label' => 'Lazy Loading Images', 'icon' => 'far fa-image', 'tmpl' => 'exts-lazyload' ],
        'stick-footer'    => [ 'label' => 'Sticky Footer', 'icon' => 'fas fa-shoe-prints', 'tmpl' => 'exts-footer' ],
        'toc'             => [ 'label' => 'Table Of Contents', 'icon' => 'fas fa-stream', 'tmpl' => 'exts-toc' ],
        'demo-form'       => [ 'label' => 'Demo Form', 'icon' => 'far fa-lightbulb', 'tmpl' => 'exts-demo1' ],
    ],
    'category'      => [
        'core-styles'      => [ 'label' => 'Core Styles', 'icon' => 'fab fa-css3', 'tmpl' => 'intr-sloth', 'url' => 'key-visual' ],
        'sloth-extensions' => [ 'label' => 'Sloth Extensions', 'icon' => 'far fa-lightbulb', 'tmpl' => 'exti-desc', 'url' => 'what-extensions' ],
        'supported'        => [ 'label' => 'Supported Browsers', 'icon' => 'far fa-window-restore', 'tmpl' => 'support', 'url' => 'supported-browsers' ],
    ],
    'links'         => [
        'donation' => [ 'label' => 'Donation', 'icon' => 'fas fa-donate', 'url' => 'https://ka215.github.io/sloth/donation.html' ],
        'github' => [ 'label' => 'To github', 'icon' => 'fab fa-github-alt', 'url' => 'https://github.com/ka215/sloth' ],
        'home' => [ 'label' => 'Back to homepage', 'icon' => 'fas fa-home', 'url' => 'https://ka2.org/' ],
    ],
];
$now_page = get_globals( 'page' );
$current_page = '';
?>
<header id="docs-navi" class="navi-menu">
  <div class="w-half flx-row">
    <label class="toggle">
      <input type="checkbox">
      <div class="backdrop"></div>
      <div class="menu">
<?php foreach( $pages as $page_cat => $page_list ) : ?>
        <ul id="navi-menu-<?= $page_cat ?>" class="unstyled">
<?php   foreach( $page_list as $page_slug => $page_items ) :
          if ( array_key_exists( 'tmpl', $page_items ) ) {
              if ( array_key_exists( 'url', $page_items ) ) {
                  $_atts = "href=\"#{$page_items['url']}\"";
              } else {
                  $_atts = "href=\"javascript:;\"";
              }
              $_atts .= ! empty( $page_items['tmpl'] ) ? " data-get-page=\"{$page_items['tmpl']}\"" : '';
          } elseif ( array_key_exists( 'url', $page_items ) ) {
              if ( preg_match( '/^(https?:\/\/|.?\/)([-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/i', $page_items['url'] ) !== false ) {
                  $_atts = "href=\"{$page_items['url']}\"";
              } else {
                  $_atts = "href=\"#{$page_items['url']}\"";
              }
          } else {
            $_atts = '';
          }
          $_atts .= sprintf( ' id="%s"', md5( $page_slug ) );
          if ( empty( $current_page ) && $now_page === $page_items['tmpl'] ) {
            $current_page = md5( $page_slug );
          }
?>
          <li class="pr1"><a <?= $_atts ?>><i class="<?= $page_items['icon'] ?> mr1"></i><?= $page_items['label'] ?></a></li>
<?php   endforeach; ?>
        </ul>
        <?php if ( $page_cat !== 'links' ) : ?><hr><?php endif; ?>
<?php endforeach; ?>
      </div>
      <input type="hidden" id="current-page" value="<?= $now_page ?>">
      <input type="hidden" id="current-menu-hash" value="<?= $current_page ?>">
    </label>
    <a id="brand-logo" href="#key-visual" class="brand" data-get-page="intr-sloth"><img src="<?= optimize_uri( 'assets/sloth.svg' ) ?>" height="36"> Sloth</a>
  </div>
  <div class="w-half flx-row flx-end pr2">
<?php /*
    <button id="close-navi" type="button" class="outline"><i class="fas fa-times"></i> Close Navi</button>
*/ ?>
  </div>
</header>
