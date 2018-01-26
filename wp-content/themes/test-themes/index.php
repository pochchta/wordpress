<?php get_header(); ?>
<div class="content clearfix">
	<?php get_sidebar(); ?>
	<div class="breadcrumbs clearfix">
		<div class="crumb"><a href="index.html">Home</a></div>
		<div class="crumb"><a href="#">Apparel</a></div>
		<div class="crumb"><a href="#">Women</a></div>
	</div>
	<div class="products clearfix">
		<div class="category">
			<a href="#" class="category_name"></a>
			<div class="blocks">

				<?php if(have_posts()): 
					while(have_posts()): the_post(); ?>

						<a href="<?php the_permalink(); ?>" class="new">
							<?php the_post_thumbnail('thumbnail') ?>
							<div class="text">
								<div class="name"><?php the_title(); ?></div>
								<div class="price">
									<div class="new">€.865.00</div>
									<div class="old"></div>									
								</div>
							</div>
						</a>

					<?php endwhile; ?>
				<?php else: ?>	
					Товаров не найдено
				<?php endif; ?>	

			</div>
		</div>
	</div>
	<div class="social_buttons clearfix">
		<a href="#1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="#3"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
	</div>
</div>
<?php get_footer(); ?>
