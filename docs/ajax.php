<?php
$postname = filter_input( INPUT_GET, 'p' );
$response = [];
ob_start();
switch( strtolower( $postname ) ) {
    case 'terms':
?>
<div class="sloth">
  <p>Last updated: August 16, 2019</p>
  <p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the https://ka2.org website (the "Service") operated by Monaural Sound ("us", "we", or "our").</p>
  <p>Your access to and use of the Service is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use the Service.</p>
  <p>By accessing or using the Service you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service. The Terms of Service agreement  for Monaural Sound has been created with the help of TermsFeed.</p>
  <h4 class="txt-left txt-darkgray">Links To Other Web Sites</h4>
  <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Monaural Sound.</p>
  <p>Monaural Sound has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Monaural Sound shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
  <p>We strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or services that you visit.</p>
  <h4 class="txt-left txt-darkgray">Governing Law</h4>
  <p>These Terms shall be governed and construed in accordance with the laws of Japan, without regard to its conflict of law provisions.</p>
  <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have between us regarding the Service.</p>
  <h4 class="txt-left txt-darkgray">Changes</h4>
  <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
  <p>By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, please stop using the Service.</p>
  <h4 class="txt-left txt-darkgray">Contact Us</h4>
  <p>If you have any questions about these Terms, please contact us.</p>
</div>
<?php
        break;
    case 'test':
        usleep( 1000000 );
?>
<div class="my1">
  <p>As a sample when content loading is delayed, the sleep process of about 1 second has performed.</p>
  <p>By using the "loader" property, you can view the loading content until completed content loading.</p>
</div>
<?php
        break;
    case 'lazyloading':
        $caption_height = 26;
        $preload_buffer = ceil((144 - $caption_height) / 2);
        for ( $i = 1; $i <= 10; $i++ ) {
?>
<div class="vcard">
  <figure>
    <img data-src="<?= get_image( 144, 144 - $caption_height, 'png', null, '007F65', 'Image #' . $i ); ?>" data-buffer="<?= $preload_buffer ?>" width="144" height="<?= 144 - $caption_height ?>" alt="Image #<?= $i ?>">
    <?php if ( $caption_height > 0 ) : ?><figcaption>Image #<?= $i ?></figcaption><?php endif; ?>
  </figure>
  <dl>
    <dt>Image #<?= $i ?></dt>
    <dd>Mobile First CSS Micro Framework. It has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.</dd>
  </dl>
</div>
<?php
        }
        break;
}
$response['content'] = ob_get_contents();
ob_end_clean();

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
    if ( ! empty( $text ) ) {
        $text_color = ! empty( $text_color ) ? trim( $text_color, '#' ) . '/' : 'ffffff/';
        $bg_color   = ! empty( $bg_color ) ? trim( $bg_color, '#' ) . '/' : 'cccccc/';
    } else {
        $text_color = ! empty( $text_color ) ? trim( $text_color, '#' ) . '/' : '';
        $bg_color   = ! empty( $bg_color ) ? trim( $bg_color, '#' ) . '/' : '';
    }
    $image_url = sprintf( 'https://placehold.jp/%s%s%dx%d.%s%s', $bg_color, $text_color, $width, $height, $file, $text );
    return $image_url;
}

die( json_encode( $response ) );
