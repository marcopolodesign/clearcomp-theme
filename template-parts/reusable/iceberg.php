<div class="container my-<?php the_sub_field('margin');?> relative group iceberg-container">
    <div class="flex jic pb-3">
        <h4 class="text-black uppercase font-semibold"><?php the_sub_field('section_title');?></h4>
        <p><?php pll_e('Hover'); ?></p>
    </div>

    <div class="relative mt">
        <?php if (get_sub_field('title')): ?>
            <h1 class="text-4xl text-[var(--mainColor)] mb-3 font-medium"><?php echo get_sub_field('title'); ?></h1>
        <?php endif; ?>
        <?php if (get_sub_field('content')): ?>
            <div class="text-gray-600  whitespace-normal max-w-prose"><?php the_sub_field('content');?></div>
        <?php endif; ?>

        <div class="absolute image-1 right-0 top-0 w-1/4">
            <?php $image = get_sub_field('image_1');
                if( $image ): ?>
                <img class="rounded-lg" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>

    <div class=" w-11/12 bg-white shadow-md rounded-md p-10 my-10 relative z-10"
  style="box-shadow: 0px 4px 4px 0 rgba(0,0,0,0.25);">
      
        <div class="flex items-start">

            <div class="flex flex-col justify-between  ">
                <div class="group-[.hovered]:opacity-10">
                    <h2 class="text-gray-800 text-2xl mb-5"><?php pll_e('IcebergFront'); ?></h2>
                    <div class="flex jic">
                        <?php if( have_rows('top_items') ): while ( have_rows('top_items') ): the_row(); ?>

                        <div class="iceberg-item flex gap-3 items-center w-1/3 mb-3">
                        <?php $topIcon = get_sub_field('icon');
                            if( $topIcon ): ?>
                            <div class="ib-item-icon w-10 rounded-full p-2 bg-[var(--mainColorLight)]">
                                <img src="<?php echo $topIcon['url']; ?>" alt="<?php echo esc_attr($topIcon['alt']); ?>" />
                            </div>
                            <?php endif;?>
                            <h3 class="text-l text-gray-800 font-medium"><?php the_sub_field('icon_title'); ?></h3>
                        </div>


                        <?php endwhile; endif;?>
                    </div>
                </div>

                <span class="line-iceberg !top-[31.1%] !w-[92%] group-[.hovered]:opacity-10"></span>

                <div class="mt-20 group-[.hovered]:opacity-10">
                    <h2 class="text-gray-800 text-2xl mb-5"><?php pll_e('IcebergBehind'); ?></h2>
                   
                    <div class="flex jic flex-wrap">
                        <?php if( have_rows('bottom_items') ): while ( have_rows('bottom_items') ): the_row(); ?>

                        <div class="iceberg-item flex gap-3 items-center w-1/3 mb-3">
                        <?php $topIcon = get_sub_field('icon');
                            if( $topIcon ): ?>
                            <div class="ib-item-icon w-10 rounded-full p-2 bg-[var(--mainColorLight)]">
                                <img src="<?php echo $topIcon['url']; ?>" alt="<?php echo esc_attr($topIcon['alt']); ?>" />
                            </div>
                            <?php endif;?>
                            <h3 class="text-l text-gray-800 font-medium"><?php the_sub_field('icon_title'); ?></h3>
                        </div>


                        <?php endwhile; endif;?>
                    </div>
                </div>

              <?php get_template_part('template-parts/iceberg/overlay'); ?>
            </div>

        
            <div class="w-2/5 mr-0 ml-auto">
                <?php get_template_part('template-parts/assets/iceberg'); ?>
            </div>     
        
        </div>
    </div>


    <div class="relative mt-10">
        <?php if (get_sub_field('content_end')): ?>
            <!-- <div class="text-gray-600  whitespace-normal max-w-prose"><?php the_sub_field('content_end');?> </div> -->
        <?php endif; ?>

        <div class="absolute image-2 right-0 bottom-0 w-1/4">
            <?php $image2 = get_sub_field('image_2');
                if( $image2 ): ?>
                <img class="rounded-lg" src="<?php echo esc_url($image2['sizes']['large']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
            <?php endif; ?>
        </div>
    </div>



</div>


<style>
    .ib-item-icon img {
        opacity: 0.7;
    }
</style>