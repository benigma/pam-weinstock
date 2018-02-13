<?php get_header(); ?>

<div id="owl-demo" class="owl-carousel">
		
	<?php if( have_rows('page_sliders') ): ?>
		 
		<?php while( have_rows('page_sliders') ): the_row(); ?>
			<div style="background: url('<?php echo the_sub_field('slider_image'); ?>') no-repeat center; background-size: cover; min-height: 600px; max-height: 100vh;">    
		    <div class="slider">
		    	<?php if( get_sub_field('slider_content') ): ?>
				<div class="slide-content">
					<?php echo the_sub_field('slider_content'); ?>
				</div>
				<?php endif; ?>
			</div>
			</div>
  		        
		<?php endwhile; ?>
		 
	<?php endif; ?>

</div>

<div class="container">
	<div id="product-area">
	
		<div class="title">Fashion Accessories</div>
		<div class="box-medium scarves">
			<a href="<?php echo get_site_url(); ?>/fashion/scarves/">
			<h3>Scarves</h3>
			</a>
		</div>
		<div class="box-medium sarongs">
			<a href="<?php echo get_site_url(); ?>/fashion/sarongs/">
			<h3>Sarongs</h3>
			</a>
		</div>
		<div class="box-medium squares">
			<a href="<?php echo get_site_url(); ?>/fashion/pocket-squares/">
			<h3>Pocket Squares</h3>
			</a>
		</div>
		
		
		<div class="title">Home Accessories</div>
		<div class="box-small cushions">
			<a href="<?php echo get_site_url(); ?>/home-accessories/cushions/">
			<h3>Cushions</h3>
			</a>
		</div>
		<div class="box-small candles">
			<a href="<?php echo get_site_url(); ?>/home-accessories/candles/">
			<h3>Candles</h3>
			</a>
		</div>
		<div class="box-small wallpaper">
			<a href="<?php echo get_site_url(); ?>/made-to-order/">
			<h3>Wallpaper &amp; Fabrics</h3>
			</a>
		</div>
		<div class="box-small furniture">
			<a href="<?php echo get_site_url(); ?>/bespoke/">
			<h3>Furniture</h3>
			</a>
		</div>
		
	</div>
</div>

<div class="container press">

	<h3>As seen in the following publications</h3>
	
	<div class="press-logos">
		<a href="<?php echo get_site_url(); ?>/press/"><img src="<?php echo get_template_directory_uri(); ?>/img/Elle-logo-web.jpg" border="0" /></a>
		<a href="<?php echo get_site_url(); ?>/press/"><img src="<?php echo get_template_directory_uri(); ?>/img/cover-logo.jpg" border="0" /></a>
		<a href="<?php echo get_site_url(); ?>/press/"><img src="<?php echo get_template_directory_uri(); ?>/img/Daily-Telegraph-Logo.jpg" border="0" /></a>
		<a href="<?php echo get_site_url(); ?>/press/"><img src="<?php echo get_template_directory_uri(); ?>/img/Architectural-Digest-Logo.jpg" border="0" /></a>
	</div>
	
</div>

<?php get_footer(); ?>