
<div class="faq-featured-extract faq-container container my-10 flex items-start column-mobile">
    <div class="w-[30%]">
        <h2 class="sm:mb-5 text-6xl"><?php pll_e('FAQ'); ?></h2>
        <a href="/faq" class="btn btn-primary bg-main-color block text-white w-max desktop"><?php pll_e('View All'); ?></a> 
    </div>
 
    <div class="featured-faq-container flex flex-col justify-between items-start w-[60%] mr-0 ml-auto first:mt-0 first:pt-0">
    <?php  

$lang = pll_current_language();
if ($lang == 'es') : $langID = 478; else : $langID = 6; endif;
    if( have_rows('main_faq', $langID) ): 
        $count = 0;
        while ( have_rows('main_faq', $langID) && $count < 3 ) : 
            the_row(); 
            if (get_sub_field('question')):
    ?>
                <div class="faq-item pa4 mb4 w-full center mb-20 last:mb-0 border-b-[1px] border-b-black hover:border-b-[var(--mainColor)] pb-5 first:mt-0 first:pt-0" area-expanded="false">
                    <h2 class="faq-question text-3xl flex jic"><?php the_sub_field('question'); ?> <?php get_template_part('template-parts/assets/arrow');?> </h2>
                    <div class="faq-answer">
                        <p class="text-gray-800 text-xl"><?php the_sub_field('answer'); ?></p>
                    </div>  
                </div>
    <?php 
                $count++;
            endif; 
        endwhile; 
    endif;
    ?>
    </div> 

    <a href="/faq" class="btn btn-primary bg-main-color text-white w-max mobile text-center block !mt-0"><?php pll_e('View All'); ?></a> 

</div>


<style>
    .faq-item {
        /* border: 1px solid var(--mainColor); */
        /* border-radius: 8px; */
    }
</style>
