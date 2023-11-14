<div class="flex flex-col justify-between gap-5 mt-10 about-icon-grid group smooth-t">

<?php if (have_rows("icon_grid")) : while (have_rows('icon_grid')): the_row(); $icon = get_sub_field('icon');?>
    <div class="min-h-[60vh] sm:min-h-screen p-20 m-auto flex flex-col <?php the_sub_field('bg_color');?> ">
        <?php get_template_part('template-parts/assets/' . $icon . ''); ?>
        <div class="mt-auto mb-14">
            <h3 class="text-white mb-2 text-6xl mt-10 smooth-t font-medium"><?php the_sub_field('title');?></h3>
            <p class="text-white smooth-t text-2xl "><?php the_sub_field('description');?></p>
        </div>
    </div>

    <?php endwhile; endif; ?>
   
</div>


<style>
    .about-icon-grid svg {
        height: 150px !important;
        width: 150px !important;
    }

    .about-icon-grid svg path {
        fill: #fff;
        /* stroke: #fff; */
    }
</style>