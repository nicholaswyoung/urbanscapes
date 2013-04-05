<div id='press' class='widget press'>
	<h2 class='subhead'>Press</h2>
	<ul class='basic-list'>
		<?php $reviews = $pages->findByUID('press')->children()->visible() ?>
		<?php foreach ($reviews as $review): ?>
			<li class='review'>
				<?php echo kirbytext($review->text()) ?>
				<a href='<?php echo $review->link() ?>' class='citation'>
					- <?php echo $review->source() ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</div>