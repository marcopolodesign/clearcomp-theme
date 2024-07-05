<div class="flex flex-col justify-between gap-5 mt-10 about-icon-grid group smooth-t relative">

<?php if (have_rows("icon_grid")) : while (have_rows('icon_grid')): the_row(); $icon = get_sub_field('icon');
?>
    <div class="min-h-[60vh] sm:min-h-[80vh] p-16 m-auto flex flex-col rounded-lg mb-12 bg-[var(<?php the_sub_field('bg_color');?>)] smooth-t">
        <div class="flex jic">
          <?php get_template_part('template-parts/assets/' . $icon . ''); ?>
           <p class="text-white"><?php echo get_row_index();?>/4</p>
        </div>
        <div class="mt-auto">
            <h3 class="text-white mb-2 text-4xl mt-10 smooth-t font-medium"><?php the_sub_field('title');?></h3>
            <p class="text-white smooth-t text-xl "><?php the_sub_field('description');?></p>
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