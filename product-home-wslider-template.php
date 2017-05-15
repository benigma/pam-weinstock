<? /*
Template Name: Product Home with Slider
*/
?>

<?php get_header(); ?>

<div id="owl-demo" class="owl-carousel">
		
	<?php if( have_rows('page_sliders') ): ?>
		 
		<?php while( have_rows('page_sliders') ): the_row(); ?>
			<div style="background: url('<?php echo the_sub_field('slider_image'); ?>') no-repeat center; background-size: cover; min-height: 600px; max-height: 100vh;">    
		    <div class="slider">
				<div class="slide-content">
					<?php echo the_sub_field('slider_content'); ?>
				</div>
				
				<button onClick="parent.location='<?php echo the_sub_field('slider_link'); ?>'">Find out more</button>
			</div>
			</div>
  		        
		<?php endwhile; ?>
		 
	<?php endif; ?>

</div>

<div class="container">
	<div id="product-area">

		<?php
		$args = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );
		
		$parent = new WP_Query( $args );
		
		if ( $parent->have_posts() ) : ?>
		
		    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
		    	
			    <div class="box-medium">
			    <a href="<?php echo the_permalink(); ?>">
			    	<?php echo the_post_thumbnail( 'full' ); ?>
			    	<h4><?php echo the_title(); ?></h4>
			    </a>
			    </div>
			    		
		    <?php endwhile; ?>
		
		<?php endif; wp_reset_query(); ?>
	
	</div>
</div>

<?php get_footer(); ?>