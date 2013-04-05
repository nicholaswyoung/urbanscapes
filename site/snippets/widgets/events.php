<div id='events' class='widget'>
	<h2 class='subhead'>Upcoming Events</h2>
	<ul class='basic-list'>
		<?php $events = $pages->findByUID('events')->children()->visible() ?>
		<?php foreach ($events as $event): ?>
			<li class='event'>
				<a href='<?php echo $event->link() ?>' target='_blank'><?php echo $event->date('M d') ?> &mdash; <?php echo $event->city() ?>, <?php echo $event->state() ?></a>
				<?php echo kirbytext($event->text()) ?>
			</li>
		<?php endforeach ?>
	</ul>
</div>