<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">

	<?php wp_head(); ?>
</head>
<body>
	<div class="container<?php if(is_front_page()) echo ' front_page' ?>">
		<div class="header">
			<div class="header_top">			
				<a href="<?php echo home_url(); ?>" class="logo"></a>
				<a href="#" class="select_language">EN</a>				
				<div class="header_social">
					<a href="#1"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#2"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#3"><i class="fa fa-youtube" aria-hidden="true"></i></a>
					<a href="#4"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					<a href="#5"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>