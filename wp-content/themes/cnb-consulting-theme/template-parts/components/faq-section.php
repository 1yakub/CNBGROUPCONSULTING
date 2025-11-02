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
$variant = $args['variant'] ?? 'light';
$label = $args['label'] ?? '';
$show_schema = $args['show_schema'] ?? true;

if ($variant === 'dark') {
    $section_classes = 'bg-slate-950';
    $header_title_class = 'text-3xl md:text-4xl font-bold text-white mb-4';
    $header_subtitle_class = 'text-xl text-white/70';
    $label_class = 'text-sm uppercase tracking-[0.35em] text-white/60 mb-4';
    $wrapper_classes = 'rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8 lg:p-10 backdrop-blur';
    $container_classes = 'max-w-5xl mx-auto px-4 sm:px-6 lg:px-8';
    $header_wrapper_classes = 'text-center max-w-3xl mx-auto mb-16';
    $schema_enabled = $show_schema;
} else {
    $section_classes = $bg_color;
    $header_title_class = 'text-3xl md:text-4xl font-bold text-gray-900 mb-4';
    $header_subtitle_class = 'text-xl text-gray-600';
    $label_class = 'text-sm uppercase tracking-[0.3em] text-slate-500 mb-4';
    $wrapper_classes = '';
    $container_classes = 'max-w-4xl mx-auto px-4 sm:px-6 lg:px-8';
    $header_wrapper_classes = 'text-center mb-16';
    $schema_enabled = $show_schema;
}
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 <?php echo esc_attr($section_classes); ?>">
    <div class="<?php echo esc_attr($container_classes); ?>">
        <div class="<?php echo esc_attr($header_wrapper_classes); ?>">
            <?php if (!empty($label)) : ?>
                <p class="<?php echo esc_attr($label_class); ?>"><?php echo esc_html($label); ?></p>
            <?php endif; ?>
            <h2 class="<?php echo esc_attr($header_title_class); ?>"><?php echo esc_html($title); ?></h2>
            <p class="<?php echo esc_attr($header_subtitle_class); ?>"><?php echo esc_html($subtitle); ?></p>
        </div>

        <?php if (!empty($wrapper_classes)) : ?>
            <div class="<?php echo esc_attr($wrapper_classes); ?>">
                <?php
                get_template_part('template-parts/components/faq-accordion', null, array(
                    'faqs' => cnb_get_faqs($service),
                    'id' => $service . '-faq',
                    'show_schema' => $schema_enabled
                ));
                ?>
            </div>
        <?php else : ?>
            <?php
            get_template_part('template-parts/components/faq-accordion', null, array(
                'faqs' => cnb_get_faqs($service),
                'id' => $service . '-faq',
                'show_schema' => $schema_enabled
            ));
            ?>
        <?php endif; ?>
    </div>
</section>