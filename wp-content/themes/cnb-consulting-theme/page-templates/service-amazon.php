<?php
/**
 * Template Name: Service - Amazon
 * Description: Template for the Amazon Seller service page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php
    get_template_part('template-parts/amazon-seller/hero');
    get_template_part('template-parts/amazon-seller/services');
    get_template_part('template-parts/amazon-seller/packages');
    get_template_part('template-parts/amazon-seller/benefits');
    
    get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'amazon-seller',
        'title' => 'Amazon Seller FAQ',
        'subtitle' => 'Common questions about starting and scaling your Amazon business',
        'variant' => 'dark',
        'label' => __('Support', 'cnb-consulting-theme')
    ));
    
    get_template_part('template-parts/amazon-seller/cta');
    ?>
</main>

<?php get_footer(); ?>