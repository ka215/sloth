<?php
$_is_hori = boolval( filter_input( INPUT_POST, 'hori' ) );
$_is_innr = boolval( filter_input( INPUT_POST, 'innr' ) );

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
<section id="lazyloading-demo" class="sloth-styles">
  <h3>Lazy Loading Images: DEMO</h3>
  <h5 class="line-right txt-prim"><?php 
if ( $_is_innr ) {
    echo $_is_hori ? 'On the inline horizontal scrolling container' : 'On the inline vertical scrolling container';
} else {
    echo $_is_hori ? 'On the horizontal scrolling page' : 'On the vertical scrolling page';
}
?></h5>
<?php if ( $_is_innr ) : ?>
  <div class="mxa brd of-a lazy-load txt-center" data-size="h:(100vh - 300px)">
<?php endif; ?>
<?php if ( $_is_hori ) : ?>
    <div class="flx-row mxa px2">
<?php else : ?>
    <div class="mxa px2" _data-size="mw:480px">
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
  <hr>
  <div class="txt-center">
    <a href="javascript:;" data-get-page="exts-lazyload">Back to Lazy Loading Images</a>
  </div>
</section>
