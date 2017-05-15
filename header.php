<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|','true','right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>

<nav>
	<div class="container">
		<?php 
			$defaults = array(	
			'container' => false, 	
			'theme_location' => 'top-menu'
			);
							
			wp_nav_menu( $defaults );
		 ?>
	</div>
	
<div id="row" class="grey">	
	<div class="container">
	<?php 
		$defaults = array(	
		'container' => false, 	
		'theme_location' => 'primary-menu'
		);
						
		wp_nav_menu( $defaults );
	 ?>
	 </div>
</div>
</nav>