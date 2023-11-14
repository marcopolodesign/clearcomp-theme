<div class="flex items-end column-mobile gap-4 mb-4">
    <?php if (get_sub_field('image_1')) : ?>
        <div class="w-[50%]">
            <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="<?php echo get_sub_field('image_1')['alt']; ?>" />
        </div>
    <?php endif; ?>

    <?php if (get_sub_field('image_2')) : ?>
        <div class="w-[30%]">
            <img src="<?php echo get_sub_field('image_2')['url']; ?>" alt="<?php echo get_sub_field('image_2')['alt']; ?>" />
        </div>
    <?php endif; ?>
</div>
<div class="w-[70%]">
    <?php if (get_sub_field('image_3')) : ?>
        <img src="<?php echo get_sub_field('image_3')['url']; ?>" alt="<?php echo get_sub_field('image_3')['alt']; ?>" />
    <?php endif; ?>
</div>