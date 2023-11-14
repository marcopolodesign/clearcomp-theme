<?php get_header(); ?>

<div data-barba="container" class="page <?php echo strtolower(the_title());?>" data-barba-namespace="<?php echo strtolower(the_title());?>" data-header-color="dark">
   
    <?php get_template_part('template-parts/reusable');  
        if (get_field('main_faq') && !is_page('faq')) :
        get_template_part('template-parts/reusable/faqs-featured');
    endif; ?>

    <?php if (is_page(array('285', '300', '316' ))) : 
            get_template_part('template-parts/solutions-ending'); 

        elseif (is_page(array('172', '322', '328', '497', '494', '501'))):
             get_template_part('template-parts/role-ending'); 
    endif; ?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>


<!-- Title & CTa -->
<!-- Video -->
