<?php get_header(); ?>
<div class="content clearfix">
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
		<div class="banner">
			Now is open!
		</div>
	</div>
	<div class="breadcrumbs clearfix">
		<div class="crumb"><a href="index.html">Home</a></div>
		<div class="crumb"><a href="#">Apparel</a></div>
		<div class="crumb"><a href="#">Women</a></div>
	</div>
	<div class="products clearfix">
		<div class="category">
			<a href="#" class="category_name"></a>
			<div class="blocks">
				<a href="#" class="new">				
					<img src="#" alt="">					
					<div class="text">
						<div class="name">SLEEVE SPRING SUIT</div>
						<div class="price">
							<div class="new">€.865.00</div>
							<div class="old"></div>									
						</div>
					</div>
				</a>
				<a href="#" class="hot">					
					<img src="#" alt="">
					<div class="text">
						<div class="name">SALTY DAYZ</div>
						<div class="price">
							<div class="new">€.770.50</div>
							<div class="old">€.1,270.15</div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">CHEEKY JANE</div>
						<div class="price">
							<div class="new">€.280.70</div>
							<div class="old"></div>
						</div>
					</div>
				</a>

				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">SYNERGY 2MM BACK ZIP</div>
						<div class="price">
							<div class="new">€.765.00</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">SYNERGY 2MM BACK ZI</div>
						<div class="price">
							<div class="new">€.230.50</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">SURF YOKE 19 QS</div>
						<div class="price">
							<div class="new">€.330.70</div>
							<div class="old"></div>
						</div>
					</div>
				</a>

				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">OG SCALLOP SOLID</div>
						<div class="price">
							<div class="new">€.765.00</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">STRIPE 19 QS</div>
						<div class="price">
							<div class="new">€.230.50</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">YOKE 19 QS</div>
						<div class="price">
							<div class="new">€.330.70</div>
							<div class="old"></div>
						</div>
					</div>
				</a>

				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">DOLLS TANK TOP</div>
						<div class="price">
							<div class="new">€.765.00</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">PULLOVER TOP</div>
						<div class="price">
							<div class="new">€.230.50</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">ENEVER TOP</div>
						<div class="price">
							<div class="new">€.330.70</div>
							<div class="old"></div>
						</div>
					</div>
				</a>		

				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">RELAY RACE HENLEY TOP</div>
						<div class="price">
							<div class="new">€.765.00</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">BREEZE ZIP UP</div>
						<div class="price">
							<div class="new">€.230.50</div>
							<div class="old"></div>
						</div>
					</div>
				</a>
				<a href="#">
					<img src="#" alt="">
					<div class="text">
						<div class="name">BREEZE ZIP UP JACKE</div>
						<div class="price">
							<div class="new">€.480.70</div>
							<div class="old"></div>
						</div>
					</div>
				</a>																	
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
