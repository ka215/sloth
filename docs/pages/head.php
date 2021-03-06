<?php
$page = get_globals( 'page' );
$sloth_version = get_globals( 'sloth_version' );
?>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta charset="utf-8">
  <title>Sloth - Mobile First CSS Lightweight Framework</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sloth has reduced styling coding costs to a minimum with non-BEM and simpler naming conventions than OOCSS.">
  <meta name="author" content="ka2">
  <meta name="generator" content="Sloth <?= $sloth_version ?>">
  <link rel="stylesheet" href="<?= optimize_uri( 'sloth.min.css' ) ?>">
  <link rel="stylesheet" href="<?= optimize_uri( 'sloth.index.min.css' ) ?>">
  <link rel="icon shortcut" href="<?= optimize_uri( 'sloth.ico' ) ?>" type="image/x-icon">
  <link rel="icon" sizes="any" href="<?= optimize_uri( 'sloth.svg' ) ?>" type="image/svg+xml">
  <link rel="mask-icon" href="<?= optimize_uri( 'sloth.svg' ) ?>" color="black">
  <style>[data-standby]{visibility:hidden;opacity:0;transition:opacity 0.5s ease}</style>
</head>
