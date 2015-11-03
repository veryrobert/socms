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


 <?php foreach($page->shopImages()->yaml() as $shop) {

          
                $imageone = $page->file($shop['imageone'])->url();
                $imagetwo = $page->file($shop['imagetwo'])->url();
                $imagethree = $page->file($shop['imagethree'])->url();
                $imagefour = $page->file($shop['imagefour'])->url();
              
  
              }
  ?>


      <div class="twothirds gallery">
                    <div class="thumbs">
                <?php 

                    echo html('
                  <ul>
                  <li><a href="#"><img src="'.$imageone.'" alt=""></a></li>
                  <li><a href="#"><img src="'.$imagetwo.'" alt=""></a></li>
                  <li><a href="#"><img src="'.$imagethree.'" alt=""></a></li>
                  <li><a href="#"><img src="'.$imagefour.'" alt=""></a></li>
                </ul>');

                 ?>
              </div>
                <?php if($image = $page->image()): ?>
                  <div class="mainImage">
            <img src="<?php echo $image->url() ?>" alt="">
          </div>
        <?php endif ?>
            </div>



        <div class="third info">
         <h1><?php echo $page->parent()->title() ?><span class="price">€<?php echo $page->parent()->price() ?></span></h1>
         <?php echo $page->parent()->material()->kirbytext() ?>
         <?php echo $page->parent()->shortdescription()->kirbytext() ?>

          <div class="full">
<!--                  <div class="sizes half">
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
 -->
                <div class="cart full no-margin-top">
                  <a href="#"
    class="snipcart-add-item"
    data-item-id="1"
    data-item-name="<?php echo $page->parent()->title() ?>"
    data-item-price="<?php echo $page->parent()->price() ?>"
    data-item-url="http://c3dc8589.ngrok.io/"
    data-item-description="<?php echo $page->parent()->shortdescription() ?>"
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
                  <?php echo $page->parent()->details()->kirbytext() ?>
                  </div>
                </li>
                </ul>
                <ul class="dropdown no-margin-top">
                <li>
                  <a href="#"><strong>Measurements</strong></a>
                  <div class="hide">
                     <?php echo $page->parent()->measurments()->kirbytext() ?>
                  </div>
                </li>
              </ul>
            </div>


        </div>
      </div>
    </div>



<div class="full">

<?php 
  
  $items = false;

  $currentPage = $page->parent()->children()->findOpen();
  $subPages = $page->parent()->children();

  foreach ($subPages as $subPage) {
    if ($subPage !== $currentPage) {
      echo $subPage->title();
    }
  }

 ?>



</div>

</section>




<?php snippet('footer') ?>