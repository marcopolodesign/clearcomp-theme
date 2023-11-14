<?php 
$isReversed = get_sub_field('reverse')? 'flex-row-reverse' : '';

$fontSize = get_sub_field('title')['font_size'] ?: 'text-3xl';
$fontColor = get_sub_field('title')['font_color'] ?: 'text-black';

$link = get_sub_field('call_to_action');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<div class="container platform-carrousel flex justify-between <?php echo $isReversed; ?> my-<?php the_sub_field('margin');?>">

    <div class="platform-text w-2/5 container">
        <?php if (get_sub_field('title')): ?>
            <h1 class="<?php echo $fontSize . ' ' . $fontColor; ?> mb-3"><?php echo get_sub_field('title')['content']; ?></h1>
        <?php endif; ?>
        <?php if (get_sub_field('content')): ?>
            <p><?php the_sub_field('content');?> </p>
        <?php endif; ?>

        <?php if (get_sub_field('attributes')): ?>
            <div class="flex jic">
            <?php while (have_rows('attributes')): the_row(); ?>
                <h3 class="text-gray-600"><?php the_sub_field('attribute'); ?></h3>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="w-1/2 platform-images relative !first:relative">
        <?php $images = get_field('gallery'); 
            if( $images ): 
            foreach( $images as $image ):?>
            <div class="platform-image absolute top-0 left-0">
            <img src="<?php echo esc_url($image['sizes']['full']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
        <?php  endforeach; endif; ?>
    </div>
    </div>
</div>


