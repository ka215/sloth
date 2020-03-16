<?php
$support_browsers = [
    'PC' => [
        'cp' => [ 'label' => 'Chrome', 'icon_src' => 'assets/icons/chrome.svg' ],
        'ff' => [ 'label' => 'Firefox', 'icon_src' => 'assets/icons/firefox.svg' ],
        'sp' => [ 'label' => 'Safari', 'icon_src' => 'assets/icons/safari.png' ],
        'eg' => [ 'label' => 'Edge', 'icon_src' => 'assets/icons/edge.svg' ],
        'op' => [ 'label' => 'Opera', 'icon_src' => 'assets/icons/opera.svg' ],
        //'ie' => [ 'label' => 'Internet Explorer 10-11', 'icon_src' => 'assets/icons/ie.svg' ],
        //'' => [ 'icon_src' => '' ],
    ],
    'Mobile' => [
        //'ab' => [ 'label' => 'Android Browser', 'icon_src' => 'assets/icons/android.svg' ],
        'cm' => [ 'label' => 'Chrome', 'icon_src' => 'assets/icons/chrome.svg' ],
        'sm' => [ 'label' => 'iOS Safari', 'icon_src' => 'assets/icons/safari_ios.svg' ],
    ],
];
$all_browsers = array_merge( $support_browsers['PC'], $support_browsers['Mobile'] );
$status = [
    'Sloth Styles' => [
        //'{Feature}'  => [ '{Browser_Slug}' => (0:Nogood|1:Okey|2:Alert|3:Unknown)|['state' => num, 'note' => num]
        'Typograpy'    => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Lists'        => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Links'        => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Forms'        => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => ['state' => 2, 'note' => 1], 'op' => 1, 'ie' => ['state' => 2, 'note' => 3], 'cm' => 1, 'sm' => 1 ],
        'Buttons'      => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Tables'       => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Grid Systems' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => ['state' => 2, 'note' => 4], 'cm' => 1, 'sm' => 1 ],
        'Components'   => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => ['state' => 2, 'note' => 5], 'cm' => 1, 'sm' => 1 ],
        'Colors'       => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => ['state' => 2, 'note' => 6], 'cm' => 1, 'sm' => 1 ],
        'Utilities'    => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => ['state' => 2, 'note' => 2], 'op' => 1, 'ie' => ['state' => 2, 'note' => 2], 'cm' => 1, 'sm' => 1 ],
        'Overriding Properties' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => ['state' => 0, 'note' => 6], 'cm' => 1, 'sm' => 1 ],
        //'' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
    ],
    'Sloth Extensions' => [
        'Element Sizing'  => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
        'Option Mapping'  => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Toggle Password' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Image Uploader'  => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => ['state' => 2, 'note' => 7], 'cm' => 1, 'sm' => 1 ],
        'Class Switching' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Validation Form' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Dialog'          => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Lazy Loading Images' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 0, 'cm' => 1, 'sm' => 1 ],
        'Sticky Footer'   => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 3, 'cm' => 1, 'sm' => 1 ],
        'Table Of Contents' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 3, 'cm' => 1, 'sm' => 1 ],
        'Fixed Backdrop'  => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 3, 'cm' => 1, 'sm' => 1 ],
        //'' => [ 'cp' => 1, 'ff' => 1, 'sp' => 1, 'eg' => 1, 'op' => 1, 'ie' => 1, 'cm' => 1, 'sm' => 1 ],
    ],
];
$state_icon_classes = [
    'far fa-times-circle txt-tert', 'far fa-check-circle txt-sec', 'fas fa-exclamation-circle txt-quat', 'fas fa-question-circle txt-gray',
];
$notes = [];
?>
<section id="what-extensions" class="mx2">
  <h3>Supported Browsers</h3>
  <p>
    The following browsers are supported as Sloth operating environment.<br>
    And furthermore, we will not continue to support browsers that are not listed below or that have only cheap features, such as non-modern browsers.
  </p>
  <div class="ad-block my1" style="min-height:90px;"><ins class="adsbygoogle"
   style="display:block;width:100%;height:max-content;min-height:90px;"
   data-ad-client="ca-pub-8602791446931111"
   data-ad-slot="6050360069"
   data-ad-format="auto"
   data-full-width-responsive="true"></ins></div>
  <table class="cell-center" data-switch-class="sm:fixed">
    <thead>
      <tr>
      <th data-size="w:auto,mw:(100% - (38px * 8)),minw:((100% / 10) * 2)" rowspan="2" colspan="2"></th>
<?php foreach ( $support_browsers as $_cat => $_browsers ) : ?>
      <th colspan="<?= count( $_browsers ); ?>"><?= $_cat ?></th>
<?php endforeach; ?>
      </tr>
      <tr>
<?php foreach ( $all_browsers as $_slug => $_vals ) : ?>
      <th data-size="w:(100% / 10),minw:(100% / 10),mw:62px"><img alt="<?= $_vals['label'] ?>" src="<?= $_vals['icon_src'] ?>" width="44" height="44" data-size="w:100%,mw:44px,minw:20px"></th>
<?php endforeach; ?>
      </tr>
    </thead>
    <tbody>
      <tr>
<?php foreach ( $status as $_cat => $_data ) : ?>
      <th class="txt-left" data-switch-class="sm:txt-break" style="border-right: 1px solid rgba(33,37,41,.1);" rowspan="<?= count( $_data ) ?>"><p style="-webkit-writing-mode: vertical-rl;-ms-writing-mode: tb-rl;writing-mode: vertical-rl;margin:.25em auto;transform: rotate(-180deg);"><?= $_cat ?></p></th>
<?php   foreach ( $_data as $_feature => $_stats ) : ?>
      <th class="txt-left" data-switch-class="sm:txt-break" style="border-left: none;"><?= $_feature ?></th>
<?php     foreach ( $_stats as $_slug => $_state ) :
            if ( array_key_exists( $_slug, $all_browsers ) ) {
                $browser_name = $all_browsers[$_slug]['label'];
            } else {
                continue;
            }
            if ( is_array( $_state ) ) {
                $_tmpl = '<td><a class="nons" href="#note-%d"><i class="%s" data-switch-class="md:fa-lg,lg:fa-lg"></i> <small>Note %d</small></a></td><!-- %s -->';
                $notes[] = $_state['note'];
                printf( $_tmpl, $_state['note'], $state_icon_classes[$_state['state']], $_state['note'], $browser_name );
            } else {
                $_tmpl = '<td><i class="%s" data-switch-class="md:fa-lg,lg:fa-lg"></i></td><!-- %s -->';
                printf( $_tmpl, $state_icon_classes[(int) $_state], $browser_name );
            }
          endforeach; ?>
      </tr>
<?php     if ( $_cat !== array_key_last( $status ) ) : ?>
      <tr>
<?php     endif;
        endforeach;
      endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
      <th rowspan="2" colspan="2"></th>
<?php foreach ( $all_browsers as $_slug => $_vals ) : ?>
      <th data-size="w:(100% / 10),minw:(100% / 10),mw:62px"><img alt="<?= $_vals['label'] ?>" src="<?= $_vals['icon_src'] ?>" width="44" height="44" data-size="w:100%,mw:44px,minw:20px"></th>
<?php endforeach; ?>
      </tr>
      <tr>
<?php foreach ( $support_browsers as $_cat => $_browsers ) : ?>
      <th colspan="<?= count( $_browsers ); ?>"><?= $_cat ?></th>
<?php endforeach; ?>
      </tr>
    </tfoot>
  </table>
</section>

<div class="my1" data-switch-class="sm:mx1,md:mx2,lg:mx2">
  <h5>Note:</h5>
  <ul class="unstyled">
<?php
$notices = [
    'Some toggle switch animations do not work properly.',
    'The <code>.flx-evenly</code> class does not support.',
    'The styles do not apply properly in some selection boxes etc.',
    'There is not able to use the <code>.grid</code> class because it does not support the CSS grid.',
    'At the IE, there does not work the Navigation Menu component.',
    'There does not work the CSS variables because it does not support that.',
    'At the IE, there does not apply the field for preview an image.',
    'Some styles do not apply properly.',
];
?>
<?php foreach ( $notes as $_num ) : ?>
    <li><p class="note"><a id="note-<?= $_num ?>" name="note-<?= $_num ?>">Note <?= $_num ?>:</a> <?= $notices[$_num] ?></p></li>
<?php endforeach; ?>
  </ul>
</div>
