<?php
/*
Template Name: Sales Page Template
*/
?>
<?php get_header(); ?>

<div class="container">

	<div class="sales-area">
	
		<div class="sales-image">
		
			<img src="<?php echo the_field('product_image'); ?>" />
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
				
				<div class="sales-price">
					from <span><?php echo the_field('product_price'); ?></span> GBP
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
			
			<div class="sales-returns">
				<?php echo the_field('returns_information'); ?>
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

<?php get_footer(); ?>