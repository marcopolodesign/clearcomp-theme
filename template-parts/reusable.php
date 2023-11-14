<div class="reusable-content"><!-- Start Reusable Content -->


<?php
if( have_rows('reusable') ): while ( have_rows('reusable') ) : the_row();
  
    if( get_row_layout() == 'landing_starter' ):
     get_template_part('template-parts/reusable/landing-starter'); 

     elseif (get_row_layout() == 'secondary_starter'): 
        get_template_part('template-parts/reusable/secondary-starter');

    elseif (get_row_layout() == 'solutions_grid') :
        get_template_part('template-parts/reusable/solutions-grid');

    elseif(get_row_layout() == 'iceberg') :
        get_template_part('template-parts/reusable/iceberg');

    elseif (get_row_layout() == 'text_images') :
        get_template_part('template-parts/reusable/text-images');

    elseif (get_row_layout() == 'steps') : 
        get_template_part('template-parts/reusable/steps');

    elseif (get_row_layout() == 'single_line_cta') :
        get_template_part('template-parts/reusable/single-line-cta');

    elseif (get_row_layout() == 'secondary_grid') :
        get_template_part('template-parts/reusable/grid-secondary');

    elseif (get_row_layout() == 'integrations') :
        get_template_part('template-parts/reusable/integrations');

        elseif (get_row_layout() == 'platform_carrousel') :
            get_template_part('template-parts/reusable/platform-carrousel');

    elseif (get_row_layout() == 'about_cc') :
        get_template_part('template-parts/reusable/about-cc');

    elseif (get_row_layout() == 'closure') : 
        get_template_part('template-parts/reusable/closure');

    elseif (get_row_layout() == 'text_fixed_and_grid'):
        get_template_part('template-parts/reusable/text-grid');
   
        elseif (get_row_layout() == 'about_closure'):
        get_template_part('template-parts/about-numbers');
    
?>

<?php endif; endwhile; endif; ?>

</div> <!-- End Reusable Content -->