<?php
/*
Template Name: Collections Template
*/
?>
<?php get_header(); ?>

<?php if( have_rows('collection_types') ): ?>
	 
	<?php 
		$i = 0;
		while( have_rows('collection_types') ): the_row(); 
		$i++;
		if($i %2 == 0) {$collection = 'even'; } else { $collection = 'odd'; }
	?>
		<div class="collection-type-<?php echo $collection; ?>" style="background: url('<?php echo the_sub_field('collection_image'); ?>') no-repeat center; background-size: cover;">    
			<div class="collection-content">
				<?php echo the_sub_field('collection_content'); ?>
			</div>
			
			<button onClick="parent.location='<?php echo the_sub_field('collection_link'); ?>'">View Collection</button>
		</div>
		        
	<?php endwhile; ?>
	 
<?php endif; ?>

<?php get_footer(); ?>
