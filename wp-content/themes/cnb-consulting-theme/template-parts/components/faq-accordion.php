<?php
/**
 * Simple FAQ Accordion Component
 * Reusable FAQ accordion for service pages and homepage
 * 
 * Usage:
 * get_template_part('template-parts/components/faq-accordion', null, array(
 *     'faqs' => array of FAQ items,
 *     'id' => unique identifier,
 *     'show_schema' => boolean to output schema markup
 * ));
 * 
 * @package CNB_Consulting_Theme
 */

// Get parameters
$faqs = $args['faqs'] ?? array();
$component_id = $args['id'] ?? 'faq';
$show_schema = $args['show_schema'] ?? true;

// Output schema markup if enabled
if ($show_schema && !empty($faqs)) {
    echo cnb_output_faq_schema($faqs);
}
?>

<!-- Simple FAQ Accordion -->
<div x-data="faqSystem" class="space-y-4 faq-component">
    <?php foreach ($faqs as $index => $faq):
        $faq_id = $component_id . '-' . ($index + 1);
        // Handle both array formats
        $question = $faq['question'] ?? $faq[0] ?? '';
        $answer = $faq['answer'] ?? $faq[1] ?? '';
        ?>
        <div class="bg-gray-50 rounded-lg">
            <button @click="toggleItem('<?php echo esc_attr($faq_id); ?>')"
                class="w-full p-6 text-left flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-cnb-primary focus:ring-opacity-50 rounded-lg">
                <h3 class="text-lg font-semibold text-gray-900 pr-4">
                    <?php echo esc_html($question); ?>
                </h3>
                <svg class="w-5 h-5 text-cnb-primary transition-transform duration-300 flex-shrink-0"
                    :class="{'rotate-180': isOpen('<?php echo esc_attr($faq_id); ?>')}" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div x-show="isOpen('<?php echo esc_attr($faq_id); ?>')" x-collapse>
                <div class="px-6 pb-6 text-gray-600 leading-relaxed">
                    <p><?php echo esc_html($answer); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>