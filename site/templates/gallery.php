<?php snippet('header') ?>
<section class='content gallery'>
	<aside class='sidebar'>
		<nav class='gallery-type'>
			<ul>
				<li class='title'>
					Purchasing Options
				</li>
				<li>
					<a href='/gallery/type:individual'>Individual Photos</a>
				</li>
				<li>
					<a href='/gallery/type:packages'>Special Packages</a>
				</li>
			</ul>
		</nav>
	</aside>
	<div class='main'>
		<?php if (!$site->uri->params('type') || $site->uri->params('type') == 'individual'): ?>
			<?php snippet('gallery/individual') ?>
		<?php endif ?>
		<?php if ($site->uri->params('type') == 'packages'): ?>
			<?php snippet('gallery/packages') ?>
		<?php endif ?>
	</div>
</section>
<script src='https://www.shoplocket.com/assets/widgets/embed.js' type='text/javascript'></script>
<?php snippet('footer') ?>