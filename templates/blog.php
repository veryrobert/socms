<?php snippet('header') ?>

<section class="page content collection blog">

<div class="centered">
<div class="center">
  <?php if(param('tag')): // show tag results ?>
    <?php $tag = urldecode(param('tag'));
          $articles = $pages->find('blog')
                            ->children()
                            ->filterBy('tags', $tag, ',')
                            ->flip()
                            ->paginate(10);
    
    ?>
  

  <!-- Tag Results -->


    <ul>      
      <?php foreach($articles as $article): ?>
      
      <li>
        
        <h1><a class="orange-text" href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h1>
        
        <div class="meta">
          <?php if ($article->tags() != ''): ?>
          <ul class="tags inline">
            <li datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></li>
            <?php foreach(str::split($article->tags()) as $tag): ?>
            <li><a href="<?php echo url('/blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>
        </div>
      </li>
      <hr>
      <?php endforeach ?>
    </ul>


    <?php else: // show latest articles ?>
    
  <!-- Article Excerpts -->





    <?php $articles = $pages->find('blog')->children()->flip()->paginate(10) ?>
    <?php foreach($articles as $article): ?>

  <div class="article">

   
          <h1 class="full title"><a class="large" href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?><br><span class="small" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('F dS, Y'); ?></span></a> </h1> 

     
         
        <?php echo excerpt($article->text(), 400) ?>
          <a class="all" href="<?php echo $article->url() ?>">Read More</a>
          <?php if($article->tags() != ''): ?>
            <ul>
       
        </li>
            <?php foreach(str::split($article->tags()) as $tag): ?>
            <li><a href="<?php echo url('/blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
            <?php endforeach ?>
            </ul>
      </div>

    <?php endif ?>
    <?php endforeach // article overview ends ?>
    <?php endif ?>
    <?php if($articles->pagination()->hasPages()): // pagination ?>
    <nav class="pagination cf">
      <?php if($articles->pagination()->hasPrevPage()): ?>
      <a class="button prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; newer posts</a>
      <?php endif ?>
      <?php if($articles->pagination()->hasNextPage()): ?>
      <a class="button next" href="<?php echo $articles->pagination()->nextPageURL() ?>">older posts &rsaquo;&rsaquo;</a>
      <?php endif ?>
    </nav>



    <?php endif ?>

</div>
</div>
  


</section>

<?php snippet('footer') ?>