<?php 
/* 
 Template Name:Template Price
*/


get_header();?>

<?php get_template_part( 'template-parts/content','breadcumb');?>

        <!--Pricing Plan start-->
        <?php get_template_part( 'template-parts/content','price');?>
    <!-- Pricing Plan End-->


   <!-- Quote Start -->
   <?php get_template_part( 'template-parts/content','quote');?>
    <!-- Quote End -->

<?php get_footer(); ?>