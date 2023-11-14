<?php get_header(); ?>

<div data-barba="container" class="home" data-barba-namespace="home" data-header-color="dark">
   
  
    <?php get_template_part('template-parts/reusable'); 
    
    if (get_field('main_faq') && !is_page('faq')) :
        get_template_part('template-parts/reusable/faqs-featured');
    endif;?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>
