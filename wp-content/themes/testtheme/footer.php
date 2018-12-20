			<!-- footer -->
			<footer>
			<div class="container">
            <div class="row">
			<div class="col-md-3 contact">
					<h2 class="footer-logo">KIG Consulting</h2>
					<a href="#">@: hello@kigconsulting.com</a><br>
					<a href="tel:8189155117">p: (818) 915 5117</a><br>
					<a href="#">a: Avenue of the Stars, 2nd floor, Los Angeles, CA 90067</a>

                </div>
                <div class="col-md-3">
                    <h4>Company</h4>
                    <?php
					wp_nav_menu( array(
						'theme_location' => 'footer1-menu',
						'menu_id'        => 'footer-menu-1',
					) );
					?>
                </div>
                <div class="col-md-3">
                    <h4>Others</h4>
                    <?php
					wp_nav_menu( array(
						'theme_location' => 'footer2-menu',
						'menu_id'        => 'footer-menu-2',
					) );
					?>
                </div>
                <div class="col-md-3 sub">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter and get all the cool news.</p>
				<input type="email" name="emailaddress" placeholder="Enter Email">
                </div>

            </div>
			<div class="copyright d-flex flex-column flex-md-row justify-content-between">
					<div>All rights reserved <?php echo date('Y');?> | Concept designed by Madesmpl</div>
					<div><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png"/></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png"/></a><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png"/></a></div>
		</div>
        </div>
		
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
			    jQuery(document).ready(function ($) {
        $('.testimonial-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: true,
			autoplay: true,
			autoplaySpeed:3000,
			responsive: [
    {
      breakpoint: 1192,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 786,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
        });
		$('.menu-toggle').click(function() {

$('.mobile-nav').fadeToggle("fast");
$(this).toggleClass('open');
});

$(document).click(function(e) {
var target = e.target;
if (!$(target).is('.menu-toggle') && !$(target).parents().is('.menu-toggle')) {
	$('.mobile-nav').fadeOut("fast");
	$('.menu-toggle').removeClass('open');
}
});
$("li.menu-item").hover(function() { // mouse enter
$(this).find(" > .sub-menu").show(); // display immediate child

}, function() { // mouse leave
	$(this).find(".sub-menu").hide(); // hide if not current page
});
    });
		            
		</script>

	</body>
</html>
