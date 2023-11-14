<div class="lg:container p-container mx-auto solutions-grid my-<?php the_sub_field('margin');?> relative z-10">
    <h3 class="uppercase text-black font-semibold">Solutions</h3>

    <div class=" mt-10 flex column-mobile gap-20 justify-between childs-animate">

   
    <?php if( have_rows('solutions_grid_content') ):  while( have_rows('solutions_grid_content') ) : the_row(); ?>

    <a href="<?php the_sub_field('link');?>" class="solution group rounded-2xl border-[1px] border-[var(--mainColor)] p-8 smooth-t cursor-pointer backdrop-blur-sm md:w-1/3 relative overflow-hidden block hover:!-translate-y-8 hover:shadow-md hover:border-[var(--secondaryColor)]">
        <div class="relative z-10 solution-inner group-hover:text-[var(--mainDarkColor)]">
            <div class="solution-icon flex ">
                <?php 
                $image = get_sub_field('solution_icon');
                if( !empty( $image ) ): ?>
                    <img class="margin-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <?php the_sub_field('solution_content'); ?>
            <div class=" h-[1px] bg-[var(--mainDarkColor)] scale-x-0 group-hover:scale-x-[1] origin-left smooth-t my-5 group-hover:my-5"></div>
            <p class="group-hover:text-[var(--mainDarkColor)] group-hover:rotate-[360deg] origin-center block w-max">+</p>
        </div>
        
        <div class="absolute-overlay bg-[var(--secondaryColor)] translate-y-full group-hover:translate-y-0 bottom-0 left-0 w-full h-full z-0 smooth-t pointer-events-none"></div>
    </a>
    
    <?php endwhile; endif;  ?>

    </div>
</div>
