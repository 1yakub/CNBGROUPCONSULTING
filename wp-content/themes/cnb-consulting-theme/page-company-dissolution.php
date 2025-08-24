<?php
/**
 * Template for Company Dissolution Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/company-dissolution/hero'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/importance'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/process'); ?>
    
    <?php get_template_part('template-parts/company-dissolution/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'company-dissolution',
        'title' => 'Company Dissolution FAQ',
        'subtitle' => 'Common questions about dissolving your business'
    )); ?>
    
    <?php get_template_part('template-parts/company-dissolution/cta'); ?>
</main>

<?php get_footer(); ?>