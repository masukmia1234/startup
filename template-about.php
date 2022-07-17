<?php 
/* 
 Template Name:Template About
*/


get_header();?>

<?php get_template_part( 'template-parts/content','breadcumb');?>
    <!-- About Start -->
    
    <?php get_template_part( 'template-parts/content','about');?>
    <!-- Pricing Plan features -->
    <!-- About End -->


    <!-- Team Start -->
    <?php get_template_part( 'template-parts/content','team');?>
    <!-- Team End -->


   
    
<?php get_footer(); ?>