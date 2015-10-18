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


</head>
<body class="snipcart-overwrite">

<div class="homething">



  <header>
    <div class="full">
      <div class="logo">
        <a href="/">
         <img src="<?php echo $site->url() ?>/assets/images/logo.svg" width="240" alt="">
        </a>
      </div>

      <?php snippet('menu') ?>

    </div>

    <nav class="cart">
      <span class="snipcart-summary">
          Cart:<span class="snipcart-total-items"></span>
          Total:<span class="snipcart-total-price"></span>
      </span>
      
      <a href="#" class="snipcart-checkout">View cart</a>
    </nav>

  </header>



    


  <div id="wrap" >
      
