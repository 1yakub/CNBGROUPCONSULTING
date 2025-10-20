<?php
/**
 * Services Overview - Tony Robbins Style
 *
 * @package CNB_Consulting_Theme
 */

$services = cnb_get_placeholder_services();
?>

<section class="py-16 lg:py-20 bg-slate-950">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->
        <div class="flex flex-col gap-3 text-white mb-10">
            <p class="text-sm uppercase tracking-[0.35em] text-white/50">What we do</p>
            <h2 class="text-4xl md:text-5xl font-bold">Services that transform</h2>
            <p class="text-lg text-white/70">Launch-ready systems, tailored to your next revenue milestone.</p>
        </div>

        <!-- Scrollable services -->
        <div class="-mx-4 px-4">
            <div class="flex gap-4 sm:gap-6 overflow-x-auto touch-pan-x snap-x snap-mandatory pb-6 scroll-smooth">
                <?php foreach ($services as $service) : ?>
                    <article class="snap-center min-w-[260px] sm:min-w-[320px] lg:min-w-[340px] xl:min-w-[360px] bg-white/5 border border-white/10 rounded-3xl overflow-hidden backdrop-blur-sm shadow-[0_30px_60px_-40px_rgba(15,23,42,0.9)]">
                        <div class="relative h-56 sm:h-64">
                            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/services/<?php echo esc_attr($service['image']); ?>"
                                 alt="<?php echo esc_attr($service['title']); ?>"
                                 loading="lazy"
                                 class="w-full h-full object-cover" />
                        </div>

                        <div class="p-6 sm:p-8 space-y-4">
                            <h3 class="text-2xl font-semibold text-white">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                            <p class="text-white/70 leading-relaxed">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                            <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>"
                               target="_blank"
                               rel="noopener"
                               class="inline-flex items-center justify-center w-full rounded-full bg-cnb-secondary text-slate-950 font-semibold py-3 text-base hover:bg-cnb-secondary/90 transition">
                                Book your call
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-10">
            <a href="<?php echo esc_url(home_url('/services/')); ?>"
               class="inline-flex items-center gap-3 text-white/60 hover:text-white transition text-sm uppercase tracking-[0.2em]">
                View all services
                <span class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-white/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </span>
            </a>
        </div>

    </div>
</section>