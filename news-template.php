<?php
/*
Template Name: News Page Template
*/
?>
<?php get_header(); ?>
	
<div class="container">

<div class="news-content">
	<div class="news-image">
		<?php echo the_post_thumbnail( 'full' ); ?>
	</div>
	
	<div class="news-information">
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