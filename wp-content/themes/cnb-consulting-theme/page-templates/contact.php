<?php
/**
 * Template Name: Contact
 * Description: Template for the Contact page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/contact/hero'); ?>
    
    <?php get_template_part('template-parts/contact/form'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'contact',
        'title' => 'Contact FAQ',
        'subtitle' => 'Common questions about our services and how we can help',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    )); ?>
    
    <div class="bg-white py-12">
        <div class="text-center">
            <a href="<?php echo home_url('/faq'); ?>" class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-600 transition hover:border-cnb-primary hover:text-cnb-primary">
                <?php _e('View all FAQs', 'cnb-consulting-theme'); ?>
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</main>

<?php get_footer(); ?>