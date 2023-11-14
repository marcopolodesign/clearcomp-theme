<?php 
$landingImage = get_sub_field('image');
$landingIcon = get_sub_field('main_icon');

$link = get_sub_field('call_to_action');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
endif;
?>


<?php if (get_sub_field('layout') == 'side') : ?>
<div class="home-starter min-h-[60vh] flex column-mobile jic container mt-5 sm:mt-[160px] pt-20">
    <div class="w-2/5 flex flex-col">       
        <p class=' text-gray-800 mb-5 text-2xl'><?php the_sub_field('sub_parragraph');?></p>
        <h1 class="text-6xl gradient-text font-normal mb-3"><?php the_sub_field('main_title');?></h1>

         <?php if( $link ): ?>
            <a class="button btn btn-primary main-color-bg self-start text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>


    </div>

    <div class="w-2/5">
        <img src="<?php echo esc_url($landingImage['url']); ?>" alt="<?php echo esc_attr($landingImage['alt']); ?>" />
    </div>
</div>

<?php 
// elseif (get_sub_field('layout') == 'half') :
 else :  ?>

<div class="flex column-mobile-reverse container justify-between items-start mt-[160px] pt-20">
    <div class="w-1/5">
        <?php if ($landingIcon): ?>
         <img src="<?php echo esc_url($landingIcon['url']); ?>" alt="<?php echo esc_attr($landingIcon['alt']); ?>" />
         <?php endif; ?>
          <p class=' text-gray-800 text-xl font-medium mb-3 mt-5'><?php the_title();?></p>
          <p class=' text-gray-800 mb-5 text-xl'><?php the_sub_field('alternate_paragraph');?></p> 
    </div>

    <div class=" w-3/5">
        <span class="w-full mb-10 border-t-[1px] border-[var(--mainColor)] block"></span>
         <h1 class="text-6xl gradient-text font-medium mb-3"><?php the_sub_field('main_title');?></h1>
         <?php if ((get_sub_field('sub_parragraph'))) : ?>
            <p class=' text-gray-800 mb-5 text-xl'><?php the_sub_field('sub_parragraph');?></p>
        <?php endif; ?>
         <?php if ($landingImage) : ?>
            <img src="<?php echo esc_url($landingImage['url']); ?>" alt="<?php echo esc_attr($landingImage['alt']); ?>" />
         <?php endif; ?>
    </div>
</div>

<?php endif; ?>