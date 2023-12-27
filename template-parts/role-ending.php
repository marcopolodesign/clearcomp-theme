<div class="container grid-secondary mx-auto my-20">
    <h2 class="text-center text-4xl mb-10 text-gray-800"><?php pll_e('Discover Solutions'); ?></h2>
    <div class=" mt-10 flex column-mobile gap-20 justify-between">

    <?php
        $lang = pll_current_language();
        if ($lang = 'es') : $langID = 478; else : $langID = 6; endif;

        if( have_rows('reusable', $langID) ):
            while( have_rows('reusable', $langID) ): the_row();
        if( have_rows('secondary_grid_content', $langID) ):  while( have_rows('secondary_grid_content', $langID) ) : the_row(); ?>

    <a href="<?php the_sub_field('link');?>" class="solution rounded-2xl group hover:-translate-y-4 smooth-t">
        <div class="grid-image mb-10 relative">
            <?php 
            $image = get_sub_field('grid_image', $langID);
            if( !empty( $image ) ): ?>
                <img class="margin-auto relative z-20 rounded-lg group-hover:-scale-[1.0.2]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="absolute w-full h-full rounded-lg bg-[var(--secondaryColor)] group-hover:bg-[var(--mainColor)] top-0 left-0  translate-x-3 translate-y-3 z-0 smooth-t"></div>
            <?php endif; ?>
        </div>
        <div>
            <div class="flex gap-2 mb-4">
                <?php 
                $icon = get_sub_field('grid_icon', $langID);
                if( !empty( $icon ) ): ?>
                <div class=" w-10">
                 <img class="margin-auto" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                </div>
                <?php endif; ?>
                <h3 class="text-black text-4xl group-hover:text-[var(--mainColor)]"><?php the_sub_field('grid_title', $langID); ?></h3>
            </div>
            <div class="lh-1-2 text-light group-hover:text-[var(--mainColor)]">
                <?php the_sub_field('grid_content', $langID); ?>
            </div>
        </div>
        
    </a>
    
    <?php endwhile;
        endif;

    endwhile;
endif;
?>

    </div>
</div>