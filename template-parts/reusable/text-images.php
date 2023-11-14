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

<div class="text-images flex column-mobile items-center <?php echo $isReversed; ?> my-<?php the_sub_field('margin');?>">

    <div class="text-content w-[40%] container">
        <?php if (get_sub_field('title')): ?>
            <h1 class="<?php echo $fontSize . ' ' . $fontColor; ?> mb-3"><?php echo get_sub_field('title')['content']; ?></h1>
        <?php endif; ?>
        <?php if (get_sub_field('content')): ?>
            <p><?php the_sub_field('content');?> </p>
        <?php endif; ?>

        <?php if (get_sub_field('bullets')): ?>
            <ul class="my-10">
                <?php while (have_rows('bullets')): the_row(); ?>
                    <li class="flex gap-2 items-center mb-5 last:border-b-0">
                    <?php $image = get_sub_field('bullet_icon');
                          if( $image ): ?>
                          <div class="w-14 bullet-icon-container bg-[var(--mainColorLight)] rounded-full p-3">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </div>
                    <?php endif; ?>
                    <div class="mx-3">
                        <p class=" text-gray-600"><?php the_sub_field('bullet_content'); ?></p>
                    </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

        <?php if (get_sub_field('numbers')) : ?>
            <ol class="flex items-start gap-3 column-mobile">
                <?php while (have_rows('numbers')): the_row(); ?>
                    <li class="gap-3 flex flex-col justify-center items-center w-max mb-5 last:border-b-0">
                        <h3 class="text-5xl font-semibold text-gray-500"><?php the_sub_field('number'); ?></h3>
                        <p class="mx-3 text-base"><?php the_sub_field('number_content');?></p>
                    </li>
                <?php endwhile; ?>
            </ol>
        <?php endif; ?>

        <?php if( $link ): ?>
            <a class="flex gap-2 btn-arrow main-color items-center" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <p class="text-xl font-medium"><?php echo esc_html( $link_title ); ?></p>
                <?php get_template_part('template-parts/assets/arrow'); ?>
            </a>
        <?php endif; 
        ?>
    </div>


    <div class="images-content w-[50%]">
        <?php if (get_sub_field('layout') == 'stacked') :
            get_template_part('template-parts/reusable/text-images-stacked');
            elseif (get_sub_field('layout') == 'grid') :
            get_template_part('template-parts/reusable/text-images-grid');
            else : 
                get_template_part('template-parts/reusable/text-images-single');
            endif;
        ?>
    </div>

</div>