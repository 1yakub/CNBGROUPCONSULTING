<?php
/**
 * Template for Company Formation Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/company-formation/hero'); ?>
    
    <?php get_template_part('template-parts/company-formation/benefits'); ?>
    
    <?php get_template_part('template-parts/company-formation/pricing'); ?>
    
    <?php get_template_part('template-parts/company-formation/process'); ?>
    
    <?php get_template_part('template-parts/company-formation/testimonials'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'company-formation',
        'title' => 'Company Formation FAQ',
        'subtitle' => 'Common questions about forming your business'
    )); ?>
    
    <?php get_template_part('template-parts/company-formation/cta'); ?>
</main>

<?php get_footer(); ?>