<?php
/**
 * Logo Component
 *
 * @package CNB_Consulting_Theme
 */
?>
<?php
if (function_exists('the_custom_logo') && has_custom_logo()) {
    the_custom_logo();
} else {
    $company_info = cnb_get_company_info();
    ?>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center" rel="home">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cnb-logo.png'); ?>" 
             alt="CNB Group Consulting" 
             class="h-16 md:h-20 w-auto">
    </a>
<?php } ?>