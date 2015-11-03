<?php snippet('header') ?>

    <section class="collection page">


    <div class="full title">
      <h1>Autumn/Winter 2015</h1>
    </div>

	<?php foreach($page->builder()->toStructure() as $collection): ?>
  		<?php snippet( snippet('collection/' . $collection->_fieldset(), array('collection' => $collection)) ) ?>
	<?php endforeach ?>

	</section>

<?php snippet('footer') ?>




