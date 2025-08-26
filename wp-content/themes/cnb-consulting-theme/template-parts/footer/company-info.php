<?php
/**
 * Footer Company Information Component
 *
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

$company_info = cnb_get_company_info();
$contact_info = cnb_get_contact_info();
?>

<!-- Company Information -->
<div class="space-y-6">
    <div>
        <?php
        if (function_exists('the_custom_logo') && has_custom_logo()) {
            the_custom_logo();
        } else {
        ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block mb-4">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/footer-logo.png'); ?>" 
                     alt="<?php echo esc_attr($company_info['name']); ?>" 
                     class="h-14 md:h-16 w-auto">
            </a>
        <?php } ?>
    </div>
    
    <p class="text-slate-300 leading-relaxed">
        <?php echo esc_html($company_info['name']); ?> is a one-stop solution for your global business expansion. Helps to form your company in the US, UK, & UAE, set up business bank accounts and payment gateways, unlock eCommerce doors, and file your taxes.
    </p>
    
</div>