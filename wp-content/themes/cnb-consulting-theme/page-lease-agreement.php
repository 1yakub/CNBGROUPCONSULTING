<?php
/**
 * Template for US Lease Agreement Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php get_template_part('template-parts/lease-agreement/hero'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/types'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/importance'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/provisions'); ?>
    
    <?php get_template_part('template-parts/lease-agreement/pricing'); ?>
    
    <?php get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'lease-agreement',
        'title' => 'Lease Agreement FAQ',
        'subtitle' => 'Common questions about lease agreements'
    )); ?>
    
    <?php get_template_part('template-parts/lease-agreement/cta'); ?>
</main>

<?php get_footer(); ?>