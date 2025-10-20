<?php
/**
 * Hero Section - Tony Robbins Style Minimal
 *
 * @package CNB_Consulting_Theme
 */
?>

<!-- Hero Section -->
<section class="px-4 sm:px-6 lg:px-8 py-6 md:py-8">
    <div class="relative rounded-2xl lg:rounded-3xl overflow-hidden min-h-[600px] lg:min-h-[700px]">

        <!-- Hero Image -->
        <img
            src="<?php echo get_template_directory_uri(); ?>/dist/images/hero-entrepreneur.jpg"
            alt="Successful entrepreneur"
            class="absolute inset-0 w-full h-full object-cover
                   object-[50%_30%]
                   sm:object-[60%_40%]
                   md:object-[75%_50%]
                   lg:object-[85%_50%]
                   xl:object-right"
        />

        <!-- Subtle Gradient Overlay -->
        <div class="absolute inset-0
                    bg-gradient-to-r
                    from-black/40 via-transparent to-transparent">
        </div>

        <!-- Minimal Hero Content -->
        <div class="relative z-10 h-full flex items-center">
            <div class="w-full max-w-7xl mx-auto px-6 sm:px-8 lg:px-16">
                <div class="text-center sm:text-left lg:w-1/2 space-y-6">

                    <!-- Simple Headline -->
                    <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-white leading-tight">
                        Your $100K business.
                        <span class="block text-cnb-secondary">5 days away.</span>
                    </h1>

                    <!-- Single CTA -->
                    <div class="flex justify-center sm:justify-start">
                        <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>"
                           target="_blank"
                           rel="noopener"
                           class="inline-block bg-white text-cnb-primary px-10 py-5 rounded-full
                                  font-bold text-xl shadow-xl
                                  hover:bg-cnb-secondary hover:text-white hover:scale-105
                                  transform transition-all duration-300">
                            Start your business →
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>