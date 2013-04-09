<?php snippet('header') ?>
<section class='content gallery'>
	<ul class='gallery'>
	<?php foreach($page->children() as $photo): ?>
		<li class='photo'>
			<?php snippet('gallery/photo', array('photo' => $photo)) ?>
		</li>
	<?php endforeach ?>
	</ul>
</section>
<?php snippet('footer') ?>