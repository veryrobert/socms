<?php snippet('header') ?>

<section class="about page content">

	<div class="full title">
	      <h2><?php echo $page->title()->html() ?></h2>
	</div>

    <div class="full">
	    <div class="sixthoffset twothirds">
	      <?php echo $page->text()->kirbytext() ?>
    	</div>
    </div>

</section>

<?php snippet('footer') ?>