<?php get_header(); ?>

<div data-barba="container" class="about mt-0" data-barba-namespace="about" data-header-color="is-home">
   
    <div class="bg-[var(--mainDarkColor)] rounded-b-lg">
        <div class="flex flex-col jic sm:pt-[180px] pb-32 childs-animate">
            <h1 class="text-white text-center text-xl mb-3"><?php pll_e('About Title'); ?></h1>
            <h2 class="secondary-gradient-text text-center text-6xl w-3/4 font-normal"><?php pll_e('About Sub Title'); ?></h2>
            <a class="button btn btn-primary starter bg-[var(--terciaryColor)] self-start text-[var(--mainDarkColor)] mt-8 inline-block m-auto" href="#contact">Get started</a>
        </div>
    </div>

    <div class="-translate-y-12 relative z-10 container childs-animate">
        <img src="<?php echo get_field('header_image', 335)['url']; ?>" alt="header-image" class="w-full" />
    </div>
   

    <?php  get_template_part('template-parts/reusable'); ?>


   
    <?php if (get_field('main_faq') && !is_page('faq')) :
        get_template_part('template-parts/reusable/faqs-featured');
    endif;?>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>


<!-- Title & CTa -->
<!-- Video -->
