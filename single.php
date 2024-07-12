<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
*/

get_header();
?>

<div data-barba="container" class="blog-single" data-barba-namespace="blog-single">
<div class="progress fixed left-0 top-0"></div>

	<div class="container mx-auto">
	<?php
			while ( have_posts() ) :
				the_post();

					get_template_part( 'template-parts/content', get_post_type() );
			

			endwhile; // End of the loop.
			?>

	</div>
		
	</div><!-- End barba Container -->

<?php
get_footer();
