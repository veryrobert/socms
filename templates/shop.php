<?php snippet('header') ?>

      <section class="shop page">


        <div class="full">
          <div class="filter">
            <ul>
              <li><a href="/shop/tag:featherweight">Featherweight</a></li>
              <li><a href="/shop/tag:scottish-weight">Scottish Weight</a></li>
              <li><a href="/shop/tag:sumptuous-knits">Sumptuous knits</a></li>
            </ul> 
          </div>
        </div>


<?php

$tags = $page->children()->pluck('tags', ',', true);

?>


<?php 	function seoUrl($string) {
    //Lower case everything
    $string = strtolower($string);
    //Make alphanumeric (removes all other characters)
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    //Clean up multiple dashes or whitespaces
    $string = preg_replace("/[\s-]+/", " ", $string);
    //Convert whitespaces and underscore to dash
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
	}
 ?>

  <?php foreach($tags as $tag): ?>

	<a href="<?php echo url('shop/tag:' . seoUrl($tag))?>">
      <!-- <?php echo html($tag) ?> -->
    </a>
      
 <?php endforeach ?>



     
    <?php if(param('tag')): // show tag results ?>
    <?php $tag = urldecode(param('tag'));
          $products = $pages->find('shop')
                            ->children()
                            ->filterBy('tags', $tag, ',');
    
    ?>

    <div class="full">
      
      <?php foreach($products as $product): ?>
      
        
        <div class="half product">
        
        <a href="<?php echo $product->url() ?>">
        <?php if($image = $product->image()): ?>
          <img src="<?php echo $image->url() ?>" alt="">
        <?php endif ?>

        <h4><?php echo html($product->title()) ?></h4>
         <span class="view">View Piece</span></a>

        </div>
        
        
      <?php endforeach ?>





 

    <?php else: // show all products ?>


      	<div class="full">

			<?php foreach($page->grandchildren() as $subpages): ?>
			
				<div class="half product">
				
				<a href="<?php echo $subpages->url() ?>">
				<?php if($image = $subpages->image()): ?>
					<img src="<?php echo $image->url() ?>" alt="">
				<?php endif ?>

				<h4><?php echo html($subpages->parent()->title()) ?></h4>
				 <span class="view"><?php echo html($subpages->title()) ?></span><br>
         <!-- <span class="view">View Piece</span> --></a>

				</div>
			<?php endforeach ?>
		
		</div>




<?php endif ?>


</section>





<?php snippet('footer') ?>