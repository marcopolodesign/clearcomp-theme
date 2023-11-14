<?php $marginStarter = get_sub_field('reverse')? 'mr-auto container-left' : 'ml-auto container-right'; ?>

<div class="container relative">
    <?php if (get_sub_field('image_1')) : ?>
        <div class="w-[70%]  <?php echo $marginStarter; ?>">
            <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="<?php echo get_sub_field('image_1')['alt']; ?>" />
        </div>
    <?php endif; ?>

    <?php if (get_sub_field('image_2')) : ?>
        <div class="w-[40%] absolute top-0 -translate-y-1/4">
            <img src="<?php echo get_sub_field('image_2')['url']; ?>" alt="<?php echo get_sub_field('image_2')['alt']; ?>" />
        </div>
    <?php endif; ?>

    <?php if (get_sub_field('image_3')) : ?>
        <div class="w-[60%] absolute bottom-0 translate-y-1/4">
            <img src="<?php echo get_sub_field('image_3')['url']; ?>" alt="<?php echo get_sub_field('image_3')['alt']; ?>" />
        </div>
    <?php endif; ?>
</div>