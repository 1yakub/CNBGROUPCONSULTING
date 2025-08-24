<?php
/**
 * FAQ Questions Content Container
 * Main FAQ page with category navigation
 * 
 * @package CNB_Consulting_Theme
 */

// Get all FAQ data for categorized display
$all_faqs = cnb_get_all_faqs();
$categories = cnb_get_faq_categories();

// Output schema for all FAQs
$all_items = array();
foreach ($all_faqs as $category_data) {
    foreach ($category_data['items'] as $item) {
        $all_items[] = $item;
    }
}
echo cnb_output_faq_schema($all_items);
?>

<!-- FAQ Content -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- FAQ with Categories -->
        <div x-data="faqSystem" class="faq-component">

            <!-- Category Navigation -->
            <div class="mb-8 sticky top-0 bg-white z-10 py-4">
                <div class="flex flex-wrap justify-center gap-4">
                    <?php foreach ($categories as $category):
                        $title = cnb_get_faq_category_title($category);
                        ?>
                        <button @click="setCategory('<?php echo esc_attr($category); ?>')" :class="isActiveCategory('<?php echo esc_attr($category); ?>') 
                                        ? 'bg-cnb-primary text-white' 
                                        : 'bg-white text-cnb-primary border-2 border-cnb-primary'"
                            class="px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 hover:text-white transition">
                            <?php echo esc_html($title); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- FAQ Items by Category -->
            <?php foreach ($all_faqs as $category => $category_data): ?>
                <div x-show="isActiveCategory('<?php echo esc_attr($category); ?>')"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 transform -translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0" class="space-y-4">

                    <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">
                        <?php echo esc_html($category_data['title']); ?>
                    </h2>

                    <?php foreach ($category_data['items'] as $index => $faq):
                        $faq_id = $category . '-' . ($index + 1);
                        ?>
                        <div class="bg-gray-50 rounded-lg">
                            <button @click="toggleItem('<?php echo esc_attr($faq_id); ?>')"
                                class="w-full p-6 text-left flex justify-between items-center focus:outline-none focus:ring-2 focus:ring-cnb-primary focus:ring-opacity-50 rounded-lg">
                                <h3 class="text-lg font-semibold text-gray-900 pr-4">
                                    <?php echo esc_html($faq['question']); ?>
                                </h3>
                                <svg class="w-5 h-5 text-cnb-primary transition-transform duration-200 flex-shrink-0"
                                    :class="{'rotate-180': isOpen('<?php echo esc_attr($faq_id); ?>')}" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                    </path>
                                </svg>
                            </button>
                            <div x-show="isOpen('<?php echo esc_attr($faq_id); ?>')" x-collapse
                                class="px-6 pb-6 text-gray-600 leading-relaxed">
                                <p><?php echo esc_html($faq['answer']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>