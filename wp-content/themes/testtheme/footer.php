			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->

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
            dots: true
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
