<?php
/**
 * Template Name: Certificate Page
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
       
        
        
        <section >
            <div class="container pt-50 pb-10">
                <div class="section-content">
                        <?php get_search_form(); ?>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container pt-10 pb-60">
                <table class="table table-bordered">
           <thead>
               <tr><td>Name</td><td>Roll No.</td><td>Certificate one</td><td>Certificate two</td></tr>
           </thead>
            <?php query_posts(array('post_type' => 'certificates','orderby' => 'date')); if(have_posts()) : while(have_posts()) : the_post();?>
    
        <tr>
            <td><b><?php the_title(); ?></b></td>
            <td valign="center"><?php the_field('roll_number'); ?></td>
            <td>
                <a href="" data-toggle="modal" data-target="#certi1">
                    <img class="certificate" src="<?php the_field('certificate_1'); ?>" alt="">
                </a>
            </td>
            <td>
                <a href="" data-toggle="modal" data-target="#certi2"><img class="certificate" src="<?php the_field('certificate_2'); ?>" alt="">
                </a>
            </td>
        </tr>
        
        
        
    

    <?php
    endwhile; 
                    wp_reset_postdata();
    endif; ?>
       
       </table>
            </div>
        </section>








       
    </div>

    <?php get_footer(); ?>