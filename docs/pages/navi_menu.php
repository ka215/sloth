<?php
$page = get_globals( 'page' );
$page_type = get_page_type( $page );
$style_items = [
    'introduction' => [
        'overview'         => [ 'fas fa-heading', 'Sloth' ],
        'why-sloth'        => [ 'fas fa-question', 'Why Sloth?' ],
        'get-started'      => [ 'fas fa-fire', 'Get Started Sloth!' ],
        'about-extensions' => [ 'far fa-lightbulb', 'About Sloth Extensions' ],
        'basic-structures' => [ 'fas fa-chalkboard', 'Basic Structures' ],
    ],
    'styles' => [
        'typograpy'             => [ 'fas fa-font', 'Typograpy' ],
        'lists'                 => [ 'fas fa-list-ul', 'Lists' ],
        'links'                 => [ 'fas fa-link', 'Links' ],
        'forms'                 => [ 'fas fa-edit', 'Forms' ],
        'buttons'               => [ 'fas fa-toggle-on', 'Buttons' ],
        'tables'                => [ 'fas fa-table', 'Tables' ],
        'grid-systems'          => [ 'fas fa-th', 'Grid Systems' ],
        'components'            => [ 'far fa-address-card', 'Components' ],
        'colors'                => [ 'fas fa-palette', 'Colors' ],
        'utilities'             => [ 'fas fa-toolbox', 'Utilities' ],
        'overriding-properties' => [ 'far fa-edit', 'Overriding Properties' ],
    ],
];
$extension_items = [
    'introduction' => [
        'what-extensions'  => [ 'fas fa-question', 'What are Extensions?' ],
        'about-extensions' => [ 'far fa-lightbulb', 'About Extensions' ],
    ],
    'features' => [
        'element-sizing'  => [ 'fas fa-expand-arrows-alt', 'Element Sizing' ],
        'option-mapping'  => [ 'fas fa-align-justify', 'Option Mapping' ],
        'toggle-password' => [ 'fas fa-low-vision', 'Toggle Password' ],
        'image-uploader'  => [ 'fas fa-file-upload', 'Image Uploader' ],
        'class-switching' => [ 'fas fa-exchange-alt', 'Class Switching' ],
        'validation-form' => [ 'fab fa-wpforms', 'Validation Form' ],
        'dialog'          => [ 'far fa-window-restore', 'Dialog Notification' ],
        'lazy-loading'    => [ 'far fa-image', 'Lazy Loading Images' ],
        'stick-footer'    => [ '', 'Sticky Footer' ],
        // '' => [ '', '' ],
        'demo-form'       => [ 'far fa-lightbulb', 'Demo Form' ]
    ],
];
$common_items = [
    'category' => [
        'core-styles'      => [ 'fab fa-css3', 'Core Styles' ],
        'sloth-extensions' => [ 'far fa-lightbulb', 'Sloth Extensions' ],
        'supported'        => [ 'far fa-window-restore', 'Supported Browsers' ],
    ],
    'links' => [
        'https://ka215.github.io/sloth/donation.html' => [ 'fas fa-donate', 'Donation' ],
        'https://github.com/ka215/sloth' => [ 'fab fa-github-alt', 'To github' ],
        'https://ka2.org/' => [ 'fas fa-home', 'Back to homepage' ],
        //'' => [ '', '' ],
    ],
];
switch( $page_type ) {
    case 1:
        $menu_list = array_merge( $style_items, $common_items );
        break;
    case 2:
        $menu_list = array_merge( $extension_items, $common_items );
        break;
    default:
        $menu_list = array_merge( [], $common_items );
        break;
}
?>
<header id="docs-navi" class="navi-menu">
  <div class="w-half flx-row">
    <label class="toggle">
      <input type="checkbox">
      <div class="backdrop"></div>
      <div class="menu" data-menu-type="<?= $page_type ?>">
<?php foreach( $menu_list as $ul_id => $li_items ) : ?>
        <ul id="navi-menu-<?= $ul_id ?>" class="unstyled">
<?php   foreach( $li_items as $li_link => $li_content ) :
          if ( preg_match( '/^(https?:\/\/|.?\/)([-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+)$/i', $li_link ) !== 1 ) {
            $_atts = $ul_id === 'introduction' ? "href=\"#{$li_link}\"" : "href=\"javascript:;\" data-get-page=\"{$li_link}\"";
          } else {
            $_atts = "href=\"{$li_link}\"";
          }
?>
          <li class="pr1"><a <?= $_atts ?>><i class="<?= $li_content[0] ?> mr1"></i><?= $li_content[1] ?></a></li>
<?php   endforeach; ?>
        </ul>
        <?php if ( $ul_id !== 'links' ) : ?><hr><?php endif; ?>
<?php endforeach; ?>
      </div>
    </label>
    <a href="#sloth-docs" class="brand"><img src="<?= optimize_uri( 'assets/sloth.svg' ) ?>" height="36"> Sloth</a>
  </div>
  <div class="w-half flx-row flx-end pr2">
    <button id="close-navi" type="button" class="outline"><i class="fas fa-times"></i> Close Navi</button>
  </div>
</header>
