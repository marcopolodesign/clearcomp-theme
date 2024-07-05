<?php 
$isReversed = get_sub_field('reverse')? 'flex-row-reverse' : '';

$fontSize = get_sub_field('title')['font_size'] ?: 'text-3xl';
$fontColor = get_sub_field('title')['font_color'] ?: 'text-black';

$imagesLayout = get_sub_field('layout');

$link = get_sub_field('call_to_action');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<div class="text-images container mx-auto sm:block flex flex-col column-mobile justify-center items-center <?php echo $isReversed; ?> my-<?php the_sub_field('margin');?>">

    <div class="text-content text-center sm:w-[70%] mx-auto relative z-10">
        <?php if (get_sub_field('title')): ?>
            <h1 class="<?php echo $fontSize . ' ' . $fontColor; ?> mb-3 font-medium"><?php echo get_sub_field('title')['content']; ?></h1>
        <?php endif; ?>
        <?php if (get_sub_field('content')): ?>
            <div class="<?php if (!get_sub_field('bullets')): echo 'mb-10'; endif; ?>"><?php the_sub_field('content');?> </div>
        <?php endif; ?>

        <?php if (get_sub_field('bullets')): ?>
            <ul class="my-10 flex md:flex-row flex-col justify-between  items-stretch gap-10">
                <?php while (have_rows('bullets')): the_row(); ?>
                    <li class="flex flex-col bg-[var(--lightGrey)] gap-2 items-center md:items-start justify-between mb-5 last:border-b-0 p-6 rounded-md flex-1">
                    <?php $image = get_sub_field('bullet_icon');
                          if( $image ): ?>
                          <div class="w-16 bullet-icon-container rounded-full mb-5">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </div>
                    <?php endif; ?>
                    <div class="">
                        <p class="text-black text-center md:text-left"><?php the_sub_field('bullet_content'); ?></p>
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
            <a class="button btn btn-primary main-color-bg self-start text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>


    <div class="flex column-mobile-reverse container justify-between items-start <?php if (get_sub_field('bullets')) : echo 'mt-[-80px] '; else : echo 'mt-16'; endif; echo $imagesLayout; ?> p-20 bg-[var(--mainColorLight)] rounded-[8px] relative images-content z-0 overflow-hidden">

        <?php if ($imagesLayout == 'stacked') :
            get_template_part('template-parts/reusable/text-images-stacked');
            elseif ($imagesLayout == 'grid') :
            get_template_part('template-parts/reusable/text-images-grid');
            else : 
                get_template_part('template-parts/reusable/text-images-single');
            endif;
        ?>

        <div class='absolute w-full h-full top-0 left-0 overflow-hidden flex  justify-between align-stretch'>
            <svg class="self-end" width="315" height="218" viewBox="0 0 315 218" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g style="mix-blend-mode:color-burn">
                <path d="M190.903 36.815L314.877 311.473L-55.3896 311.473L-55.3897 0.30957L190.903 36.815Z" fill="#7A7A7A"/>
                </g>
            </svg>

            <svg class="self-start" width="327" height="403" viewBox="0 0 327 403" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:color-burn">
            <path d="M80.0359 88.4456L324.376 -4.34013C376.726 -24.2195 432.776 14.4515 432.776 70.4491L432.776 322.758C432.776 366.941 396.959 402.758 352.776 402.758L80.3316 402.758C30.5967 402.758 -7.08438 357.858 1.54499 308.877L29.6497 149.354C34.5409 121.592 53.6823 98.4531 80.0359 88.4456Z" fill="#7A7A7A"/>
            </g>
            </svg>
        </div>
    </div>

</div>