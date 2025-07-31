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

<div id="page" class="site">
    <a class="skip-link sr-only" href="#main"><?php _e('Skip to content', 'cnb-consulting-theme'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="header-inner">
                
                <!-- Top Contact Bar -->
                <div class="header-top">
                    <div class="contact-info">
                        <?php 
                        $contact = cnb_get_contact_info();
                        ?>
                        <div class="contact-items">
                            <span class="contact-item">
                                <i class="icon-phone"></i>
                                <a href="tel:<?php echo esc_attr(str_replace(array(' ', '(', ')', '-'), '', $contact['phone'])); ?>">
                                    <?php echo esc_html($contact['phone']); ?>
                                </a>
                            </span>
                            <span class="contact-item">
                                <i class="icon-email"></i>
                                <a href="mailto:<?php echo esc_attr($contact['email']); ?>">
                                    <?php echo esc_html($contact['email']); ?>
                                </a>
                            </span>
                            <span class="contact-item hours">
                                <i class="icon-clock"></i>
                                <?php echo esc_html($contact['business_hours']); ?>
                            </span>
                        </div>
                        
                        <div class="header-cta">
                            <a href="#contact" class="btn btn-secondary btn-sm">
                                <?php _e('Free Consultation', 'cnb-consulting-theme'); ?>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Main Navigation -->
                <div class="header-main">
                    <div class="site-branding">
                        <?php
                        if (function_exists('the_custom_logo') && has_custom_logo()) {
                            the_custom_logo();
                        } else {
                            $company_info = cnb_get_company_info();
                        ?>
                            <div class="site-logo-text">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" rel="home">
                                    <?php echo esc_html($company_info['name']); ?>
                                </a>
                                <?php if ($company_info['tagline']) : ?>
                                    <p class="site-tagline"><?php echo esc_html($company_info['tagline']); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php } ?>
                    </div>

                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e('Primary Navigation', 'cnb-consulting-theme'); ?>">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                            <span class="hamburger">
                                <span class="hamburger-line"></span>
                                <span class="hamburger-line"></span>
                                <span class="hamburger-line"></span>
                            </span>
                            <span class="menu-text"><?php _e('Menu', 'cnb-consulting-theme'); ?></span>
                        </button>

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'primary-menu',
                            'container'      => false,
                            'fallback_cb'    => 'cnb_consulting_primary_menu_fallback',
                        ));
                        ?>
                    </nav><!-- #site-navigation -->

                    <div class="header-actions">
                        <div class="search-toggle">
                            <button id="search-toggle" aria-expanded="false" aria-controls="search-form">
                                <i class="icon-search"></i>
                                <span class="sr-only"><?php _e('Search', 'cnb-consulting-theme'); ?></span>
                            </button>
                        </div>
                        
                        <div class="whatsapp-link">
                            <a href="https://wa.me/<?php echo esc_attr(str_replace(array(' ', '(', ')', '-', '+'), '', $contact['whatsapp'])); ?>" 
                               target="_blank" 
                               rel="noopener"
                               class="btn btn-outline btn-sm">
                                <i class="icon-whatsapp"></i>
                                <?php _e('WhatsApp', 'cnb-consulting-theme'); ?>
                            </a>
                        </div>
                    </div>
                </div><!-- .header-main -->

                <!-- Search Form (Hidden by default) -->
                <div id="search-form" class="header-search" style="display: none;">
                    <div class="search-form-container">
                        <?php get_search_form(); ?>
                        <button id="search-close" class="search-close">
                            <i class="icon-close"></i>
                            <span class="sr-only"><?php _e('Close Search', 'cnb-consulting-theme'); ?></span>
                        </button>
                    </div>
                </div>

            </div><!-- .header-inner -->
        </div><!-- .container -->
    </header><!-- #masthead -->

    <main id="main" class="site-main">

<?php
/**
 * Fallback function for primary menu
 */
function cnb_consulting_primary_menu_fallback() {
    echo '<ul id="primary-menu" class="primary-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/')) . '">' . __('Services', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">' . __('About', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">' . __('Contact', 'cnb-consulting-theme') . '</a></li>';
    echo '</ul>';
}
?>