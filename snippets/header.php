<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  
  <link type="text/css" href="https://cdn.snipcart.com/themes/base/snipcart.min.css" rel="stylesheet" />


<?php echo css('assets/css/snipcart-overwrite.css') ?>
<?php echo css('assets/css/fixes.css') ?>
<?php echo css('assets/css/lightslider.css') ?>

<?php echo js(array('assets/js/instafeed.min.js')) ?>

</head>
<body class="snipcart-overwrite">

<div id="loader">



</div>


<section class="intro">
      <a href="#" class="sphere out" alt="Sphere One">

Sphere One

      </a>

      <div class="title out">
        <h1><?php echo $page->bannertext() ?></h1>
        <a href="#" class="view">View Collection</a>
      </div>
      
      <a href="#" class="lucy out" alt="Lucy Downes">
LucyDownes
      </a>
    </section>

<div class="homething">


  <header>
    <div class="full">
      <div class="logo">
        <a href="/">
         <!-- <img src="<?php echo $site->url() ?>/assets/images/logo.svg" width="240" alt=""> -->
        </a>
      </div>

      <?php snippet('menu') ?>

    </div>

    <nav class="cart">
      
      
        <ul class="snipcart-summary">
          <li>Cart: <span class="snipcart-total-items"></span></li>
          <li>Total: <span class="snipcart-total-price"></span></li>
          <li><a href="#" class="snipcart-checkout">View cart</a></li>
      </ul>
    </nav>

  </header>


  <div id="wrap" class="out">
      
