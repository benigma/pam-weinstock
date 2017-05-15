<?php
/*
Template Name: Wallpaper Page Template
*/
?>
<?php get_header(); ?>

<div class="container">

	<div class="sales-area">
	
		<div class="sales-image">
		
			<div id="owl-demo" class="owl-carousel">
					
				<?php if( have_rows('wallpaper_slider') ): ?>
					 
					<?php while( have_rows('wallpaper_slider') ): the_row(); ?>
						
						<img src="<?php echo the_sub_field('wallpaper_image'); ?>" />
			  		        
					<?php endwhile; ?>
					 
				<?php endif; ?>
			
			</div>
			
			<div class="sales-share">
				<span>Share this</span> <span><div class="fb-share-button" data-href="<?php echo the_permalink(); ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div></span> <span style="margin-top: 12px;"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-via="pamweinstock" data-lang="en" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></span>
			</div>
		</div>
		
		<div class="sales-information">
		
			<div class="sales-type">
				<div class="sales-item-name">
					<h1><?php echo the_title(); ?></h1>
					<h4><?php echo the_field('product_category'); ?></h4>
				</div>
					
			</div>
			
			<button onClick="parent.location='mailto:contact@pamweinstock.com?subject=<?php echo the_title(); ?> Wallpaper Enquiry'">Make an Enquiry</button>
			
			<?php echo the_field('product_description'); ?>
			
			<div class="enquiry-prices">
				<?php echo the_field('product_prices'); ?>
			</div>
			
			<?php echo the_field('sample_instructions'); ?>
			
		</div>
	
	</div>
	
	<div class="additional-sales-items">
	
		<hr />
		
		Additional examples of <?php echo the_title(); ?>
		
		<div class="additional-sales-images">
		
			<?php if( have_rows('additional_enquiry_items') ): ?>
				 
				<?php while( have_rows('additional_enquiry_items') ): the_row(); ?>
					
					<div>
						<a href="<?php echo the_sub_field('additional_item_link'); ?>">
							<img src="<?php echo the_sub_field('additional_item_image'); ?>" />
							<h3><?php echo the_sub_field('additional_item_title'); ?></h3>
						</a>
					</div>
					        
				<?php endwhile; ?>
				 
			<?php endif; ?>
		
		</div>
		
		<hr />
	
	</div>

</div>

<?php get_footer(); ?>