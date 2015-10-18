<?php snippet('header') ?>

      <section class="product page">
		<div class="fluid">
	      	<div class="full">


<?php 

$colours = $page->colours();
$newColours = str_replace(',', '|', $colours);

$sizes = $page->sizes();
$newSizes = str_replace(',', '|', $sizes);

?>









			<div class="twothirds gallery">
			              <div class="thumbs">
                <ul>
                  <li><a href="#"><img src="http://placehold.it/700x800" alt=""></a></li>
                  <li><a href="#"><img src="http://placehold.it/700x800/000" alt=""></a></li>
                  <li><a href="#"><img src="http://placehold.it/700x800/f0f" alt=""></a></li>
                </ul>
              </div>
              	<?php if($image = $page->image()): ?>
              		<div class="mainImage">
						<img src="<?php echo $image->url() ?>" alt="">
					</div>
				<?php endif ?>
            </div>



				<div class="third info">
				 <h1><?php echo $page->title() ?><span class="price">€<?php echo $page->price() ?></span></h1>
				 <?php echo $page->longdescription()->kirbytext() ?>

					<div class="full">
	                <div class="sizes half">
	               		<span class="custom-dropdown">
					    <select>  
					       <option value="NULL" disabled="" selected="">Colour</option>
					        <option>Large</option>
					        <option>Medium</option>  
					        <option>Small</option>
					    </select>
					</span>
	                </div>

	                <div class="colours half">

					<span class="custom-dropdown">
					    <select>  
					       <option value="NULL" disabled="" selected="">Select Size</option>
					        <option>Large</option>
					        <option>Medium</option>  
					        <option>Small</option>
					    </select>
					</span>

	              </div>

	              <div class="cart full">
                  <a href="#"
    class="snipcart-add-item"
    data-item-id="1"
    data-item-name="<?php echo $page->title() ?>"
    data-item-price="<?php echo $page->price() ?>"
    data-item-url="http://c3dc8589.ngrok.io/"
    data-item-description="<?php echo $page->longdescription() ?>"
    data-item-custom1-name="Colour"
    data-item-custom1-options="<?php echo $newColours; ?>"
    data-item-custom2-name="Size"
    data-item-custom2-options="<?php echo $newSizes; ?>"
    >
    Add to Cart
</a>
                  </div>


              	<ul class="dropdown">
                <li>
                  <a href="#"><strong>Details &amp; Fit</strong></a>
                  <div class="hide">
                  <?php echo $page->details()->kirbytext() ?>
                  </div>
                </li>
                </ul>
                <ul class="dropdown no-margin-top">
                <li>
                  <a href="#"><strong>Measurements</strong></a>
                  <div class="hide">
                     <?php echo $page->measurments()->kirbytext() ?>
                  </div>
                </li>
              </ul>
            </div>


				</div>
			</div>
		</div>

		</section>

<?php snippet('footer') ?>