<?php
/**
 * Pricing Section for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section id="pricing" class="relative overflow-hidden bg-slate-950 py-20 lg:py-24 text-white">
    <div class="absolute inset-0">
        <div class="absolute -top-24 left-1/2 h-72 w-[520px] -translate-x-1/2 rounded-full bg-cnb-secondary/20 blur-3xl"></div>
        <svg class="absolute bottom-0 right-0 h-64 w-64 opacity-30" viewBox="0 0 256 256" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="128" cy="128" r="118" stroke="#1F7AE0" stroke-width="20" stroke-dasharray="12 18" opacity="0.4" />
            <circle cx="128" cy="128" r="72" stroke="#FCD34D" stroke-width="12" opacity="0.35" />
        </svg>
    </div>

    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php include get_template_directory() . '/template-parts/ein-service/pricing-components/pricing-header.php'; ?>
        <?php include get_template_directory() . '/template-parts/ein-service/pricing-components/pricing-cards.php'; ?>
        <?php include get_template_directory() . '/template-parts/ein-service/pricing-components/pricing-guarantee.php'; ?>
    </div>
</section>