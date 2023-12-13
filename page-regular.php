<?php 
/* Template Name: Page Text */
get_header(); 
// add page template name

?>

<div data-barba="container" class="page-regular <?php echo strtolower(the_title());?>" data-barba-namespace="<?php echo strtolower(the_title());?>" data-header-color="dark">
   
<div class="container m-auto pt-24">

<?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_title('<h1 class="text-6xl text-center main-color mb-10">', '</h1>');?>
            <div class="max-w-prose mx-auto leading-normal gap-5 content-regular"><?php the_content();?></div>
       <?php endwhile; endif; ?>
</div>

<style>
    .content-regular p {
        margin-bottom: 1.5rem;
    }
</style>

</div> <!-- End Barba Container -->
<?php get_footer(); ?>


<!-- Title & CTa -->
<!-- Video -->
