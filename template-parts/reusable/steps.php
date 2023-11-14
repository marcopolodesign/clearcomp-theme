<div class="container desktop steps-container  my-<?php the_sub_field('margin');?> ">
    <div class="flex jic pb-3">
        <h4 class="text-black uppercase font-semibold"><?php the_sub_field('section_title');?></h4>
        <!-- <p>Tip: Hover over the iceberg to learn more</p> -->
    </div>


    <div class="steps flex items-stretch">
        <?php if( have_rows('steps_content') ): while ( have_rows('steps_content') ): the_row(); 
            $image = get_sub_field('image');
            $link = get_sub_field('call_to_action');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            endif;
            $row_index = get_row_index();
        ?>
            <div class="flex flex-col justify-between px-10 step-inner bg-gray-100 border-r-black border-r-[1px] smooth-t min-h-[350px]">
                <div class="flex justify-between p-10 step-inner-content gap-10">
                    <div class="w-1/2 p-3 bg-white">
                      <img class="!h-[200px] !w-auto m-auto" src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <div class="w-1/2 flex flex-col justify-between">
                      <div class="text-xl"><?php the_sub_field('content');?></div>
                    </div>
                </div>
                <div class="flex items-center step-n-holder relative cursor-pointer">
                    <h3 class="bg-[#FCC64C] p-5 text-2xl font-semibold step-n max-w-[88px]"><?php echo $row_index; ?></h3>
                    <h3 class="font-normal text-gray-600 text-holder text-xl absolute left-1/2 -top-1/2 -rotate-90 whitespace-nowrap hover:text-[var(--mainColor)]" style="transform-origin: left;"><?php the_sub_field('title');?></h3>
                    <h3 class="font-medium black ml-5 text-active text-xl"><?php the_sub_field('title');?></h3>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</div>