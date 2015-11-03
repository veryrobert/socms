<?php snippet('header') ?>


<section class="jumbotron full-width no-margin-bottom single article-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3 text-center">
                  <h1><?php echo html($page->title()) ?></h1>
                  <div class="meta">
                    <time class="small" datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('F dS, Y'); ?></time>
                    <?php if($page->tags() != ''): ?><br/>
                    <ul class="tags inline text-center">
                      <?php foreach(str::split($page->tags()) as $tag): ?>
                      <li><a href="<?php echo url('/blog/tag:' . urlencode($tag)) ?>">#<?php echo $tag; ?></a></li>
                      <?php endforeach ?>
                    </ul>
                    <?php endif ?>
                  </div>
            </div>
        </div>
    </div>
</section>



<section class="full-width bg-blue blog-article">
  <div class="container">
    <div class="row">
      <article class="col-lg-8 col-lg-offset-2">
        <hr>
        <div class="content">
  		    <?php echo kirbytext($page->text()) ?>
        </div>
        <hr>
        <div>
          <a class="btn btn-secondary small" href="<?php echo url() ?>">Go Back</a>
          <a class="btn btn-secondary small" href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($site->title()) ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @novitechnology')?>" target="blank" title="Tweet this">Tweet</a>
        </div>
      </article>
    </div>
  </div>
</section>



<?php snippet('footer') ?>