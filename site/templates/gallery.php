<?php snippet('header') ?>
<section class='content gallery'>
	<?php foreach($page->images() as $photo): ?>
		<?php if ($photo->name() == 'header') continue ?>
		<?php snippet('gallery/photo', array('photo' => $photo)) ?>
	<?php endforeach ?>
</section>
<form class='cart' action=''>
	<input type='hidden' class='items' value='' />
	<button class='checkout'>Checkout</button>
</form>
<?php snippet('footer') ?>