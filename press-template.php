<?php 
/* 
Template Name: Press Template 
*/ 
?>
<?php get_header(); ?>

<div class="container">

<div class="press-page">
	
	<div class="press-content">
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