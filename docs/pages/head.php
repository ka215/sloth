<?php
$page = get_globals( 'page' );
?>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
  <title>Sloth - Mobile First CSS Lightweight Framework</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ka2">
  <meta name="description" content="Sloth has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.">
  <link rel="stylesheet" href="<?= optimize_uri('dist/sloth.min.css') ?>">
<?php if ( $page != 2 && $page != 3 ) : ?>
  <link rel="stylesheet" href="<?= optimize_uri('assets/sloth.index.min.css') ?>">
<?php endif; ?>
  <link rel="icon shortcut" href="<?= optimize_uri('assets/sloth.ico') ?>" type="image/x-icon">
  <link rel="icon" sizes="any" href="<?= optimize_uri('assets/sloth.svg') ?>" type="image/svg+xml">
  <link rel="mask-icon" href="<?= optimize_uri('assets/sloth.svg') ?>" color="black">
</head>
