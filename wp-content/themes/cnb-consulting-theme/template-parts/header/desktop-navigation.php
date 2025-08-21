<?php
/**
 * Desktop Navigation Component
 *
 * @package CNB_Consulting_Theme
 */
?>
<?php
wp_nav_menu(array(
    'theme_location' => 'primary',
    'menu_id' => 'primary-menu',
    'menu_class' => 'flex space-x-12 items-center',
    'container' => false,
    'fallback_cb' => 'cnb_consulting_primary_menu_fallback',
));
?>