<?php get_header(); ?>

<div data-barba="container" class="home mt-0" data-barba-namespace="home" data-header-color="is-home">
   
  <!-- Testing Cpanel! -->
    <?php get_template_part('template-parts/reusable'); 
    
    if (get_field('main_faq') && !is_page('faq')) :
        get_template_part('template-parts/reusable/faqs-featured');
    endif;?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>
