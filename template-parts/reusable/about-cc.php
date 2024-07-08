<div class="container  my-<?php the_sub_field('margin');?>">
    <div class="flex column-mobile jic pb-3 border-b border-b-black">
        <h4 class="text-black uppercase font-semibold"><?php the_sub_field('title');?></h4>
        <p class="desktop"><?php pll_e('Hover'); ?></p>
    </div>

    <div class="flex column-mobile justify-between items-start mt-10">
        <div class="w-1/2 about-cc-text ">
            <?php the_sub_field('base');?>
            <a href="/about" class="btn btn-primary bg-main-color text-white block sm:text-left text-center sm:w-max">Discover more</a>
        </div>

        <div class="w-2/5 relative">
        <?php if( have_rows('content') ): while ( have_rows('content') ): the_row(); ?>
        
            <div class="absolute top-0 right-0 bg-white shadow-lg rounded-md p-5 opacity-0 translate-y-10 about-content o-0 smooth-t">
                <p class="text-4xl font-medium text-gray-800"><?php the_sub_field('description');?></p>
            </div>
        
        <?php endwhile; endif;?>
        </div>
    </div>

</div>