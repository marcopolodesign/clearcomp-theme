<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clear_Comp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdn.tailwindcss.com"></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PF6VK8MJ');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF6VK8MJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script>!function () {var reb2b = window.reb2b = window.reb2b || []; if (reb2b.invoked) return;reb2b.invoked = true;reb2b.methods = ["identify", "collect"]; reb2b.factory = function (method) {return function () {var args = Array.prototype.slice.call(arguments); args.unshift(method);reb2b.push(args);return reb2b;};}; for (var i = 0; i < reb2b.methods.length; i++) {var key = reb2b.methods[i];reb2b[key] = reb2b.factory(key);} reb2b.load = function (key) {var script = document.createElement("script");script.type = "text/javascript";script.async = true; script.src = "https://s3-us-west-2.amazonaws.com/b2bjsstore/b/" + key + "/5NRP9HQM4PO1.js.gz"; var first = document.getElementsByTagName("script")[0]; first.parentNode.insertBefore(script, first);}; reb2b.SNIPPET_VERSION = "1.0.1";reb2b.load("5NRP9HQM4PO1");}();</script> 

<script> (function () { var w = window; var swan = (w.swan = w.swan || []); if (swan.isLoaded) return; swan.isLoaded = true; swan.pk = 'cm7ogc3px0006jv05taolg7ou'; var script = document.createElement('script'); script.type = 'text/javascript'; script.async = true; script.src = 'https://swan-scripts.s3.amazonaws.com/bundle.js'; var head = document.getElementsByTagName('head')[0]; head.appendChild(script); })(); </script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'clearcomp' ); ?></a>

	<?php get_template_part('template-parts/notices'); ?>

	<header id="masthead" class="site-header flex jic py-5 px-20 fixed top-[84px] md:top-[48px] left-0 w-full z-[9999] bg-white [.scrolled]:shadow-md">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="items-center w-32 sm:w-40 db">
			<?php get_template_part('template-parts/assets/logo'); ?>
		</a>

		<div class="mobile">
			<?php get_template_part('template-parts/menu'); ?>
		</div>

		<div class="header-aob flex items-center desktop">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'header',
					'menu_id'        => 'header',
					'container' => 'ul',
					'menu_class' => 'header-nav w-max ml-auto mr-0 flex jic list-none black :last-text-red',
				) );
			?>
		</div>

		<a class="text-[var(--mainColor)] border-[1px] border-[var(--mainColor)] hover:bg-[var(--mainColor)] hover:text-white smooth-t py-[10px] px-[35px] rounded-md font-medium desktop" href="#contact"><?php pll_e('Contact'); ?></a>
	</header><!-- #masthead -->

	<?php get_template_part('template-parts/header-dropdown'); ?>



	<!-- <div class="cursor desktop dn"></div> -->
	<div class="flex pre-load">
		<div class="bg-main-dark-color"></div>
		<div class="bg-main-dark-color"></div>
		<div class="bg-main-dark-color"></div>
		<div class="bg-main-dark-color desktop"></div>
		<div class="bg-main-dark-color desktop"></div>
		<div class="bg-main-dark-color desktop"></div>
		<div class="m-auto white absolute-center overflow-hidden tc w-80">
			<!-- <p class="f5 fw3 flex tc items-center justify-center main-color">Page is <span class="mh3"></span> loading</p> -->
			<span class="db druk f0 ttu fw3 mv4 main-color"></span>
			<!-- <p class="f5 fw3">Page is loading...</p> -->
		</div>

	</div>
	
	<?php get_template_part('template-parts/contact'); ?>
	<?php // get_template_part('template-parts/hs-pop'); ?>
	<div data-barba="wrapper"><!-- Start Barba Container -->