<ul class='menu'>
	<?php foreach ($pages->visible() as $page): ?>
		<li<?php ecco($page->isOpen(), " class='active'") ?>>
		<a<?php ecco($page->isOpen(), " class='active'") ?> href='#<?php echo $page->uid() ?>'>
				<?php echo html($page->title()) ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>
