<?php get_header(); ?>

<div class="carousel">

	<div class="slide-content">
		<img src="<?php echo get_template_directory_uri(); ?>/img/wolfbadger-logo.png" />
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	</div>
	
	<button>Find out more</button>
	
</div>

<div class="container">
	<div id="product-area">
	
		<div class="title">Fashion Accessories</div>
		<div class="box-medium scarves">
			<h3>Scarves</h3>
		</div>
		<div class="box-medium sarongs">
			<h3>Sarongs</h3>
		</div>
		<div class="box-medium squares">
			<h3>Pocket Squares</h3>
		</div>
		
		
		<div class="title">Home Accessories</div>
		<div class="box-small cushions">
			<a href="<?php echo get_site_url(); ?>/cushions">
			<h3>Cushions</h3>
			</a>
		</div>
		<div class="box-small candles">
			<h3>Candles</h3>
		</div>
		<div class="box-small wallpaper">
			<h3>Wallpaper &amp; Fabrics</h3>
		</div>
		<div class="box-small furniture">
			<h3>Furniture</h3>
		</div>
		
	</div>
</div>

<div class="container press">
	<h3>As seen in the following publications</h3>
	<p>Vestibulum netus condimentum neque adipiscing et class fusce interdum nullam litora pulvinar a vestibulum quisque hac vestibulum.</p>
	
	<div class="press-logos">
		<img src="<?php echo get_template_directory_uri(); ?>/img/elle-logo.png" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/cosmopolitan-logo.png" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/fabric-logo.png" />
		<img src="<?php echo get_template_directory_uri(); ?>/img/vogue-logo.png" />
	</div>
	
</div>

<?php get_footer(); ?>