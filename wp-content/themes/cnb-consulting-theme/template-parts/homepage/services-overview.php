<?php
/**
 * Services Overview - Tony Robbins Style
 *
 * @package CNB_Consulting_Theme
 */

$services = cnb_get_placeholder_services();
?>

<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-full">

        <!-- Header -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">
                Services that transform
            </h2>
            <div class="flex items-center gap-4 mt-4">
                <p class="text-lg text-gray-600">Start your business journey</p>
                <a href="<?php echo esc_url(home_url('/services/')); ?>"
                   class="inline-flex items-center text-cnb-primary hover:text-blue-700 font-semibold transition">
                    Discover all services
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Desktop: Horizontal Scroll -->
        <div class="hidden lg:block overflow-x-auto scrollbar-hide">
            <div class="flex gap-6 px-8 pb-4" style="width: max-content;">
                <?php foreach ($services as $index => $service) : ?>
                    <div class="service-card relative rounded-xl overflow-hidden bg-gray-900 shadow-2xl hover:shadow-2xl transition-all duration-300 hover:scale-105"
                         style="width: 380px; height: 500px;">

                        <!-- Service Image -->
                        <div class="relative h-56 overflow-hidden">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services/<?php echo esc_attr($service['image']); ?>"
                                 alt="<?php echo esc_attr($service['title']); ?>"
                                 loading="lazy"
                                 class="w-full h-full object-cover">

                            <!-- Dark Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>
                        </div>

                        <!-- Service Content -->
                        <div class="p-8 text-center">
                            <h3 class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                            <p class="text-gray-300 mb-8 text-lg">
                                <?php echo esc_html($service['description']); ?>
                            </p>

                            <!-- CTA Button -->
                            <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>"
                               target="_blank"
                               rel="noopener"
                               class="inline-block w-full bg-cnb-secondary text-gray-900 py-4 px-6 rounded-full font-bold text-lg hover:bg-yellow-400 transform hover:scale-105 transition-all duration-300">
                                Book Your Call →
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Mobile: Swiper Carousel -->
        <div class="lg:hidden px-4" x-data="{ currentIndex: 0, totalSlides: <?php echo count($services); ?> }">
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-300 ease-in-out"
                     :style="`transform: translateX(-${currentIndex * 100}%)`">
                    <?php foreach ($services as $index => $service) : ?>
                        <div class="w-full flex-shrink-0 px-2">
                            <div class="service-card relative rounded-xl overflow-hidden bg-gray-900 shadow-2xl" style="min-height: 450px;">

                                <!-- Service Image -->
                                <div class="relative h-64 overflow-hidden">
                                    <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services/<?php echo esc_attr($service['image']); ?>"
                                         alt="<?php echo esc_attr($service['title']); ?>"
                                         loading="lazy"
                                         class="w-full h-full object-cover">

                                    <!-- Dark Overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/50 to-transparent"></div>

                                    <!-- Video Play Button (decorative) -->
                                    <div class="absolute top-3 left-3 bg-gray-900/70 text-white px-3 py-1 rounded text-sm font-semibold">
                                        1:00
                                    </div>
                                </div>

                                <!-- Service Content -->
                                <div class="p-8 text-center flex flex-col justify-between" style="min-height: 200px;">
                                    <div>
                                        <h3 class="text-2xl font-bold text-white mb-3 uppercase tracking-wide">
                                            <?php echo esc_html($service['title']); ?>
                                        </h3>
                                        <p class="text-gray-300 mb-6 text-base">
                                            <?php echo esc_html($service['description']); ?>
                                        </p>
                                    </div>

                                    <!-- CTA Button -->
                                    <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>"
                                       target="_blank"
                                       rel="noopener"
                                       class="inline-block w-full bg-cnb-secondary text-gray-900 py-4 px-6 rounded-full font-bold text-base hover:bg-yellow-400 transform hover:scale-105 transition-all duration-300">
                                        Book Your Call →
                                    </a>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Mobile Navigation Dots -->
            <div class="flex justify-center gap-2 mt-6">
                <?php foreach ($services as $index => $service) : ?>
                    <button @click="currentIndex = <?php echo $index; ?>"
                            :class="currentIndex === <?php echo $index; ?> ? 'bg-cnb-primary' : 'bg-gray-300'"
                            aria-label="Go to slide <?php echo $index + 1; ?>"
                            class="w-2 h-2 rounded-full transition-all duration-300"></button>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Swipe Navigation -->
            <div class="flex justify-between mt-6 px-4">
                <button @click="currentIndex = Math.max(0, currentIndex - 1)"
                        :disabled="currentIndex === 0"
                        aria-label="Previous service"
                        class="p-3 rounded-full bg-gray-100 hover:bg-gray-200 disabled:opacity-50 disabled:cursor-not-allowed transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <button @click="currentIndex = Math.min(totalSlides - 1, currentIndex + 1)"
                        :disabled="currentIndex === totalSlides - 1"
                        aria-label="Next service"
                        class="p-3 rounded-full bg-gray-100 hover:bg-gray-200 disabled:opacity-50 disabled:cursor-not-allowed transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>