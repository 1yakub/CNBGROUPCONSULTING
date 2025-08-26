<?php
/**
 * Template for BOI Filing Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" >
    <?php 
    // Hero Section with form
    get_template_part('template-parts/boi-filing/hero');
    
    // What is BOI explanation
    get_template_part('template-parts/boi-filing/explanation');
    
    // Requirements section
    get_template_part('template-parts/boi-filing/requirements');
    
    // Information required
    get_template_part('template-parts/boi-filing/information');
    
    // Pricing comparison
    get_template_part('template-parts/boi-filing/pricing');
    
    // FAQ section
    get_template_part('template-parts/components/faq-section', null, array(
        'service' => 'boi-filing',
        'title' => 'BOI Filing FAQ',
        'subtitle' => 'Common questions about Beneficial Ownership Information filing',
        'bg_color' => 'bg-white'
    ));
    
    // CTA section with JavaScript
    get_template_part('template-parts/boi-filing/cta');
    ?>
</main>

<?php get_footer(); ?>