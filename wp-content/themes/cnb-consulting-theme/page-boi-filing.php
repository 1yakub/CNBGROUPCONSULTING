<?php
/**
 * Template for BOI Filing Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
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
    get_template_part('template-parts/boi-filing/faq');
    
    // CTA section with JavaScript
    get_template_part('template-parts/boi-filing/cta');
    ?>
</main>

<?php get_footer(); ?>