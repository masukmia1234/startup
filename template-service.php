<?php 
/* 
 Template Name:Template Service
*/


get_header();?>

<?php get_template_part( 'template-parts/content','breadcumb');?>
      <!--services-->
      <?php get_template_part( 'template-parts/content','services');?>
      <!--Pricing Plan start-->


       <!-- Testimonial Start -->
       <?php get_template_part( 'template-parts/content','testimonial');?>
    <!-- Testimonial End -->


   <?php include 'footer.php'; ?>