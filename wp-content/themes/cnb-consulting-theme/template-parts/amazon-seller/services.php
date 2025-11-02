<?php
/**
 * Amazon Seller Service - Services Overview Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

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
                        Amazon launch blueprint
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950 leading-tight">
                        All the filings, documents, and onboarding assets Amazon asks for—handled by us.
                    </h2>
                    <p class="text-lg text-slate-600 md:text-xl">
                        Our specialists coordinate formation, tax registrations, brand registry, product prep, and logistics so you can focus on merchandise and marketing. Every deliverable arrives in a single, trackable checklist.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-cnb-secondary">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M3 3h7v7H3z"></path>
                                    <path d="M14 3h7v7h-7z"></path>
                                    <path d="M14 14h7v7h-7z"></path>
                                    <path d="M3 14h7v7H3z"></path>
                                </svg>
                            </span>
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold text-slate-900">Marketplace evidence packs</h3>
                                <p class="text-sm text-slate-600">Utility statements, bank letters, trademark references, and compliance narratives assembled for Seller Central.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-primary/10 text-cnb-primary">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 5v14"></path>
                                    <path d="M5 12h14"></path>
                                </svg>
                            </span>
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold text-slate-900">FBA inventory readiness</h3>
                                <p class="text-sm text-slate-600">SKU mapping, labeling standards, and freight partner introductions to keep your first shipment compliant.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-slate-900 text-white">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold text-slate-900">Compliance guardrails</h3>
                                <p class="text-sm text-slate-600">BOI filing, sales tax registration, and reseller permits delivered with automated reminders.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-cnb-secondary">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 8v8"></path>
                                    <path d="M8 12h8"></path>
                                    <circle cx="12" cy="12" r="10"></circle>
                                </svg>
                            </span>
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold text-slate-900">Launch analytics coaching</h3>
                                <p class="text-sm text-slate-600">Profit calculator, reorder triggers, and ad campaign starter guides aligned to your catalog.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="space-y-8">
                <div class="rounded-[32px] border border-slate-200 bg-white p-8 shadow-[0_36px_100px_-60px_rgba(15,23,42,0.45)]" x-data="{
                    profiles: [
                        {
                            title: '<?php echo esc_js(__('Private label founders', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Brand registry assets, QC workflows, and account health coaching designed for new product launches.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('Wholesale & arbitrage sellers', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Sales tax nexus mapping, resale certificates, and compliance playbooks keep your listings active.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('Global entrepreneurs', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Cross-border entity setup, ITIN/EIN coordination, and logistics support for shipping into the U.S.', 'cnb-consulting-theme')); ?>'
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
                        <p class="text-sm uppercase tracking-[0.3em] text-cnb-primary"><?php echo esc_html__('Tailored launch journeys', 'cnb-consulting-theme'); ?></p>
                        <p class="text-base leading-relaxed text-slate-600" x-text="profiles[active].body"></p>
                    </div>
                </div>

                <div class="rounded-[32px] border border-blue-100 bg-gradient-to-br from-white via-white to-blue-50 p-8 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cnb-secondary/20 text-3xl">📂</div>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900"><?php echo esc_html__('Your Amazon launch kit', 'cnb-consulting-theme'); ?></h3>
                                <p class="text-sm text-slate-600"><?php echo esc_html__('Delivered in a single dashboard with status tracking and due dates.', 'cnb-consulting-theme'); ?></p>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-700">
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Verified LLC, EIN, seller permits, and tax IDs for every nexus state', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Seller Central approval dossier with supporting documentation', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('FBA/FBM fulfillment SOPs, prep guides, and partner introductions', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Quarterly compliance reminders and growth roadmap checkpoints', 'cnb-consulting-theme'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>