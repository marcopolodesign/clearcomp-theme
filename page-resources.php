<?php
get_header(); ?>

<div data-barba="container" class="resources" data-barba-namespace="resources" data-header-color="">
   
    <section class="container pt-20 sm:pt-28 pb-5">
        <div class="flex flex-col gap-2 mb-12">
            <h2 class="main-color text-xl">News & Resources</h2>
            <h1 class="main-dark-color font-medium text-6xl"><?php the_title();?></h1>
        </div>
            
                <!-- <div class="flex jic mt3 cat-filters blog-filters">
                    <p class="active ttu has-after grey anchor">View All</p>
                    <?php foreach ($all_categories as $cat) :
                            $category_id = $cat->term_id; ?>
                        <p class="ttu has-after grey anchor"><?php echo $cat->name; ?></p> 
                    <?php endforeach;?>
                </div> -->

            <div class="flex justify-between gap-10 sm:flex-row flex-col">
                <div class="latest-blog relative sm:w-1/2">
                <?php $blogsArgs = array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'cat' => 13,
                                'posts_per_page' => 1, 
                            );
                    $blogs = new WP_Query( $blogsArgs ); 
                    if ( $blogs->have_posts() ) : while ( $blogs->have_posts() ) : $blogs->the_post();?>

                            <!-- <?php get_template_part('template-parts/child-blog');?> -->

                            <div class="featured-resource ">
                                
                            </div>

                                            
                    <?php if (get_field('external_link')):
                            $link = get_field('external_link');
                            $target = "_blank";
                            $barba = "barba-prevent";
                        else: 
                            $link = get_the_permalink();
                        endif;
                        ?>

                        <a href="<?php echo $link; ?>" class="no-deco overflow-hidden flex flex-col rounded-tr-[80px] rounded-md w-full relative  <?php the_field('width'); echo " "; echo $barba; ?>">

                            <div class="h-60 relative">
                                <div class="lb-img cover no-repeat w-100 h-100 absolute-cover z-1 bg-center" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                                <!-- <div class="absolute-cover lb-bg z-2 bg-main-gradient animate-in o-70"></div> -->
                            </div>

                            <div class="p-6 sm:p-8 latest-blog-info bg-[var(--secondaryColor)]">
                                <p class="post-date text-white mb-3"><?php echo get_the_date(); ?></p>
                                <h3 class="white text-3xl text-[var(--mainDarkColor)] font-medium mb-3"><?php the_title(); ?></h3>
                                    <p class="mb-5"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p> 
                                <p class="main-cta mt4 bg-white ">Read More</p>
                            </div>
                        </a> 


                    <?php  endwhile; endif; wp_reset_postdata();?>
                </div>

                <div class="latest-blog relative sm:w-1/2 flex flex-col">

                <div class="rounded-md bg-[var(--terciaryColor)] p-6 sm:p-8 mb-8">
                    <p class="">Get updates on our products, latest releases and keep up to date with our latest news.</p>
                </div>
                <?php $blogsArgs = array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'cat' => 13,
                                'posts_per_page' => 1, 
                                'offset' => 1
                            );
                    $blogs = new WP_Query( $blogsArgs ); 
                    if ( $blogs->have_posts() ) : while ( $blogs->have_posts() ) : $blogs->the_post();?>

                                            
                    <?php if (get_field('external_link')):
                            $link = get_field('external_link');
                            $target = "_blank";
                            $barba = "barba-prevent";
                        else: 
                            $link = get_the_permalink();
                        endif;

                        // esto para ponerle al final del a tag the_field('width'); echo " "; echo $barba; 
                        ?>

                        <a href="<?php echo $link; ?>" class="group no-deco overflow-hidden flex flex-col justify-between items-end rounded-md w-full relative flex-1 h-full">
                    
                            <div class="p-6 sm:p-8 latest-blog-info relative z-20 flex flex-col gap-20 h-full justify-between">
                                <div class="flex jic">
                                    <p class="post-date text-white"><?php echo get_the_date(); ?></p>
                                    <p class="text-white ">Read More</p>
                                </div>

                                <div>
                                    <h3 class="white text-2xl text-white group-hover:text-[var(--mainDarkColor)]  mb-3 smooth-t"><?php the_title(); ?></h3>
                                    <p class="opacity-0 max-h-0 mb-5 overflow-hidden group-hover:opacity-100 group-hover:max-h-[200px] text-white smooth-t group-hover:text-[var(--mainDarkColor)]"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p> 
                                </div>
                            </div>

                            <div class="lb-img cover no-repeat w-100 h-100 absolute-cover z-0 bg-center" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                            <div class="absolute-cover opacity-20 group-hover:opacity-90 group-hover:z-10 smooth-t lb-bg z-2 bg-black group-hover:bg-[var(--secondaryColor)] animate-in z-0"></div>
                        

                        </a> 


                    <?php  endwhile; endif; wp_reset_postdata();?>
                </div>



            </div>
        
    </section>

    <?php $category = get_category(13);
    $catName;
    if ($category) {
        $catName = $category->name;
    }?>

    <section class="container py-20 flex flex-wrap sm:flex-row flex-col items-center justify-between gap-10 <?php echo $catName; ?>">

    <?php $blogsArgs = array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'cat' => 13,
                            'posts_per_page' => 10, 
                            'offset' => 2
                        );
                $blogs = new WP_Query( $blogsArgs ); 
                if ( $blogs->have_posts() ) : while ( $blogs->have_posts() ) : $blogs->the_post();?>

                                         
                <?php if (get_field('external_link')):
                        $link = get_field('external_link');
                        $target = "_blank";
                        $barba = "barba-prevent";
                    else: 
                        $link = get_the_permalink();
                    endif;

                    // esto para ponerle al final del a tag the_field('width'); echo " "; echo $barba; 
                    ?>

                    <a href="<?php echo $link; ?>" class="group no-deco overflow-hidden flex flex-col justify-between items-end rounded-md w-full sm:w-[45%] relative h-full ">
                <?php
                $category = get_the_category();
                if ( ! empty( $category ) ) {
                    echo esc_html( $category[0]->name );
                }
                ?>
                   
                        <div class="p-6 sm:p-8 latest-blog-info relative z-20 flex flex-col gap-20 h-full justify-between">
                            <div class="flex jic">
                                <p class="post-date text-white"><?php echo get_the_date(); ?></p>
                                <p class="text-white ">Read More</p>
                            </div>

                            <div>
                                <h3 class="white text-2xl text-white group-hover:text-[var(--mainDarkColor)]  mb-3 smooth-t"><?php the_title(); ?></h3>
                                <p class="opacity-0 max-h-0 mb-5 overflow-hidden group-hover:opacity-100 group-hover:max-h-[200px] text-white smooth-t group-hover:text-[var(--mainDarkColor)]"><?php echo wp_trim_words( get_the_content(), 21 , '...' ); ?></p> 
                            </div>
                        </div>

                        <div class="lb-img cover no-repeat w-100 h-100 absolute-cover z-0 bg-center" style="background-image: url('<?php the_post_thumbnail_url();?>')"></div>
                        <div class="absolute-cover opacity-20 group-hover:opacity-90 group-hover:z-10 smooth-t lb-bg z-2 bg-black group-hover:bg-[var(--secondaryColor)] animate-in z-0"></div>
                     

                    </a> 


                <?php  endwhile; endif; wp_reset_postdata();?>

    </section>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>


<!-- Title & CTa -->
<!-- Video -->
