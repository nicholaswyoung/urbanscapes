<ul class='menu'>
	<?php foreach ($pages->visible() as $page): ?>
		<li<?php ecco($page->isOpen(), " class='active'") ?>>
		<?php if ($page->type() == 'page'): ?>
			<a<?php ecco($page->isOpen(), " class='active'") ?> href='<?php echo $page->url() ?>'>
				<?php echo html($page->title()) ?>
			</a>
		<?php else: ?>
			<a<?php ecco($page->isOpen(), " class='active'") ?> href='/#<?php echo $page->uid() ?>'>
				<?php echo html($page->title()) ?>
			</a>
		<?php endif ?>
		</li>
	<?php endforeach ?>
</ul>
