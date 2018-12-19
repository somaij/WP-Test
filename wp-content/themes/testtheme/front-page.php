<?php get_header(); ?>

<div class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/Header_Image.png);">
    <div class="wrapper">
        <div class="content">
            <h1><small>Knowledge. Innovation. Growth</small><br>Experience creates<br>Opportunity</h1>
            <h3>We've got your next move covered</h3>
            <a href="/contact" class="btn btn-primary">Book an Appointment</a>
        </div>
    </div>
    <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/img/Hero_Divider_cropped.png" />
</div>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="container services">
    <div class="row">
        <div class="col-5 d-flex flex-column justify-content-center">
            <h4>We take you that one step further</h4>
            <h2>A strong team with a global presence</h2>
            <p>Our focus is to deliver true results, focusing on strategic decisions and practical actions tailored to
                our clients' unique reality. We engage all levels of an organization from day one, building momentum
                and capabilities to sustain the success. We have over 50+ years of comprehensive professional
                experience in a wide variety of industries.</p>
            <strong><a href="#" class="d-flex arrow-link">We'll take you far. Learn More <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
        <div class="col-5 offset-md-2">
            <div class="row ">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <div class="service-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1316253-200.png" />
                        Investment Advisory</div>
                    <div class="service-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1316232-200.png" />Technology &
                        Digital</div>
                    <div class="service-link" style="align-self: center;">
                        <strong><a href="#" class="d-flex arrow-link">View All Services <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
                    </div>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <div class="service-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1316272-200-reg.png" />Finance &
                        Strategy</div>
                    <div class="service-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1316236-200.png" />Marketing & Sales</div>
                    <div class="service-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1316288-200.png" />Product
                        Development</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonials" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/Testimonials_Background.png);">
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>Testimonials</h4>
                <h2>Proven Results</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="testimonial-items">
                    <div>
                        <div class="item">
                            <div class="d-flex justify-content-start align-items-center">
                                <div><img class="dp" src="<?php echo get_template_directory_uri(); ?>/img/Profiel.png" /></div>
                                <div><strong>Sarah H.</strong><br><small>Faux Company Inc.</small></div>
                            </div>
                            <p>Without business consulting, we would have gone bankrupt by now. Outstanding service and
                                support throughout the process. Thanks KIG consulting. I am completely blown away.</p>
                            <img class="stars" src="<?php echo get_template_directory_uri(); ?>/img/5 stars.png" />
                        </div>
                    </div>
                    <div>
                    <div class="item">
                            <div class="d-flex justify-content-start align-items-center">
                                <div><img class="dp" src="<?php echo get_template_directory_uri(); ?>/img/Profiel.png" /></div>
                                <div><strong>John B.</strong><br><small>Faux Company Inc.</small></div>
                            </div>
                            <p>Without business consulting, we would have gone bankrupt by now. Outstanding service and
                                support throughout the process. Thanks KIG consulting. I am completely blown away.</p>
                            <img class="stars" src="<?php echo get_template_directory_uri(); ?>/img/5 stars.png" />
                        </div>
                    </div>
                    <div>
                    <div class="item">
                            <div class="d-flex justify-content-start align-items-center">
                                <div><img class="dp" src="<?php echo get_template_directory_uri(); ?>/img/Profiel.png" /></div>
                                <div><strong>Jason R.</strong><br><small>Faux Company Inc.</small></div>
                            </div>
                            <p>Without business consulting, we would have gone bankrupt by now. Outstanding service and
                                support throughout the process. Thanks KIG consulting. I am completely blown away.</p>
                            <img class="stars" src="<?php echo get_template_directory_uri(); ?>/img/5 stars.png" />
                        </div>
                    </div>
                    <div>
                        <div class="item">your content</div>
                    </div>
                    <div>
                        <div class="item">your content</div>
                    </div>
                    <div>
                        <div class="item">your content</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container services approach">
    <div class="row">
        <div class="col">
            <img src="<?php echo get_template_directory_uri(); ?>/img/OurApproach.png"/>
        </div>
        <div class="col d-flex flex-column justify-content-center">
            <h4>Our Approach</h4>
            <h2>We understand how to set you up for success</h2>
            <p>Our service include a comprehensive consult to help identify gaps and opportunities, a detailed report that includes a project plan with timelines and milestones, a cost analysis, and a schedule. We also offer a suite of quality products with extended support and leadership to achieve success quickly and smoothly.</p>
            <strong><a href="#" class="d-flex arrow-link">The time is now. Let's Start <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
    </div>
</div>
<div class="container services global">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center">
            <h4>Global Presence</h4>
            <h2>Prepared to help you conquer the world</h2>
            <p>KIG Consulting is a Global Management Consulting firm, serving and specializing in various industries and businesses. Our team of experts help our clients evolve and make drastic improvements on their performance through our assessments and development plans. Our consultants deliver an unmatched combination of breadth and depth of expertise.</p>
            <strong><a href="#" class="d-flex arrow-link">The time is now. Let's Start <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
        <div class="col d-flex flex-column justify-content-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/World.png"/>
        </div>
    </div>
    <hr>
</div>
<div class="container ">
    <div class="row">
        <div class="col">
            <h3 class="small-underline">In a glance, you can expect...</h3>
</div>
    </div>
    <div class="check-container">
    <div class="row">
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
         Lorem ipsum dolor sit
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        consectetur adipiscing elit
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        voluptate velit esse
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        Excepteur sint occaecat
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        voluptate velit esse
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
         Lorem ipsum dolor sit
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        consectetur adipiscing elit
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
         Lorem ipsum dolor sit
        </div>
        <div class="col-4">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg"/>
        voluptate velit esse
        </div>
    </div>
</div>
</div>
<div class="container support-mail">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-6">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Support icon.svg"/>
            <h2>Looking to get started?</h2>
            <p>Contact our Customer Support that is always ready to help you with any possible questions, problems or information.</p>
            <a href="#">support@kigconsulting.com</a>
</div>
</div>
</div>
<section class="cta" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/CTA background.png');">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-direction-row align-items-center justify-content-around"><div><h3>Interested in our services? Book an appointment.</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p></div> <a href="#" class="btn">Book your appointment now!</a></div>
            </div>
        </div>
    </section>
<?php endwhile; ?>

<?php else: ?>

<h2>
    <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
</h2>

<?php endif; ?>
<?php get_footer(); ?>