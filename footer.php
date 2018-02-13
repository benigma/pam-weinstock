<footer>

<div id="newsletter-signup">

	<div class="signup-text">
		<p><img src="<?php echo get_template_directory_uri(); ?>/img/email-icon.png" /> subscribe to our mailing list to receive the latest news on products, updates, offers and more</p>
	</div>
		
	<div class="signup-form">
		<form action="//pamweinstock.us3.list-manage.com/subscribe/post?u=349125e07e5811e75951031b7&amp;id=7bc5c577a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<input type="email" name="EMAIL" id="mce-EMAIL" placeholder="Email Address" /> <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" />
		<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		 <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_349125e07e5811e75951031b7_7bc5c577a6" tabindex="-1" value=""></div>
		 </form>
		 <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='dropdown';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
		 <!--End mc_embed_signup-->
	 </div>
</div>

<div class="copyright">
	
	<div class="footer-logo">
		<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2016/07/pw-london-logo.png" />
	</div>
			
	<div class="social-icons">
		<a href="http://www.facebook.com/PamWeinstockLondon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" border="0" /></a>
		<a href="https://www.instagram.com/pam_weinstock_london/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/ig.png" border="0" /></a>
		<a href="https://twitter.com/pamweinstock" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" border="0" /></a>
			
		<p>&copy; <?php echo date('Y'); ?> Pam Weinstock | <a href="<?php echo get_site_url(); ?>/privacy-policy/">Privacy Policy</a> | <a href="<?php echo get_site_url(); ?>/shipping-returns/">Shipping &amp; Returns</a></p>
			
	</div>
	
</div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" type="text/css" rel="stylesheet">

<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js" type="text/javascript"></script>

<script>
	var owl;
	
	$(document).ready(function () {
	
	function customPager() {
	
	    $.each(this.owl.userItems, function (i) {
	
	        var titleData = jQuery(this).find('img').attr('title');
	        var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');
	
	    $(paginationLinks[i]).append(titleData);
	
	    });
	
	}
		$('.owl-carousel').owlCarousel({stagePadding: 0,
		    margin:0,
		    nav:false,
		    autoplay: true,
		    onResize: true,
		    autoHeight:false,
		    center: true,
		    singleItem: true,
		    items:1,
		    responsiveClass:true,
		    loop:true,
			responsive:{
			    0:{
			        items:1,
			        nav:false,
			        singleItem: true,
			  		stagePadding: 0
			    },
			    768:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        loop:true,
  			        stagePadding: 0
			    },
			    1280:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        loop:true,
			          stagePadding: 0
			    },
			    375:{
			        items:1,
			        nav:false,
			        singleItem: true,
			        stagePadding: 0
			    }
			}
		})
		
		owl = $('.owl-carousel').owlCarousel();
		$(".prev").click(function () {
		owl.trigger('prev.owl.carousel');
		});
		
		$(".next").click(function () {
		owl.trigger('next.owl.carousel');
		});
		
	});
		
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php wp_footer(); ?>

<script src="https://use.typekit.net/xqa6ath.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83021394-1', 'auto');
  ga('send', 'pageview');

</script>
	
</body>
</html>