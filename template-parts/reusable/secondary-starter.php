<?php 
$landingImage = get_sub_field('image');
$landingIcon = get_sub_field('main_icon');
$colors = get_sub_field('colors')['bg_color'];
$textColors = get_sub_field('colors')['color'];
$ctaColor = get_sub_field('colors')['cta_color'];
$textCTAColors = get_sub_field('colors')['cta_text_color'];


$link = get_sub_field('call_to_action');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>

<?php if (get_sub_field('layout') == 'side') : ?>
<div class="home-starter secondary-starter min-h-[60vh] flex column-mobile items-center container mt-[80px] md:mt-[160px] py-20 pl-20 pr-0 bg-[var(<?php echo $colors; ?>)] rounded-[8px] smooth-t" >
    <div class="w-2/5 flex flex-col">       
        <h1 class="text-5xl text-[var(<?php echo $textColors;?>)] font-normal mb-3"><?php the_sub_field('main_title');?></h1>
        <p class=' text-[var(<?php echo $textColors;?>)] mb-5 text-xl'><?php the_sub_field('sub_parragraph');?></p>

         <?php if( $link ): ?>
            <a class="button btn btn-primary starter bg-[var(<?php echo $ctaColor; ?>)] self-start text-[var(<?php echo $textCTAColors; ?>)]" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>


    </div>

    <div class="w-1/2 mr-0 ml-auto">
        <img src="<?php echo esc_url($landingImage['url']); ?>" alt="<?php echo esc_attr($landingImage['alt']); ?>" />
    </div>
</div>

<?php 
// elseif (get_sub_field('layout') == 'half') :
 else :  ?>

<div class='flex column-mobile container justify-between items-start mt-[80px] md:mt-[160px] px-20 py-32 bg-[var(<?php echo $colors; ?>)] rounded-[8px] rounded-tl-[100px] rounded-br-[100px] relative mx-auto secondary-starter smooth-t' >
    <div class=" w-3/5 z-10">
         <h1 class="text-5xl text-[var(--mainDarkColor)] font-medium mb-3"><?php the_sub_field('main_title');?></h1>
         <?php if ((get_sub_field('sub_parragraph'))) : ?>
            <p class='text-[var(--mainDarkColor)] mb-5 text-xl font-regular'><?php the_sub_field('sub_parragraph');?></p>
        <?php endif; ?>

        <?php if( $link ): ?>
            <a class="button btn btn-primary main-color-bg self-start text-white mt-8 inline-block starter" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>
    </div>

    <div class="relative md:absolute bottom-0 translate-y-8 md:right-20 w-[25%] border-[mainBorder] border-2 bg-white rounded-md px-10 py-6">
        <?php if ($landingIcon): ?>
         <img src="<?php echo esc_url($landingIcon['url']); ?>" alt="<?php echo esc_attr($landingIcon['alt']); ?>" />
         <?php endif; ?>
          <p class=' text-gray-800 text-2xl font-medium mb-3 mt-5'><?php the_title();?></p>
          <p class=' text-gray-800 text-lg'><?php the_sub_field('alternate_paragraph');?></p> 
    </div>

    <!-- Falta pasarle el color al svg dinamicamente -->

    <div class='absolute w-full h-full top-0 left-0  flex  justify-between align-stretch overflow-hidden rounded-[8px] svg-container'>
        <svg class="self-end" width="315" height="218" viewBox="0 0 315 218" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:color-burn !important">
             <path d="M190.903 36.815L314.877 311.473L-55.3896 311.473L-55.3897 0.30957L190.903 36.815Z" fill="#7A7A7A"/>
            </g>
        </svg>

        <svg class="self-start" width="327" height="403" viewBox="0 0 327 403" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g style="mix-blend-mode:color-burn !important">
             <path d="M80.0359 88.4456L324.376 -4.34013C376.726 -24.2195 432.776 14.4515 432.776 70.4491L432.776 322.758C432.776 366.941 396.959 402.758 352.776 402.758L80.3316 402.758C30.5967 402.758 -7.08438 357.858 1.54499 308.877L29.6497 149.354C34.5409 121.592 53.6823 98.4531 80.0359 88.4456Z" fill="#7A7A7A"/>
            </g>
        </svg>
    </div>
</div>

<?php endif; ?>