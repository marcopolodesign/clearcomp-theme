<div class="integrations-container container rounded-2xl bg-gray-100 py-20 flex flex-col jic overflow-hidden my-<?php the_sub_field('margin');?>">
    <h3 class="uppercase text-black font-semibold text-center">Adapting to your data</h3>
    <h2 class="main-dark-color text-4xl text-center my-5"><?php the_sub_field('grid_title');?></h2>
    <p class="text-black text-2xl text-center max-w-[70%] center"><?php the_sub_field('grid_description');?></p>

    <div class="integrations-icons-container w-full overflow-scroll my-10">
           <div class="w-max flex jic items-center logo-list relative h-[65px]">
           <?php 
                $images = get_sub_field('integration_list');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="absolute top-0 left-0 w-[150px] h-full m-auto flex px-8">
                            <img class="m-auto !w-[150px] !h-auto" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                    <?php endforeach; ?>
            <?php endif; ?>
           </div>
    </div>

    <?php 
    $link = get_sub_field('call_to_action');
    if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
           <a  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="!mt-0 block text-center w-max m-auto align-middle btn-primary hover:text-white hover:bg-[var(--mainDarkColor)] main-dark-color border-[2px] border-[var(--mainDarkColor)] px-10 py-3 text-xl"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; 
    ?>
</div>
