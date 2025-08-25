<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="min-h-screen flex flex-col">
        <?php get_template_part('template-parts/header/skip-link'); ?>

        <?php

        require_once get_template_directory() . '/template-parts/header/menu-fallback.php';
        ?>

        <header id="masthead" class="bg-slate-900 shadow-lg sticky top-0 z-40">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col">

                    <!-- Main Navigation -->
                    <div class="flex items-center justify-between py-6">
                        <div class="flex items-center">
                            <?php get_template_part('template-parts/header/logo'); ?>
                        </div>

                        <!-- Mobile Menu Button -->
                        <div class="md:hidden" x-data="{ mobileMenuOpen: false }">
                            <?php get_template_part('template-parts/header/mobile-menu-button'); ?>
                            <?php get_template_part('template-parts/header/mobile-menu'); ?>
                        </div>

                        <nav id="site-navigation" class="hidden md:flex items-center space-x-12" role="navigation"
                            aria-label="<?php _e('Primary Navigation', 'cnb-consulting-theme'); ?>">
                            <?php get_template_part('template-parts/header/desktop-navigation'); ?>
                        </nav><!-- #site-navigation -->

                        <?php get_template_part('template-parts/header/cta-button'); ?>
                    </div><!-- .header-main -->

                </div><!-- .header-inner -->
            </div><!-- .container -->
        </header><!-- #masthead -->

        <main id="main" class="flex-1">