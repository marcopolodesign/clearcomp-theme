<?php get_header(); ?>

<div data-barba="container" class="about" data-barba-namespace="about" data-header-color="dark">
   
    <div class="flex jic pb-3 container border-b-[1px] border-b-black mt-10 sm:mt-[160px] pt-5 sm:pt-20">
        <h1 class="text-black uppercase font-semibold"><?php pll_e('About Title'); ?></h1>
        <!-- <p>Tip: Hover over the iceberg to learn more</p> -->
    </div>

    <div class="relative container my-14">
        <h2 class="gradient-text text-7xl w-3/4 font-normal"><?php pll_e('About Sub Title'); ?></h2>
        <div class="absolute top-0 right-0">
            <?php get_template_part('template-parts/assets/texture-rounded'); ?>
        </div>
    </div>


    <?php  get_template_part('template-parts/reusable'); ?>


   
    <?php if (get_field('main_faq') && !is_page('faq')) :
        get_template_part('template-parts/reusable/faqs-featured');
    endif;?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>


<!-- Title & CTa -->
<!-- Video -->
