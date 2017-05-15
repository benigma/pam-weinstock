<?php get_header(); ?>

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