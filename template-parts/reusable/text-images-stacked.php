<?php $marginStarter = get_sub_field('reverse')? 'mr-auto container-left' : 'ml-auto container-right'; ?>

<div class="container relative">
    <?php if (get_sub_field('image_1')) : ?>
        <div class="relative">
            <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="<?php echo get_sub_field('image_1')['alt']; ?>" />
          
            <?php if (get_sub_field('layout') == 'stacked') : ?>
               <div style="z-index: -1" class="absolute w-full h-full rounded-lg bg-[var(--secondaryColor)] group-hover:bg-[var(--mainColor)] top-0 left-0  translate-x-3 translate-y-3 z-0 smooth-t"></div>
           <?php endif; ?>
        </div>

       
    <?php endif; ?>

    <?php if (get_sub_field('image_2')) : ?>
        <div class="w-[35%] absolute top-0 translate-y-1/4 -translate-x-1/4">
            <img src="<?php echo get_sub_field('image_2')['url']; ?>" alt="<?php echo get_sub_field('image_2')['alt']; ?>" />
        </div>
    <?php endif; ?>

    <?php if (get_sub_field('image_3')) : ?>
        <div class="w-[50%] absolute bottom-0 translate-y-1/4 right-20">
            <img src="<?php echo get_sub_field('image_3')['url']; ?>" alt="<?php echo get_sub_field('image_3')['alt']; ?>" />
        </div>
    <?php endif; ?>
</div>