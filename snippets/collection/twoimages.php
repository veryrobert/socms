<div class="full">
  <div class="sixthoffset twothirds">
    <div class="half product">
		<img src="<?php echo $collection->imageone()->toFile()->url() ?>" alt="Collection Image">
		<p><?php echo $collection->imagetitleone() ?><br>
		<span><?php echo $collection->imagedescriptionone() ?></span></p>
	</div>

	<div class="half product">
		<img src="<?php echo $collection->imagetwo()->toFile()->url() ?>" alt="Collection Image">
		<p><?php echo $collection->imagedescriptiontwo() ?><br>
		<span><?php echo $collection->imagedescriptiontwo() ?></span></p>
	</div>
  </div>
</div>