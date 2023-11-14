<div class="container my-52">
    <div class="flex flex-col relative">
        <h2 class="text-4xl text-center text-gray-800 mb-5"><?php pll_e('Numbers'); ?></h2>
        <div class="flex column-mobile justify-between gap-5 mt-10 about-icon-grid py-10 items-stretch">
            <?php if (have_rows('about_numbers')): while (have_rows('about_numbers')): the_row(); ?>
                <?php the_sub_field('content'); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

