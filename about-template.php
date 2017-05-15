<?php 
/* 
Template Name: About Template 
*/ 
?>
<?php get_header(); ?>

<div class="container">

<div class="about-page">

	<div class="about-portrait">
		<img src="<?php the_field('about_image'); ?>" />
	</div>
	
	<div class="about-content">
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