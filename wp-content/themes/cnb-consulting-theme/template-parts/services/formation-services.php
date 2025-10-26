<?php
$services = array(
    array(
        'title' => 'Business Incorporation',
        'slug' => 'business-incorporation',
        'description' => 'Launch your LLC or corporation with a guided compliance roadmap and ready-to-file documents.',
        'category' => 'Formation',
        'image' => 'business-incorporation.jpg',
        'secondary_image' => 'tax-preparation.jpg',
        'link' => home_url('/services/company-formation/'),
        'features' => array(
            'Entity selection strategy and name availability checks',
            'Articles drafted, filed, and tracked in every state',
            'Operating agreements and post-launch compliance checklist'
        )
    ),
    array(
        'title' => 'EIN Service',
        'slug' => 'ein-service',
        'description' => 'Secure your federal EIN in hours with IRS-certified experts handling the full process.',
        'category' => 'Compliance',
        'image' => 'ein-service.jpg',
        'secondary_image' => 'business-incorporation.jpg',
        'link' => home_url('/services/ein-service/'),
        'features' => array(
            'Same-day IRS submission with status tracking',
            'IRS correspondence managed on your behalf',
            'Digital EIN confirmation delivered securely'
        )
    ),
    array(
        'title' => 'ITIN Service',
        'slug' => 'itin-service',
        'description' => 'Receive your Individual Taxpayer Identification Number with guided document preparation.',
        'category' => 'Compliance',
        'image' => 'itin-service.jpg',
        'secondary_image' => 'resale-certificate.jpg',
        'link' => home_url('/services/itin-service/'),
        'features' => array(
            'Document review and notarized certification support',
            'Submission prepared to IRS standards',
            'Status updates and renewal reminders'
        )
    ),
    array(
        'title' => 'Tax Preparation',
        'slug' => 'tax-preparation',
        'description' => 'Accurate, compliant U.S. tax filings with year-round advisory support.',
        'category' => 'Tax & Accounting',
        'image' => 'tax-preparation.jpg',
        'secondary_image' => 'ein-service.jpg',
        'link' => home_url('/tax-filing/'),
        'features' => array(
            'Dedicated CPA review and dual-check accuracy system',
            'Federal, state, and franchise filings handled for you',
            'Quarterly planning and estimated tax reminders'
        )
    ),
    array(
        'title' => 'Amazon Seller Setup',
        'slug' => 'amazon-seller',
        'description' => 'Get marketplace approval with curated evidence packs and business documentation.',
        'category' => 'Marketplace',
        'image' => 'amazon-seller.jpg',
        'secondary_image' => 'walmart-seller.jpg',
        'link' => home_url('/services/amazon-seller/'),
        'features' => array(
            'Seller Central application and compliance guidance',
            'Utility bill and bank letter templates prepared',
            'Verification rehearsals to avoid account holds'
        )
    ),
    array(
        'title' => 'Walmart Seller Setup',
        'slug' => 'walmart-seller',
        'description' => 'Launch on Walmart with complete documentation and onboarding concierge.',
        'category' => 'Marketplace',
        'image' => 'walmart-seller.jpg',
        'secondary_image' => 'business-incorporation.jpg',
        'link' => home_url('/services/walmart-seller/'),
        'features' => array(
            'Application preparation and readiness review',
            'Operational checklist for first 90 days',
            'API, shipping, and tax nexus guidance'
        )
    ),
    array(
        'title' => 'U.S. Resale Certificate',
        'slug' => 'resale-certificate',
        'description' => 'Acquire your resale certificate fast with multi-state expertise and compliance support.',
        'category' => 'Compliance',
        'image' => 'resale-certificate.jpg',
        'secondary_image' => 'tax-preparation.jpg',
        'link' => home_url('/resale-certificate/'),
        'features' => array(
            'Sales tax nexus evaluation and state guidance',
            'Certificate applications filed and tracked',
            'Annual renewals and compliance reminders'
        )
    )
);

$categories = array_unique(array_map(function ($service) {
    return $service['category'];
}, $services));
sort($categories);
array_unshift($categories, 'All');

$book_call_link = function_exists('cnb_get_cta_link') ? cnb_get_cta_link('consultation') : home_url('/contact/');
?>

<section id="services" class="relative bg-slate-950 py-24 text-white" x-data="{ activeCategory: 'All' }">
    <div class="absolute inset-0">
        <div class="absolute -top-16 left-1/2 h-72 w-72 -translate-x-1/2 rounded-full bg-cnb-secondary/25 blur-[150px]"></div>
        <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-cnb-primary/20 blur-[160px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-10 lg:flex-row lg:items-end lg:justify-between">
            <div class="space-y-4">
                <p class="text-sm uppercase tracking-[0.35em] text-white/60">Our expertise</p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold">Services built for every stage of growth</h2>
                <p class="text-white/70 max-w-3xl">
                    Choose the support you need and we align filings, compliance, and approvals with clear playbooks, dedicated specialists, and rapid execution.
                </p>
            </div>

            <div class="flex flex-wrap gap-3">
                <?php foreach ($categories as $category) : ?>
                    <button type="button"
                        @click="activeCategory = '<?php echo esc_js($category); ?>'"
                        class="rounded-full border border-white/15 px-5 py-2 text-sm font-semibold transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-secondary/80"
                        :class="activeCategory === '<?php echo esc_js($category); ?>' ? 'bg-white text-slate-900 shadow-[0_20px_45px_-35px_rgba(226,232,240,0.85)]' : 'bg-white/5 text-white/70 hover:bg-white/10'">
                        <?php echo esc_html($category); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($services as $service) : ?>
                <article x-show="activeCategory === 'All' || activeCategory === '<?php echo esc_js($service['category']); ?>'"
                    x-transition.opacity.duration.400ms
                    x-transition.scale.duration.400ms
                    x-cloak
                    class="group relative flex h-full flex-col overflow-hidden rounded-3xl border border-white/10 bg-white/5 backdrop-blur-sm transition-all duration-300 hover:-translate-y-2 hover:border-white/20 hover:bg-white/10">

                    <div class="relative overflow-hidden">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/<?php echo esc_attr($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>" class="h-52 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
                        <div class="absolute top-4 left-4 inline-flex items-center gap-2 rounded-full bg-white/10 px-4 py-1 text-xs font-semibold uppercase tracking-[0.3em] text-white/70">
                            <?php echo esc_html($service['category']); ?>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col gap-6 p-8">
                        <div class="space-y-2">
                            <h3 class="text-2xl font-semibold text-white">
                                <?php echo esc_html($service['title']); ?>
                            </h3>
                            <p class="text-sm text-white/65">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                        </div>

                        <ul class="space-y-3 text-sm text-white/70">
                            <?php foreach ($service['features'] as $feature) : ?>
                                <li class="flex items-start gap-2">
                                    <span class="mt-1 flex h-5 w-5 items-center justify-center rounded-full bg-cnb-secondary/25 text-cnb-secondary">
                                        <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <path d="M20 6L9 17l-5-5"></path>
                                        </svg>
                                    </span>
                                    <span><?php echo esc_html($feature); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="mt-auto flex flex-wrap gap-3">
                            <a href="<?php echo esc_url($book_call_link); ?>" target="_blank" rel="noopener"
                                class="inline-flex flex-1 items-center justify-center rounded-full bg-cnb-secondary px-6 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-cnb-secondary/40 transition hover:bg-cnb-secondary/90 hover:shadow-xl hover:shadow-cnb-secondary/30">
                                Book a call
                            </a>
                            <a href="<?php echo esc_url($service['link']); ?>"
                                class="inline-flex items-center justify-center gap-2 rounded-full border border-white/20 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/40 hover:bg-white/10">
                                Learn more
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

