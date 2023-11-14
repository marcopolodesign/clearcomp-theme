<div class="home-starter min-h-[60vh] flex container-xs relative">
    <div class="flex flex-col justify-center align-middle px-10 relative z-10 childs-animate">
        <p class=' text-gray-600 text-center mb-5 text-2xl'><?php the_sub_field('sub_parragraph');?></p>
        <h1 class=" text-5xl md:text-7xl xl:text-8xl text-center gradient-text font-light"><?php the_sub_field('main_title');?></h1>
        <?php 
            $link = get_sub_field('call_to_action');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="button btn btn-primary main-color-bg self-center text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

    </div>

    <div class="absolute top-0 left-0 -z-0 video-container opacity-50">
        <video autoplay loop muted playsinline>
            <source src="/wp-content/uploads/2023/09/cc-hero-low.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

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
