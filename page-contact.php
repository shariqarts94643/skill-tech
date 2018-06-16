<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

    <!-- Start main-content -->
    <div class="main-content">
        
        <?php

        if (have_posts()) :
           while (have_posts()) :
              the_post(); ?>
                
                <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="<?php the_post_thumbnail_url(); ?>">
                    <div class="container pt-120 pb-60">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="text-theme-colored2 font-36"><?php the_title(); ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        
        <?php   endwhile;
        endif;

        ?>

        

        <!-- Section: Have Any Question -->
        <section class="divider">
            <div class="container pt-60 pb-60">
                <div class="section-title mb-60">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="esc-heading small-border text-center">
                                <h3>Have any Questions?</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
                                <h4>Call Us</h4>
                                <h6 class="text-gray">Phone: <?php the_field('call_us'); ?></h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
                                <h4>Head Office</h4>
                                <h6 class="text-gray"><?php the_field('address'); ?></h6>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="contact-info text-center">
                                <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
                                <h4>Email</h4>
                                <h6 class="text-gray"><?php the_field('email'); ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider: Contact -->
        <section class="divider bg-lighter">
            <div class="container">
                <div class="row pt-30">
                    <div class="col-md-7">
                        <h3 class="line-bottom mt-0 mb-30">Interested in discussing?</h3>

                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                            <?php the_field('contact_form'); ?>
                        </form>

                    </div>
                    
                    <div class="col-md-5">
                        <!-- Google Map HTML Codes -->
                        <div id="map-canvas-multipointer" data-mapstyle="default" data-height="500" data-zoom="12" data-marker="<?php echo get_template_directory_uri() . '/assets/images/map-marker.png' ?>"></div>
                        
                        <!-- Google Map Javascript Codes -->
                        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                        <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/google-map-init-multilocation.js' ?>"></script>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php get_footer(); ?>