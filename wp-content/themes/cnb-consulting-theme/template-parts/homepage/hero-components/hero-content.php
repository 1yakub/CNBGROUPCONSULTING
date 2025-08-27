<?php $hero_content = cnb_get_hero_content(); ?>
<!-- Hero Content -->
<div class="space-y-8">

    <?php include get_template_directory() . '/template-parts/homepage/hero-components/trust-badge.php'; ?>

    <!-- Main Headline -->
    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
        <?php echo esc_html($hero_content['headline']); ?>
        <span class="text-cnb-secondary">Globally</span>
    </h1>

    <!-- Subtitle -->
    <p class="text-xl md:text-2xl text-blue-100 leading-relaxed">
        <?php echo esc_html($hero_content['subtitle']); ?>
    </p>

    <!-- Key Benefits -->
    <div class="grid md:grid-cols-2 gap-4 text-blue-100">
        <div class="flex items-center space-x-3">
            <!-- Heroicon: check -->
            <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>US, UK & UAE Formation</span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Heroicon: check -->
            <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Banking & Payments</span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Heroicon: check -->
            <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>E-Commerce Setup</span>
        </div>
        <div class="flex items-center space-x-3">
            <!-- Heroicon: check -->
            <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
            <span>Tax & Compliance</span>
        </div>
    </div>

    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="<?php echo esc_url(cnb_get_cta_link('get-quote')); ?>" target="_blank" rel="noopener"
            class="bg-gradient-to-r from-cnb-secondary to-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:scale-105 transition-transform shadow-xl">
            Get My Custom Rate
        </a>
        <a href="<?php echo esc_url(cnb_get_cta_link('book-consultation')); ?>" target="_blank" rel="noopener"
            class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-cnb-primary hover:scale-105 transition-all">
            Book a Consultation
        </a>
    </div>

</div>