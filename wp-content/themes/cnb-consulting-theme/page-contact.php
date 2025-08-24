<?php
/**
 * Template for Contact Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/contact/hero'); ?>
    
    <?php get_template_part('template-parts/contact/form'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'contact',
        'title' => 'Contact FAQ',
        'subtitle' => 'Common questions about our services and how we can help'
    )); ?>
    
    <!-- View All FAQs Link -->
    <div class="text-center pb-16">
        <a href="<?php echo home_url('/faq'); ?>" class="text-cnb-primary hover:underline font-semibold text-lg">
            View All FAQs →
        </a>
    </div>
</main>

<?php get_footer(); ?>