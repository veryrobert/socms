<?php snippet('header') ?>

<div class="home page">
    <section class="collection">
        <div class="full title">
            <h2><?php echo $page->collectiontext() ?>
            </h2>
            <a class="view" href="<?php echo $page->collectiontext() ?>"><?php echo $page->collectiontitle() ?></a>
        </div>


        <div class="full">
            <?php foreach($page->collectionImages()->yaml() as $collection) {

                $title = $collection['featuretitle'];
                $featureimage = $collection['featureimage'];
                $imageUrl = $page->file($featureimage)->url();

            echo html('<div class="third product"><img src="'.$imageUrl.'" alt="'.$title.'"><h4>'.$title.'</h4></div>'); 

              }

            ?>
        </div>


        <div class="full center">
            <a class="all" href="/collection">View All</a>
        </div>
    </section>


    <section class="shop">
  
          <div class="full">
            <div class="half">
              <h3><?php echo $page->shoptext() ?></h3>
            </div>
          </div>

          <div class="full">

            <?php foreach($page->shopImages()->yaml() as $shop) {

                $title = $shop['featuretitle'];
                $image = $shop['featureimage'];
                $link = $shop['shoplink'];
                $imageUrl = $page->file($image)->url();
      
                echo html('<div class="half product">
                  <a href="'.$link.'">
                    <img src="'.$imageUrl.'" alt="'.$title.'">
                    <h4>'.title.'</h4>
                    <span class="view">View Piece</span>
                  </a>
                </div>');

              }

            ?>

          </div>
      
    </section>



        <section class="pages">
          
          <div class="full">
            
            <?php foreach($page->pagelink()->yaml() as $pagelink) {

                $title = $pagelink['pagetitle'];
                $image = $pagelink['pageimage'];
                $link = $pagelink['pagelink'];
                $imageUrl = $page->file($image)->url();
      
              echo html('<div class="third page"><a href="'.$link.'">
              <h3>'.$title.'</h3>
              <img src="'.$imageUrl.'" alt="'.$title.'">
              </a>
            </div>');

              }

            ?>
 

          </div>

        </section>


</div>
<?php snippet('footer') ?>


