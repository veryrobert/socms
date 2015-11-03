<?php snippet('header') ?>

<section class="about page content">

	<div class="full title">
	      <h2><?php echo $page->info() ?></h2>


	</div>


	


	 <div class="full">  

  
  		  <div class="third text-center">
	      <?php echo $page->addressOne()->kirbytext() ?>
    	</div>

	    <div class="third text-center">
	      <?php echo $page->addressTwo()->kirbytext() ?>
    	</div>
    
	    <div class="third text-center">
	      <?php echo $page->addressThree()->kirbytext() ?>
    	</div>
    </div>

</section>

<?php snippet('footer') ?>