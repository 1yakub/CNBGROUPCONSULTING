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

<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-10 left-8 h-64 w-64 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-10 h-80 w-80 rounded-full bg-slate-200 blur-[200px]"></div>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8" data-faq-root>
        <div class="mx-auto max-w-3xl text-center space-y-4">
            <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                <?php _e('Browse by topic', 'cnb-consulting-theme'); ?>
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950">
                <?php _e('Detailed answers for every stage of your business journey.', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-base text-slate-600 md:text-lg">
                <?php _e('Select a category to unlock operator-level FAQs covering formation, compliance, tax automation, marketplace approvals, and more.', 'cnb-consulting-theme'); ?>
            </p>
        </div>

        <div class="mt-14" x-data="faqSystem" x-init="initCategory('<?php echo esc_js(array_key_first($all_faqs)); ?>')" x-cloak>
            <div class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                <div class="relative w-full lg:max-w-md">
                    <span class="pointer-events-none absolute inset-y-0 left-4 flex items-center text-slate-400">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.3-4.3"></path>
                        </svg>
                    </span>
                    <input type="search" x-model.debounce.250ms="searchTerm" placeholder="<?php echo esc_attr__('Search questions...', 'cnb-consulting-theme'); ?>"
                        class="w-full rounded-full border border-slate-200 bg-white px-12 py-3 text-sm text-slate-900 shadow-sm transition focus:border-cnb-primary focus:outline-none focus:ring-2 focus:ring-cnb-primary/30" />
                    <button type="button" x-show="searchTerm" @click="clearSearch"
                        class="absolute inset-y-0 right-3 hidden items-center justify-center rounded-full bg-slate-100 px-3 text-xs font-semibold uppercase tracking-[0.2em] text-slate-500 transition hover:bg-slate-200 sm:flex">
                        <?php _e('Clear', 'cnb-consulting-theme'); ?>
                    </button>
                </div>

                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-2">
                        <span class="rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-slate-500">
                            <span x-text="visibleCount(activeCategory)"></span>
                            <span><?php _e('answers', 'cnb-consulting-theme'); ?></span>
                        </span>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" @click="expandAll()"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-slate-600 transition hover:border-cnb-primary hover:text-cnb-primary">
                            <?php _e('Expand all', 'cnb-consulting-theme'); ?>
                        </button>
                        <button type="button" @click="collapseAll()"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-slate-600 transition hover:border-cnb-primary hover:text-cnb-primary">
                            <?php _e('Collapse', 'cnb-consulting-theme'); ?>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mb-10 overflow-x-auto" data-faq-nav>
                <div class="flex w-full flex-wrap justify-center gap-3">
                    <?php foreach ($categories as $category):
                        $title = cnb_get_faq_category_title($category);
                        ?>
                        <button @click="setCategory('<?php echo esc_attr($category); ?>')"
                            class="flex items-center gap-2 rounded-full border px-5 py-2 text-sm font-semibold transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-primary/70"
                            :class="isActiveCategory('<?php echo esc_attr($category); ?>')
                                ? 'border-transparent bg-slate-900 text-white shadow-[0_18px_40px_-25px_rgba(15,23,42,0.6)]'
                                : 'border-slate-200 bg-white text-slate-600 hover:border-cnb-primary hover:text-cnb-primary'">
                            <span><?php echo esc_html($title); ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php foreach ($all_faqs as $category => $category_data): ?>
                <div x-show="isActiveCategory('<?php echo esc_attr($category); ?>')"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="space-y-5">

                    <div class="flex flex-col items-center gap-2 text-center">
                        <p class="text-xs uppercase tracking-[0.3em] text-cnb-primary/80"><?php echo esc_html__('Category', 'cnb-consulting-theme'); ?></p>
                        <h3 class="text-2xl md:text-3xl font-semibold text-slate-900"><?php echo esc_html($category_data['title']); ?></h3>
                    </div>

                    <?php foreach ($category_data['items'] as $index => $faq):
                        $faq_id = $category . '-' . ($index + 1);
                        $search_blob = strtolower($faq['question'] . ' ' . $faq['answer']);
                        ?>
                        <article class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-[0_32px_80px_-55px_rgba(15,23,42,0.35)]"
                            x-init="registerItem('<?php echo esc_js($category); ?>', '<?php echo esc_js($faq_id); ?>', '<?php echo esc_js($search_blob); ?>')"
                            x-show="shouldShowItem('<?php echo esc_js($category); ?>', '<?php echo esc_js($faq_id); ?>')"
                            x-transition.opacity.duration.200ms>
                            <button @click="toggleItem('<?php echo esc_attr($faq_id); ?>')"
                                class="flex w-full items-center justify-between gap-6 text-left focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-primary/70">
                                <div>
                                    <h4 class="text-lg font-semibold text-slate-900"><?php echo esc_html($faq['question']); ?></h4>
                                </div>
                                <span class="flex h-8 w-8 items-center justify-center rounded-full border border-slate-200 text-slate-500 transition-transform duration-300"
                                    :class="{'rotate-180': isOpen('<?php echo esc_attr($faq_id); ?>')}">
                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </button>

                            <div x-show="isOpen('<?php echo esc_attr($faq_id); ?>')" x-collapse>
                                <div class="pt-4 text-sm leading-relaxed text-slate-600">
                                    <p><?php echo esc_html($faq['answer']); ?></p>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>

                    <div x-show="visibleCount('<?php echo esc_js($category); ?>') === 0"
                        class="rounded-[28px] border border-dashed border-slate-300 bg-white/60 p-8 text-center text-sm text-slate-500">
                        <p><?php _e('No answers match your search in this category. Try another keyword or view a different topic.', 'cnb-consulting-theme'); ?></p>
                        <button type="button" class="mt-4 inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.3em] text-slate-600 transition hover:border-cnb-primary hover:text-cnb-primary" @click="clearSearch()">
                            <?php _e('Clear search', 'cnb-consulting-theme'); ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>