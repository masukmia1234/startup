<?php 
/* 
 Template Name:Template Home
*/


        get_header();?>

                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">

                    <?php
                $args = array(
                    'post_type' => 'sliders',
                    'posts_per_page' => 3,
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);
                $i = 0;
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $i++;
                        $slider_subtitle = get_field('slider_subtitle');
                        $slider_btn_1_text = get_field('slider_btn_1_text');
                        $slider_btn_1_url = get_field('slider_btn_1_url');
                        $slider_btn_2_text = get_field('slider_btn_2_text');
                        $slider_btn_2_url = get_field('slider_btn_2_url');
                        ?>

                           <div class="carousel-item <?php if ($i == 1) {echo 'active';}?>">
                            <img class="w-100" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                           <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo $slider_subtitle; ?></h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn"><?php the_title();?>
                        </h1>
                            <a href="<?php echo $slider_btn_1_url; ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo $slider_btn_1_text; ?></a>
                            <a href="<?php echo $slider_btn_2_url; ?>" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight"><?php echo $slider_btn_2_text; ?></a>
                              </div>
                          </div>
                        </div>
                         <?php

                            }

                            wp_reset_postdata();
                        }
                        ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Happy Clients</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Projects Done</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Win Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- about us-->

    <?php get_template_part( 'template-parts/content','about');?>
    <!-- Pricing Plan features -->
    
    <?php get_template_part( 'template-parts/content','features');?>
       <!--services-->
    <?php get_template_part( 'template-parts/content','services');?>
      <!--Pricing Plan start-->
    <?php get_template_part( 'template-parts/content','price');?>
    <!-- Pricing Plan End-->
    <!--Testimonial Start-->
    <?php get_template_part( 'template-parts/content','testimonial');?>
    <!-- Testimonial End -->
    <?php get_template_part( 'template-parts/content','team');?>

    <!-- Blog Start -->
    <?php get_template_part( 'template-parts/content','blog');?>
    
    <!-- Quote Start -->
    <?php get_template_part( 'template-parts/content','quote');?>
    <!-- Quote End -->

    <?php get_footer();?>