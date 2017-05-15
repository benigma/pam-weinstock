<?php
/*
Template Name: Contact Page Template
*/
?>
<?php get_header(); ?>
	
<div class="container">

<div class="contact-content">
	<div class="contact-image">
		<?php echo the_post_thumbnail( 'full' ); ?>
	</div>
	
	<div class="contact-information">
	
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
				<?php the_excerpt(); ?>
			<?php else : ?>
				<?php the_content(); ?>
			<?php endif; ?>
		<?php endwhile; ?>
	
	</div>

</div>	
</div>
	
<?php get_footer(); ?>