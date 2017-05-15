<?php
/*
Template Name: Sales Zoom Multiple Page Template
*/
?>
<?php get_header(); ?>

<div class="container">

	<div class="sales-area">
	
		<div class="sales-image-gallery">
		
			<?php 
			
			$images = get_field('product_images_multiple');
			
			if( $images ): 
			
			$startImage  = $images[0];
			
			?>
						
						<div id="main-gallery-area">
							<img src="<?php echo $startImage['sizes']['large']; ?>" class="zoooom" id="large-image" />
			            </div>
			            
			            <ul class="gallery-thumbnails" id="gallery-small">
				            <?php $i = 1; foreach( $images as $image ): ?>
								<li id="thumb-image-<?php echo $i; ?>"><img src="<?php echo $image['sizes']['thumbnail']; ?>" class="thumb" /></li>
				            <?php $i++; endforeach; ?>
			            </ul>
			            
			<?php endif; ?>
			
			<div class="sales-share">
				<span>Share this</span> <span><div class="fb-share-button" data-href="<?php echo the_permalink(); ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div></span> <span style="margin-top: 12px;"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-via="pamweinstock" data-lang="en" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></span>
			</div>
		</div>
		
		<div class="sales-information">
		
			<div class="sales-type">
			
				<div class="sales-item-name">
					<h1><?php echo the_title(); ?></h1>
					<h4><?php echo the_field('product_category'); ?></h4>
					
					<div class="sales-price">
						<?php if(get_field('multiple_sales_items')): ?>from<?php else: endif; ?><span><?php echo the_field('product_price'); ?></span> GBP
					</div>
					
				</div>
				
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
					
				<?php else : ?>
					<?php the_content(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
			
			<div class="sales-description">
				<?php echo the_field('product_description'); ?>
			</div>
			
			<div class="sales-category-description">
				<?php echo the_field('category_description'); ?>
			</div>
			
			<?php if(get_field('out_of_stock')): ?>
				<h3>Out of Stock Items</h3>
				<p>If you would like to be notified when an out stock product is available please click the button below.</p>
				<button class="small" onClick="parent.location='mailto:hello@pamweinstock.com?subject=<?php echo the_title(); ?> <?php echo the_field('product_category'); ?> Stock Enquiry'">Contact me when available</button>
			<?php else: endif; ?>
			
			<div class="sales-returns">
				<h3><a href="<?php echo get_site_url(); ?>/shipping-returns/">Shipping &amp; Returns</a></h3>
			</div>
			
			
		</div>
	
	</div>
	
	<div class="additional-sales-items">
		
		<div class="additional-sales-images">
		
			<?php if( have_rows('additional_sales_items') ): ?>
			
				<hr />
				
				<div class="additional-sales-intro">Find additional items in <?php echo the_title(); ?></div>
				 
				<?php while( have_rows('additional_sales_items') ): the_row(); ?>
					
					<div>
						<a href="<?php echo the_sub_field('additional_item_link'); ?>">
							<img src="<?php echo the_sub_field('additional_item_image'); ?>" />
							<h3><?php echo the_sub_field('additional_item_title'); ?></h3>
						</a>
					</div>
					        
				<?php endwhile; ?>
				 
			<?php endif; ?>
		
		</div>
	
	</div>

</div>

<?php get_footer('gallery'); ?>