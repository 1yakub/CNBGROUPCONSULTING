<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-12 left-8 h-60 w-60 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-blue-100/40 blur-[180px]"></div>
        <div class="absolute inset-y-0 left-1/2 hidden w-px -translate-x-1/2 bg-gradient-to-b from-transparent via-slate-200 to-transparent lg:block"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)] lg:items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                        Walmart launch blueprint
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950 leading-tight">
                        All the approvals, documents, and logistics Walmart requires—delivered in one workflow.
                    </h2>
                    <p class="text-lg text-slate-600 md:text-xl">
                        We translate Walmart’s marketplace standards into a guided project: from business verification and content to WFS activation and tax automation. Every deliverable lives inside your status dashboard.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <?php
                    $advantages = array(
                        array(
                            'icon' => '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3h7v7H3z"></path><path d="M14 3h7v7h-7z"></path><path d="M14 14h7v7h-7z"></path><path d="M3 14h7v7H3z"></path></svg>',
                            'title' => __('Verification dossier creation', 'cnb-consulting-theme'),
                            'description' => __('Utility statements, business bank letters, and marketplace questionnaires prepared for seller approval.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'icon' => '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 5v14"></path><path d="M5 12h14"></path></svg>',
                            'title' => __('Catalog & listing build-outs', 'cnb-consulting-theme'),
                            'description' => __('SEO-rich titles, content guidelines, and asset templates aligned with Walmart merchandising policies.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'icon' => '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 6L9 17l-5-5"></path></svg>',
                            'title' => __('Compliance automation', 'cnb-consulting-theme'),
                            'description' => __('BOI filing, resale certificates, and sales tax automation triggered for each nexus state.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'icon' => '<svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 6h13"></path><path d="M8 12h13"></path><path d="M8 18h13"></path><path d="M3 6h.01"></path><path d="M3 12h.01"></path><path d="M3 18h.01"></path></svg>',
                            'title' => __('WFS logistics onboarding', 'cnb-consulting-theme'),
                            'description' => __('2-day shipping, prep partners, and reorder triggers configured for your catalog volume.', 'cnb-consulting-theme'),
                        ),
                    );
                    ?>

                    <?php foreach ($advantages as $advantage) : ?>
                        <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                            <div class="flex items-start gap-4">
                                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-cnb-secondary"><?php echo $advantage['icon']; ?></span>
                                <div class="space-y-1">
                                    <h3 class="text-lg font-semibold text-slate-900"><?php echo esc_html($advantage['title']); ?></h3>
                                    <p class="text-sm text-slate-600"><?php echo esc_html($advantage['description']); ?></p>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="space-y-8">
                <div class="rounded-[32px] border border-slate-200 bg-white p-8 shadow-[0_36px_100px_-60px_rgba(15,23,42,0.45)]" x-data="{
                    profiles: [
                        {
                            title: '<?php echo esc_js(__('Established Amazon brands', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('We prepare cross-listing strategies, catalog mapping, and repricing rules tailored to Walmart’s marketplace.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('Direct-to-consumer founders', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Support for first-time marketplace sellers including product compliance checks and customer care SOPs.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('International sellers', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Entity setup, ITIN/EIN coordination, and logistics pathways to distribute from abroad into the U.S.', 'cnb-consulting-theme')); ?>'
                        }
                    ],
                    active: 0
                }" x-init="setInterval(() => { active = (active + 1) % profiles.length }, 5200)">
                    <div class="flex flex-wrap gap-3">
                        <template x-for="(profile, index) in profiles" :key="index">
                            <button type="button" class="rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-500 transition hover:border-cnb-primary hover:text-cnb-primary" :class="{ 'bg-cnb-primary text-white border-cnb-primary shadow-sm': active === index }" @mouseenter="active = index" @focus="active = index">
                                <span x-text="profile.title"></span>
                            </button>
                        </template>
                    </div>
                    <div class="mt-6 space-y-2">
                        <p class="text-sm uppercase tracking-[0.3em] text-cnb-primary"><?php echo esc_html__('Tailored marketplace paths', 'cnb-consulting-theme'); ?></p>
                        <p class="text-base leading-relaxed text-slate-600" x-text="profiles[active].body"></p>
                    </div>
                </div>

                <div class="rounded-[32px] border border-blue-100 bg-gradient-to-br from-white via-white to-blue-50 p-8 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cnb-secondary/20 text-3xl">📂</div>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900"><?php echo esc_html__('Your Walmart launch kit', 'cnb-consulting-theme'); ?></h3>
                                <p class="text-sm text-slate-600"><?php echo esc_html__('Delivered with due dates, ownership, and documentation stored in one portal.', 'cnb-consulting-theme'); ?></p>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-700">
                                <li class="flex items-start gap-3"><span class="mt-1 text-cnb-primary">•</span><?php echo esc_html__('Verified seller account, WFS onboarding, and catalog import checklist', 'cnb-consulting-theme'); ?></li>
                                <li class="flex items-start gap-3"><span class="mt-1 text-cnb-primary">•</span><?php echo esc_html__('Tax automation, compliance calendar, and registered agent details', 'cnb-consulting-theme'); ?></li>
                                <li class="flex items-start gap-3"><span class="mt-1 text-cnb-primary">•</span><?php echo esc_html__('Launch analytics dashboard with KPI tracking and restock triggers', 'cnb-consulting-theme'); ?></li>
                                <li class="flex items-start gap-3"><span class="mt-1 text-cnb-primary">•</span><?php echo esc_html__('Advertising starter plan and buy box optimization guidelines', 'cnb-consulting-theme'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>