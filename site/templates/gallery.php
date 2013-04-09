<?php snippet('header') ?>
<section class='content gallery'>
	<?php foreach($page->images() as $photo): ?>
		<?php if ($photo->name() == 'header') continue ?>
		<?php snippet('gallery/photo', array('photo' => $photo)) ?>
	<?php endforeach ?>
</section>
<?php snippet('footer') ?>