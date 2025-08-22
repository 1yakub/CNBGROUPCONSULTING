<?php
/**
 * BOI Filing - Hero Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <?php include get_template_directory() . '/template-parts/boi-filing/hero-components/hero-content.php'; ?>
            <?php include get_template_directory() . '/template-parts/boi-filing/hero-components/application-form.php'; ?>
        </div>
    </div>
</section>