<?php
/**
 * Contact Page Form Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Contact Form Section -->
<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-10 left-6 h-64 w-64 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-10 h-80 w-80 rounded-full bg-slate-200 blur-[200px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php include get_template_directory() . '/template-parts/contact/form-components/contact-form.php'; ?>
        <?php include get_template_directory() . '/template-parts/contact/form-components/form-script.php'; ?>
    </div>
</section>