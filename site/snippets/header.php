<?php snippet('head') ?>
<?php snippet('noscript') ?>
<header class='top<?php ecco($page->class(), " {$page->class()}") ?>'>
	<?php 
		$images = array(
			array('name' => 'Barred', 'class' => 'barred'),
			array('name' => 'Deep Dig', 'class' => 'deep-dig'),
			array('name' => 'Irradiated', 'class' => 'irradiated'),
			array('name' => 'Spokes', 'class' => 'spokes'),
		);
		$current_image = array_rand($images);
	?>
	<?php snippet('header-background', array('current_image' => $images[$current_image])) ?>
	<div class='wrap'>
		<nav class='main background-<?php echo $images[$current_image]['class'] ?>'>
			<a class='logo' href='<?php echo url() ?>'>
				<h1><?php echo $site->title() ?>: <?php echo $site->subtitle() ?></h1>
			</a>
			<?php snippet('main-menu', array('placement' => 'main')) ?>
		</nav>
	</div>
	<?php if (!$page->url() != url()): ?>
		<?php snippet('heading') ?>
	<?php endif ?>
</header>