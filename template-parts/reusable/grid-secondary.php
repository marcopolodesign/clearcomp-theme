<div class="container grid-secondary mx-auto my-<?php the_sub_field('margin');?> my-">
    <h3 class="uppercase text-black font-semibold">Solutions by role</h3>

    <div class=" mt-10 flex column-mobile gap-20 justify-between">

    <?php if( have_rows('secondary_grid_content') ):  while( have_rows('secondary_grid_content') ) : the_row(); ?>

    <a href="<?php the_sub_field('link');?>" class="solution rounded-2xl group hover:-translate-y-4 smooth-t">
        <div class="grid-image mb-10 relative">
            <?php 
            $image = get_sub_field('grid_image');
            if( !empty( $image ) ): ?>
                <img class="margin-auto relative z-20 rounded-lg group-hover:-scale-[1.0.2]" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <div class="absolute w-full h-full rounded-lg bg-[var(--secondaryColor)] group-hover:bg-[var(--mainColor)] top-0 left-0  translate-x-3 translate-y-3 z-0 smooth-t"></div>
            <?php endif; ?>
        </div>
        <div>
            <div class="flex gap-2 mb-4 items-center">
                <?php 
                $icon = get_sub_field('grid_icon');
                if( !empty( $icon ) ): ?>
                <div class="w-10">
                 <img class="margin-auto" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                </div>
                <?php endif; ?>
                <div class="flex flex-col">
                    <h3 class="text-black text-4xl group-hover:text-[var(--mainColor)]"><?php the_sub_field('grid_title'); ?></h3>
                    <div class="lh-1-2 text-light group-hover:text-[var(--mainColor)] mobile">
                        <?php the_sub_field('grid_content'); ?>
                    </div>
                </div>
            </div>
            <div class="lh-1-2 text-light group-hover:text-[var(--mainColor)] desktop">
                <?php the_sub_field('grid_content'); ?>
            </div>
        </div>
        
    </a>
    
    <?php endwhile; endif;  ?>

    </div>
</div>