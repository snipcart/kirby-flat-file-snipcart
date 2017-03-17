<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php echo css('assets/css/main.css') ?>
    <script
      src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"
      type="text/javascript"></script>

    <link id="snipcart-theme" type="text/css"
        href="https://cdn.snipcart.com/themes/2.0/base/snipcart.min.css"
        rel="stylesheet">
  </head>
  <body>
    <div class="main-section">

    <header class="header cf" role="banner">
      <a class="logo" href="<?php echo url() ?>">
        <img width="200" src="<?php echo url('assets/images/snipcart-logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>

      <?php snippet('menu') ?>
    </header>
