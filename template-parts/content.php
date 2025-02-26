<?php 
/** 
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<div class="w-full sm:py-26 mx-auto pt-20 sm:pt-28 pb-5 flex flex-col justify-center items-center">
		<h1 class="text-6xl text-[var(--mainDarkColor)] text-center font-medium"><?php the_title();?></h1>
		<p class="main-cta secondary-color-bg text-[var(--mainColor)] w-max text-center mx-auto">Published on <?php the_date();?></p>

		<!-- <div class="flex items-center mt4 pb4 social-sharer-container">
			<p class="f3 main-color mr3">Share this article:</p>
			<?php get_template_part('template-parts/content/social-sharer', get_post_type());?> 
		</div> -->
	</div>


    <section class="relative cs-project-img center w-full " style="height: 50vh !important;">
        <div class="absolute-cover bg-center" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
    </section>

    <section class="mt5 container flex column-mobile justify-between pb5">
        <div class="w-[60%] content-holder">
             <!-- <h1 class="f1 white gt-super ttu"><?php the_title();?></h1> -->
             <!-- <div class="flex items-center mt4 pb4 social-sharer-container">
                  <p class="f3 main-color mr3">Share this article:</p>
                  <?php get_template_part('template-parts/content/social-sharer', get_post_type());?> 
             </div> -->


            <div class="my-12 content-inner">
                 <?php the_content();?>
            </div>

            <!-- <div class="flex items-center mt4 pt4 last-sharer">
                  <p class="f3 main-color mr3">Share this article:</p>
                  <?php get_template_part('template-parts/content/social-sharer', get_post_type());?> 
             </div>
     -->
        </div>

        <div class="w-[30%]">
            <div class="flex flex-column">
             <!-- <p class="main-cta bg-main-color mt3 w-max">Written by <?php the_author();?></p> -->
            </div>       
        </div>            
    </section>

    <section class="newsletter-form my-12 container mx-auto">
        <div class="flex justify-between items-center bg-[var(--mainColorLight)] p-12 rounded-md ">
            <h3 class="white text-xl sm:text-2xl">
                Want to stay up to date with our latest content?<br>
                <span class="font-medium mt-2">Sign up to our newsletter.</span>
            </h3>

            <div>
            <?php echo do_shortcode('[hubspot type="form" portal="22451805" id="fbdce0ff-2795-49e2-b2e5-c734d2753c3d"]'); ?>
            </div>
    </section>

    <section class="related-reads pb5 hidden">
        <h2 class="white mt5 tc f2">
            Related reads:
        </h2>


    <div class="blogs-container relative-blogs container flex justify-between flex-wrap mt4">
        <?php $allBlogsArgs = array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'cat' => 12,
                            'posts_per_page' => 2, 
                            'offset' => 1,
                            'post__not_in' => array( $post->ID ),
                        );
        $allBlogs = new WP_Query( $allBlogsArgs ); 
        if ( $allBlogs->have_posts() ) : while ( $allBlogs->have_posts() ) : $allBlogs->the_post();
                        
            get_template_part('template-parts/grid-child-blog');
        
        endwhile; endif; wp_reset_postdata();?>
    </div>

    <a href="/case-studies" class="secondary-cta white no-deco mt5 center w-max" style="display: flex;">
        View All
    </a>

    </section>
</article><!-- #post-<?php the_ID(); ?> -->

<style>
	.content-inner p {
		margin-bottom: 20px;
	}
</style>