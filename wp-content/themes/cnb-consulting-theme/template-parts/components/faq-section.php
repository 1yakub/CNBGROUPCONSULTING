<?php
/**
 * Universal FAQ Section Component
 * Replaces 11 duplicate service FAQ templates
 * 
 * @package CNB_Consulting_Theme
 */

// Extract parameters with defaults
$service = $args['service'] ?? '';
$title = $args['title'] ?? 'Frequently Asked Questions';
$subtitle = $args['subtitle'] ?? 'Common questions and answers';
$bg_color = $args['bg_color'] ?? 'bg-gray-50';
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 <?php echo esc_attr($bg_color); ?>">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"><?php echo esc_html($title); ?></h2>
            <p class="text-xl text-gray-600"><?php echo esc_html($subtitle); ?></p>
        </div>

        <?php
        // Use the universal FAQ accordion component
        get_template_part('template-parts/components/faq-accordion', null, array(
            'faqs' => cnb_get_faqs($service),
            'id' => $service . '-faq',
            'show_schema' => true
        ));
        ?>
    </div>
</section>