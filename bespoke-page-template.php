<?php
/*
Template Name: Bespoke Page Template
*/
?>
<?php get_header(); ?>

<div class="container">

	<div class="bespoke-area">
	
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
		
				<h2><?php echo the_field('bespoke_tile'); ?></h2>
				<?php echo the_field('bespoke_content'); ?>
				
				<button onClick="parent.location='mailto:hello@pamweinstock.com?subject=<?php echo the_field('bespoke_enquiry_subject'); ?>'">Enquire</button>
				
				<?php 
				
				$images = get_field('bespoke_images');
				
				if( $images ): ?>
				    <div class="bespoke-gallery">
				        <?php foreach( $images as $image ): ?>
							<img src="<?php echo $image['sizes']['post-thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				        <?php endforeach; ?>
				    </div>
				<?php endif; ?>
			
			<?php endwhile; ?>
			
		<?php endif; wp_reset_query(); ?>
	
	</div>

</div>

<?php get_footer(); ?>