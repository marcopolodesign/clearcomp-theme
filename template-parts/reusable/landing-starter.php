<div class="home-starter min-h-[80vh] flex container-xs relative bg-main-dark-color md:mb-52 py-44 sm:py-36">
    <div class="flex flex-col justify-center align-middle px-10 relative z-10 childs-animate mx-auto">
        <p class=' text-white text-center mb-5 text-2xl'><?php the_sub_field('sub_parragraph');?></p>
        <h1 class=" text-6xl md:text-6xl text-center text-[var(--secondaryColor)] font-medium sm:w-[60%] mx-auto"><?php the_sub_field('main_title');?></h1>
        <?php 
            $link = get_sub_field('call_to_action');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button btn btn-primary starter main-color-bg self-center text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

    </div>

    
       <?php 
       $user_agent = $_SERVER['HTTP_USER_AGENT'];

       if (strpos($user_agent, 'Safari') !== false && strpos($user_agent, 'Chrome') === false) {
        get_template_part('template-parts/assets/home-landing'); 
       } else { ?>
        <div id="home-svg-container" class="heading-svg-container">
            <img src="/wp-content/uploads/2024/06/Frame-300.png" alt="home-svg" class="w-full" />
        </div>
     <?php  }
       ?>
</div>


<style>
    .video-container {
    /* position: relative; */
    width: 100%;
    height: 100vh; /* Adjust the height as needed */
    overflow: hidden;
    }

    video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video covers the entire container */
    z-index: -1; /* Puts the video behind other content */
    }
    </style>
