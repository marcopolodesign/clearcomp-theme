<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clear_Comp
 */

?>

</div> <!-- End Barba Container -->

	<div class=" mt-80 container flex flex-col justify-center items-center">
		<h2 class="text-6xl text-gray-800 text-center mb-4"><?php pll_e('Calculating'); ?> <span id="yearCounter">2023</span></h2>
		<div class="w-3/4">
			<img src="/wp-content/uploads/2023/09/network-3537400_640-1.png" />
		</div>
	</div>
	<footer id="colophon" class="site-footer bg-black p-8 sm:p-16 flex flex-col sm:flex-row items-center justify-between">
		<div class="flex flex-col sm:w-1/4 justify-center sm:justify-start sm:mb-0 mb-10">
			<div class="sm:w-30 mb-10 sm:mb-20 m-auto sm:mx-0">
				<?php get_template_part('template-parts/assets/logo-black'); ?>
			</div>

			<div class="flex sm:flex-row gap-2 items-center">
				<a href="http://x.com/clearcomp" target='_blank' class="block w-10">
					<?php get_template_part('template-parts/assets/x'); ?>
				</a>
				<a href="http://x.com/clearcomp" target='_blank' class="block w-10">
					<?php get_template_part('template-parts/assets/linked'); ?>
				</a>

				<p class="text-[#B6B6B6] ml-5 text-xs"><?php pll_e('Copyright'); ?></p>
			</div>
		</div>

		<div class="flex flex-col sm:w-1/2">
			<div class="flex justify-between items-start mb-5">
				<p class="text-white font-bold w-1/3"><?php pll_e('Solutions'); ?></p>
				<p class="text-white font-bold w-1/3"><?php pll_e('Technology'); ?></p>
				<p class="text-white font-bold w-1/3"><?php pll_e('Info'); ?></p>
			</div>

			<div class="flex flex-wrap justify-between gap-5">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer',
						'menu_id'        => 'footer',
						'container' => 'ul',
						'menu_class' => 'footer-nav flex flex-wrap jic list-none text-white [&>*]:w-1/3 [&>*]:mb-5',
					) );
				?>
			</div>
			
		</div>
		<a class="text-[var(--mainColor)] border-[1px] border-[var(--mainColor)] hover:bg-[var(--mainColor)] hover:text-white smooth-t py-[10px] px-[35px] rounded-md font-medium desktop" href="#contact"><?php pll_e('Contact'); ?></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
