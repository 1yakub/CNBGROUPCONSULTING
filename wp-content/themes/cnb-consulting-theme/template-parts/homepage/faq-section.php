<?php
/**
 * FAQ Section Template Part
 * 
 * Displays frequently asked questions with Alpine.js accordion functionality
 * 
 * @package CNB_Consulting_Theme
 */


?>

<section class="py-16 lg:py-24 bg-slate-950">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="text-center max-w-3xl mx-auto mb-16 text-white">
            <p class="text-sm uppercase tracking-[0.35em] text-white/50 mb-4">
                <?php _e('Support', 'cnb-consulting-theme'); ?>
            </p>
            <h2 class="text-3xl md:text-4xl font-bold">
                <?php _e('Frequently Asked Questions', 'cnb-consulting-theme'); ?>
            </h2>
        </header>

        <div class="rounded-3xl border border-white/10 bg-white/5 p-6 sm:p-8 lg:p-10 backdrop-blur">
            <?php
            get_template_part('template-parts/components/faq-accordion', null, array(
                'faqs' => cnb_get_faqs('homepage'),
                'id' => 'homepage-faq',
                'show_schema' => false,
                'show_categories' => false
            ));
            ?>

         
        </div>

    </div>
</section>