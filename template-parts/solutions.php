<?php

$lang = pll_current_language();
if ($lang == 'es') : $langID = 478; else : $langID = 6; endif;

if( have_rows('reusable', $langID) ):
    while( have_rows('reusable', $langID) ): the_row();

        if( have_rows('solutions_grid_content', $langID) ):
            while( have_rows('solutions_grid_content', $langID) ): the_row(); ?>

                <a href="<?php the_sub_field('link');?>" class="solution group rounded-2xl border-[1px] border-[var(--mainColor)] p-8 smooth-t cursor-pointer backdrop-blur-sm w-1/3 relative overflow-hidden block hover:-translate-y-8 hover:shadow-md hover:border-[var(--secondaryColor)]">
                    <div class="relative z-10 solution-inner group-hover:text-[var(--mainDarkColor)]">
                        <div class="solution-icon flex ">
                            <?php 
                            $image = get_sub_field('solution_icon', $langID);
                            if( !empty( $image ) ): ?>
                                <img class="margin-auto" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <?php the_sub_field('solution_content', $langID); ?>
                        <div class=" h-[1px] bg-[var(--mainDarkColor)] scale-x-0 group-hover:scale-x-[1] origin-left smooth-t my-5 group-hover:my-5"></div>
                        <p class="group-hover:text-[var(--mainDarkColor)] group-hover:rotate-[360deg] origin-center block w-max">+</p>
                    </div>
                    
                    <div class="absolute-overlay bg-[var(--secondaryColor)] translate-y-full group-hover:translate-y-0 bottom-0 left-0 w-full h-full z-0 smooth-t pointer-events-none"></div>
                </a>
                
            <?php endwhile;
        endif;

    endwhile;
endif;
?>
