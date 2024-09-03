<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
    <div id="page" class="site">
        <a class="skip-link sr-only focus:not-sr-only" href="#primary"><?php esc_html_e( 'Skip to content', 'tesla-master' ); ?></a>



<header id="masthead" class="flex justify-between items-center py-4">
    <nav
        class="
          flex flex-wrap
          items-center
          justify-between
          w-full
          px-4
          text-lg text-gray-700
          bg-white
        "
    >
        <!-- Logo -->
        <div>
            <a href="#">ladi</a>
        </div>

        <button
            id="menu-button"
            class="md:hidden p-2"
            type="button"
            aria-controls="menu"
            aria-expanded="false"
            aria-label="<?php esc_attr_e( 'Toggle navigation', 'tesla-master' ); ?>"
        >
            <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <!-- Navigation Menu -->
        <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'tesla-master',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0 space-x-4',
                    'container_class'=> 'w-full md:w-auto',
                )
            );
            ?>
        </div>
    </nav>
</header>