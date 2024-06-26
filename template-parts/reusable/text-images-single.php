<?php $marginStarter = get_sub_field('reverse') ? 'mr-auto container-left' : 'ml-auto container-right'; 
?>

<div class="container relative m-auto">
    <?php if (get_sub_field('image_1')) : ?>
        <div class="w-full  relative z-10 
        <?php  if (!in_array(get_sub_field('layout'), ['single', 'full-width'])) : echo $marginStarter; endif; ?>">
            <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="<?php echo get_sub_field('image_1')['alt']; ?>" />
        </div>
    <?php endif; ?>
</div>

<div class='absolute w-full h-full top-0 left-0  flex  justify-between align-stretch overflow-hidden rounded-[8x]'>
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
