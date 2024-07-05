<div class="container mt-52 icon-grid-container">
    <div class="relative sm:gap-10 sm:flex">
        <div class="sm:w-2/4 w-full ml-auto mr-0 mt-10 sticky sm:top-[120px] relative-m h-max">
            <h2 class="text-6xl text-gray-800 mb-10 pt-20"><?php the_sub_field('title');?></h2>
               <?php the_sub_field('description');?>

                <div class="w-1/5 relative h-[250px] desktop">
                    <?php get_template_part('template-parts/assets/texture-hexagon'); ?>
                </div>
            </div>

            

            <div class="flex-1 flex flex-col jic">
            
            
            <?php get_template_part('template-parts/reusable/icon-grid'); ?>

        
            </div>
            
        
    </div>
</div>


<div class="container my-20 about-us-aob">
        <div class="flex items-stretch gap-3 column-mobile">
            <h2 class="bg-gray-200 hover:bg-[var(--secondaryColor)] hover:shadow-md smooth-t text-gray-800 py-10 text-5xl w-[70%] rounded-lg text-center"><?php pll_e('Commited'); ?></h2>
            <a href="#contact" class="bg-gray-200  py-10 w-[30%] rounded-lg flex hover:bg-[var(--mainColor)] hover:text-white smooth-t">
                <p class="text-center text-gray-800 text-2xl m-auto font-medium  hover:text-white smooth-t"><?php pll_e('Demo'); ?></p>
            </a>
        </div>

        <div class="flex gap-3 items-start mt-3 column-mobile">
            <?php if(have_rows('about_grid')): while (have_rows('about_grid')): the_row(); 
                 the_sub_field('content'); 
             endwhile; endif; ?>
        </div>

        <div class="mt-3">
            <h2 class="bg-gray-200 hover:bg-[var(--secondaryColor)] smooth-t text-gray-800 p-10 text-5xl w-full rounded-lg"><?php pll_e('Devs'); ?></h2>
        </div>
</div>
