<?php $marginStarter = get_sub_field('reverse')? 'mr-auto container-left' : 'ml-auto container-right'; ?>

<div class="container relative">
    <?php if (get_sub_field('image_1')) : ?>
        <div class="w-full  <?php echo $marginStarter; ?>">
            <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="<?php echo get_sub_field('image_1')['alt']; ?>" />
        </div>
    <?php endif; ?>
</div>