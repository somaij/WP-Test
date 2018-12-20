<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php 
//get all of the groups
$hero = get_field('hero'); 
$cta = get_field('cta');
$approach = get_field('approach');
$global = get_field('global');
$support = get_field('support');
if( $hero ): ?>
<div class="hero" style="background-image:url(<?php echo $hero['background']; ?>);">
    <div class="wrapper">
        <div class="content">

            <h2>
                <?php echo $hero['hero_top']; ?>
            </h2>
            <h1>
                <?php echo $hero['hero_middle']; ?>
            </h1>
            <h3>
                <?php echo $hero['hero_bottom']; ?>
            </h3>
            <a href="#" class="btn btn-primary">
                <?php echo $hero['button_text']; ?></a>
        </div>
    </div>
    <img class="overlay" src="<?php echo get_template_directory_uri(); ?>/img/Hero_Divider_cropped.png" />
</div>
<?php endif; ?>
<?php 
if( have_rows('services') ): 

	while( have_rows('services') ): the_row(); ?>
<div class="container services">
    <div class="row">
        <div class="col-12 col-md-5 d-flex flex-column justify-content-center">
            <h4>
                <?php the_sub_field('title_top'); ?>
            </h4>
            <h2>
                <?php the_sub_field('title'); ?>
            </h2>
            <?php the_sub_field('text'); ?>
            <strong><a href="#" class="d-flex arrow-link">
                    <?php echo the_sub_field('link_text'); ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
        <div class="col-12 col-md-7 col-xl-5 offset-xl-2">
            <div class="row">
                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <?php $service_1 = get_sub_field('service_1'); if( $service_1 ): ?>
                    <a href="#" class="service-item">
                        <div>
                            <img src="<?php echo $service_1['image']; ?>" />
                            <?php echo $service_1['caption']; ?>
                        </div>
                    </a>
                    <?php endif;?>
                    <?php $service_2 = get_sub_field('service_2'); if( $service_2 ): ?>
                    <a href="#" class="service-item">
                        <div>
                            <img src="<?php echo $service_2['image']; ?>" />
                            <?php echo $service_2['caption']; ?>
                        </div>
                    </a>
                    <?php endif;?>
                    <div class="service-link d-none d-sm-block" style="align-self: center;">
                        <strong><a href="#" class="d-flex arrow-link">View All Services <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
                    </div>
                </div>
                <div class="col-12 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                    <?php $service_3 = get_sub_field('service_1'); if( $service_3 ): ?>
                    <a href="#" class="service-item">
                        <div>
                            <img src="<?php echo $service_3['image']; ?>" />
                            <?php echo $service_3['caption']; ?>
                        </div>
                    </a>
                    <?php endif;?>
                    <?php $service_4 = get_sub_field('service_4'); if( $service_4 ): ?>
                    <a href="#" class="service-item">
                        <div>
                            <img src="<?php echo $service_4['image']; ?>" />
                            <?php echo $service_4['caption']; ?>
                        </div>
                    </a>
                    <?php endif;?>
                    <?php $service_5 = get_sub_field('service_5'); if( $service_5 ): ?>
                    <a href="#" class="service-item">
                        <div>
                            <img src="<?php echo $service_5['image']; ?>" />
                            <?php echo $service_5['caption']; ?>
                        </div>
                    </a>
                    <?php endif;?>
                </div>
                <div class="col d-block d-sm-none">
                    <strong><a href="#" class="d-flex arrow-link justify-content-center">View All Services <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif;?>
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
<?php if( $approach ): ?>
<div class="container services approach">
    <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo $approach['image']; ?>" />
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
            <h4>
                <?php echo $approach['top_title']; ?>
            </h4>
            <h2>
                <?php echo $approach['title']; ?>
            </h2>
            <?php echo $approach['text']; ?>
            <strong><a href="#" class="d-flex arrow-link">
                    <?php echo $approach['link_text']; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
    </div>
</div>
<?php endif;?>
<?php if( $global ): ?>
<div class="container services global">
    <div class="row">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
            <h4>
                <?php echo $global['top_title']; ?>
            </h4>
            <h2>
                <?php echo $global['title']; ?>
            </h2>
            <?php echo $global['text']; ?>
            <strong><a href="#" class="d-flex arrow-link">
                    <?php echo $global['link_text']; ?> <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" /></a></strong>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo $global['image']; ?>" />
        </div>
    </div>
</div>
<?php endif;?>
<hr class="section-divider">
<div class="container ">
    <div class="row">
        <div class="col">
            <h3 class="small-underline">
                <?php the_field('expectations_title');?>
            </h3>
        </div>
    </div>
    <div class="check-container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                Lorem ipsum dolor sit
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                consectetur adipiscing elit
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                voluptate velit esse
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                Excepteur sint occaecat
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                voluptate velit esse
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                Lorem ipsum dolor sit
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                consectetur adipiscing elit
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                Lorem ipsum dolor sit
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Check-mark.svg" />
                voluptate velit esse
            </div>
        </div>
    </div>
</div>
<?php if( $support ): ?>
<div class="container support-mail">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-12 col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Support icon.svg" />
            <h2><?php echo $support['title']; ?></h2>
            <?php echo $support['text']; ?>
            <a href="#"><?php echo $support['email']; ?></a>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if( $cta ): ?>
<section class="cta" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/CTA background.png');">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-column flex-lg-row align-items-center justify-content-around">
                <div>
                    <h3><?php echo $cta['title']; ?></h3>
                    <p><?php echo $cta['text']; ?></p>
                </div> <a href="#" class="btn"><?php echo $cta['button_text']; ?></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endwhile; ?>

<?php else: ?>

<h2>
    <?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?>
</h2>

<?php endif; ?>
<?php get_footer(); ?>