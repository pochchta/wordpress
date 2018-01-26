<div class="sidebar">
	<div class="nav">
		<h3>Menu</h3>
		<?php wp_nav_menu([
				'theme_location' => 'left_menu',
				'container' => null,
				'items_wrap' => '<ul>%3$s</ul>'
			]);
		?>			
	</div>
	<?php if(is_active_sidebar('left-widget')): ?>
		<div class="widget">
			<?php dynamic_sidebar('left-widget') ?>
		</div>
	<?php endif; ?>
</div>


