<div class="container rounded-xl bg-gray-100 flex p-10 my-<?php the_sub_field('margin');?> relative overflow-hidden group hover:bg-[var(--mainColor)] smooth-t hover:scale-[0.98]">
    <div class="py-20 flex flex-col jic m-auto">
        <h3 class="text-6xl gradient-text font-normal text-center px-20 group-hover:!text-black smooth-t"><?php the_sub_field('title');?></h3>
        <?php 
        $link = get_sub_field('call_to_action');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="flex gap-2 btn-arrow main-color items-center self-center mt-10" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                <p class="text-xl font-medium group-hover:text-white smooth-t"><?php echo esc_html( $link_title ); ?></p>
                <?php get_template_part('template-parts/assets/arrow'); ?>
            </a>
        <?php endif; 
        ?>

        <div class="absolute left-0 top-0 w-[25%] group-hover:scale-105 smooth-t">
            <?php get_template_part('template-parts/assets/line-left'); ?>
        </div>

        <div class="absolute right-0 bottom-0 w-[25%] group-hover:scale-105 smooth-t">
            <?php get_template_part('template-parts/assets/line-right'); ?>
        </div>
    </div>
</div>
   