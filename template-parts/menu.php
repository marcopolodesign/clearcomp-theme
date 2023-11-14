<div class=" flex items-center">
  <a href="#contact" class="flex btn-header bg-main-color rounded-md p-2 mr-2">
    <p class="text-white">Contact us</p>
  </a> 
  <div class="flex flex-col menu-trigger pointer">
    <span class="block"></span>
    <span class="block"></span>
    <span class="block"></span>
  </div>
    
</div>


<div class="fixed menu-container opacity-0 pointer-events-none top-0 left-0 min-h-100-vh w-full pa5-ns z-[9999]">
  <nav class="side-menu relative ph3-ns">
    <div class="mb5 flex jic w-100 menu-header overflow-hidden">
      <?php get_template_part('template-parts/assets/logo-min');?>
      <svg class="close-menu pointer" width="30" height="30" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M35 2L2 35" stroke="black" stroke-width="3"/>
      <path d="M2 2L35 35" stroke="black" stroke-width="3"/>
      </svg>
    </div>

      <div class="has-hover-items">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'mobile',
						'menu_id'        => 'side-menu',
						'container' => 'ul',
						'menu_class' => 'menu-nav w-max ml-0 jic list-none',
					) );
					?>
   </div>
    </nav>
 
  <div class="absolute-cover bg-main-color"></div>
</div>
