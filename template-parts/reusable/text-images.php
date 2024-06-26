<?php 
$isReversed = get_sub_field('reverse')? 'flex-row-reverse' : '';

$bgColor = get_sub_field('colors')['bg_color'] ?: '--mainColorLight';
$fontSize = get_sub_field('title')['font_size'] ?: 'text-3xl';
$fontColor = get_sub_field('title')['font_color'] ?: 'text-black';
$bulletColor = get_sub_field('colors')['bullet_color'] ?: 'bg-white';
$textColor = get_sub_field('colors')['color'] ?: '--mainColorDark';
$imageBgColor = get_sub_field('colors')['image_bg_color'] ?: '--mainColorLight';


$link = get_sub_field('call_to_action');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
$isFullWidth =  get_sub_field('layout') === 'full-width';
$fullWidthStyles = '';


if ($isFullWidth) {
    $fullWidthStyles = 'rounded-[8px] overflow-hidden bg-[var(' . get_sub_field('f_width')['bg_color'] . ')] p-20 relative';
}
?>

<div class="text-images flex column-mobile justify-between  container mx-auto sm:max-w-[unset] <?php echo $isReversed; echo ' '; echo $fullWidthStyles; ?> my-<?php the_sub_field('margin');?>  <?php if (get_sub_field('layout') === 'single'): echo 'items-stretch'; else : echo 'items-center' ; endif; ?>">

    <div class="text-content  <?php if (get_sub_field('layout') === 'single'):  echo 'w-[50%]'; else : echo 'w-[45%]'; endif;?>  relative z-10 flex flex-col justify-center <?php if (get_sub_field('layout') === 'single'): echo 'bg-[var(' . $bgColor . ')] text-[var(--' . $textColor . ')] rounded-[var(--border-radius)]  overflow-hidden '; endif; if (get_sub_field('bullets')): echo 'px-20 py-24'; else: echo 'px-20 py-36'; endif?> ">
        <?php if (get_sub_field('title')): ?>
            <h1 class="<?php echo $fontSize . ' ' . $fontColor; ?> mb-3 font-medium"><?php echo get_sub_field('title')['content']; ?></h1>
        <?php endif; ?>
        <?php if (get_sub_field('content')): ?>
            <p><?php the_sub_field('content');?> </p>
        <?php endif; ?>

        <?php if (get_sub_field('bullets')): ?>
            <ul class="mt-10">
                <?php while (have_rows('bullets')): the_row(); ?>
                    <li class="inline-flex gap-4 items-center mb-5 last:border-b-0 rounded-[13px] bg-[var(<?php echo $bulletColor; ?>)] p-[2px] px-1 flex-grow-0">
                    <?php $image = get_sub_field('bullet_icon');
                          if( $image ): ?>
                          <div class="h-10 flex justify-center items-center w-auto bullet-icon-container rounded-full p-2">
                            <img class="m-auto" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          </div>
                    <?php endif; ?>
                    <div class="pr-2">
                        <p class=" text-gray-600 lh-1" style="font-size: 16px"><?php the_sub_field('bullet_content'); ?></p>
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
            <a class="button btn btn-primary main-color-bg self-start text-white mt-8 inline-block" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

        <?php if (get_sub_field('layout') === 'single'): 
            get_template_part('template-parts/assets/line-gradients');   
         endif; ?>
    </div>

  


    <div class="images-content flex 
    <?php if (get_sub_field('layout') === 'single'):  echo 'w-[45%]'; else : echo 'w-[50%]'; endif; ?> relative z-10 <?php if (get_sub_field('layout') == 'single'): echo '  bg-[var(' . $imageBgColor . ')] rounded-[var(--border-radius)] p-10 overflow-hidden'; endif; ?> ">
        <?php if (get_sub_field('layout') == 'stacked') :
            get_template_part('template-parts/reusable/text-images-stacked');
            elseif (get_sub_field('layout') == 'grid') :
            get_template_part('template-parts/reusable/text-images-grid');
            else : 
                get_template_part('template-parts/reusable/text-images-single');
            endif;
        ?>
    </div>

    <?php if ($isFullWidth) {?>
    <div class='absolute w-full h-full top-0 left-0  flex  justify-between align-stretch'>
        <svg class="self-end" width="317" height="368" viewBox="0 0 317 368" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1784_449)">
            <g style="mix-blend-mode:color-burn">
            <path d="M-55.003 209.804L82.5413 308.799C105.746 325.5 138.574 313.112 145.024 285.221L188.462 97.3817C193.44 75.8583 180.012 54.4384 158.471 49.539L-13.5287 10.4191C-37.5035 4.9662 -60.7536 22.2123 -62.4745 46.7253L-71.4578 174.69C-72.4249 188.466 -66.2036 201.742 -55.003 209.804Z" fill="#C1C1C1
            "/>
            </g>
            <g style="mix-blend-mode:color-burn">
            <path d="M107.391 487.469L-22.9515 284.941C-37.5809 262.209 -25.8276 231.56 0.296034 224.318L189.777 171.791C211.065 165.89 232.94 178.409 238.634 199.754L304.532 446.758C311.073 471.279 293.481 495.833 268.204 497.46L143.168 505.511C128.826 506.434 115.161 499.543 107.391 487.469Z" fill="#C1C1C1"/>
            </g>
            </g>
            <defs>
            <clipPath id="clip0_1784_449">
            <rect width="317" height="368" fill="white"/>
            </clipPath>
            </defs>
        </svg>

        <svg width="229" class="self-start" height="189" viewBox="0 0 229 189" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_1784_448)">
            <g style="mix-blend-mode:color-burn">
            <path d="M75.4276 71.7053L193.466 96.87C221.408 102.827 246.406 78.4153 241.114 50.3398L216.287 -81.3719C212.195 -103.081 191.279 -117.362 169.57 -113.27L46.4263 -90.0585C22.2419 -85.4999 7.87107 -60.3909 16.1902 -37.2293L46.1225 46.1059C50.8024 59.1355 61.8873 68.8187 75.4276 71.7053Z" fill="#C1C1C1"/>
            </g>
            <g style="mix-blend-mode:color-burn">
            <path d="M276.937 219.54L128.191 121.53C105.545 106.609 103.998 73.9553 125.131 56.9593L233.655 -30.3221C250.87 -44.1671 276.049 -41.4354 289.894 -24.2207L407.246 121.694C423.147 141.464 416.86 170.853 394.264 182.389L317.133 221.765C304.31 228.311 288.959 227.461 276.937 219.54Z" fill="#C1C1C1"/>
            </g>
            </g>
            <defs>
            <clipPath id="clip0_1784_448">
            <rect width="229" height="189" fill="white"/>
            </clipPath>
            </defs>
        </svg>
    </div>
    <?php } ?>

</div>