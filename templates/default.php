<?php snippet('header') ?>

<section>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

</section>

<?php snippet('footer') ?>