<?php get_header(); ?>
<div class="content clearfix">
	<?php get_sidebar(); ?>
	<div class="main_col clearfix">
		<div class="breadcrumbs clearfix">
			<div class="crumb"><a href="index.html">Home</a></div>
			<div class="crumb"><a href="#">Apparel</a></div>
			<div class="crumb"><a href="#">Women</a></div>
		</div>
		<div class="products clearfix">

			<?php if(have_posts()): the_post(); ?>
				<div class="info">
					<div class="photo">
						<a href="<?php the_post_thumbnail_url('large') ?>" class="main"><?php the_post_thumbnail('single-thumb') ?></a>
<!-- 						<div class="small">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
						</div> -->
					</div>
					<div class="text">
						<div class="name"><?php the_title(); ?></div>
						<div class="price"><?php if(CFS()->get('price')): echo '€. '.CFS()->get('price'); endif ?></div>
						<div class="border"></div>
						<div class="subheader">Quick Overview:</div>
						<div class="short_description">
							<?php $title = get_the_content(); echo mb_substr($title, 0, 30); if (mb_strlen($title) > 30) echo '...'; ?>
						</div>
						<div class="border"></div>
						<a href="#" class="add">ADD TO CART</a>
					</div>
					<div class="description">
						<div class="clr"></div>						
						<div class="button">Product description</div>				
						<input type="checkbox" checked="checked">
						<div class="spoiler">
							<?php the_content() ?>
						</div>
					</div>
				</div>	
			<?php else: ?>	
				Товар не найден
			<?php endif; ?>

		</div>
	</div>
	<div class="social_buttons clearfix">
		<a href="#1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="#2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="#3"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
	</div>
</div>
<?php get_footer(); ?>
