<div class='photo <?php echo $photo->name() ?>'>
	<img class='preview' src='<?php echo $photo->url() ?>' />
	<div class='meta'>
		<h3><?php echo $photo->title() ?></h3>
		<button class='add' data-id='<?php echo $photo->id() ?>'>
			Add to Cart
		</button>
	</div>
</div>