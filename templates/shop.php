<?php snippet('header') ?>

      <section class="shop page">

      	<div class="full">

			<?php foreach($page->children() as $subpages): ?>
			
			<div class="half product">
				
<a href="<?php echo $subpages->url() ?>">
				<?php if($image = $subpages->image()): ?>
					<img src="<?php echo $image->url() ?>" alt="">
				<?php endif ?>

				<h4><?php echo html($subpages->title()) ?></h4>
				 <span class="view">View Piece</span></a>

				</div>
			<?php endforeach ?>
		
		</div>

		</section>

<?php snippet('footer') ?>