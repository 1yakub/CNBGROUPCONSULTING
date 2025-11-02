<?php
/**
 * Tax Filing Service - Services Overview Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section id="tax-filing-overview" class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-16 left-12 h-60 w-60 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-blue-100/40 blur-[180px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)] lg:items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                        Comprehensive coverage
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950 leading-tight">
                        Every tax filing your company and household need, coordinated in one place.
                    </h2>
                    <p class="text-lg text-slate-600 md:text-xl">
                        Personal, partnership, corporate, trust, and multi-state returns prepared together so your numbers reconcile across entities, investors, and payroll. We handle quarterly work, year-end filings, and IRS communications under one engagement.
                    </p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <?php
                    $advantages = array(
                        array(
                            'title' => __('Personal + business synchronization', 'cnb-consulting-theme'),
                            'description' => __('Single team for 1040, 1065, 1120-S, 1099, and state filings with integrated bookkeeping support.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'title' => __('Real-time advisory access', 'cnb-consulting-theme'),
                            'description' => __('Dedicated Slack channel, quarterly strategy calls, and on-demand scenario modeling for founders.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'title' => __('Global compliance ready', 'cnb-consulting-theme'),
                            'description' => __('Cross-border structuring, treaty analysis, and FBAR/FATCA reporting for international teams.', 'cnb-consulting-theme'),
                        ),
                        array(
                            'title' => __('Books-to-return accuracy', 'cnb-consulting-theme'),
                            'description' => __('We reconcile ledgers, payroll, and inventory systems to ensure every filing is audit-ready.', 'cnb-consulting-theme'),
                        ),
                    );
                    ?>

                    <?php foreach ($advantages as $advantage) : ?>
                        <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                            <div class="flex items-start gap-4">
                                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-cnb-secondary">
                                    <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>
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
                            title: '<?php echo esc_js(__('Founders & owners', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Multi-entity entrepreneurs receive coordinated K-1s, payroll, and quarterly estimate support matched to their cash flow.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('Remote professionals', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('Digital nomads and contractors get state nexus analysis, deductions, and treaty guidance for cross-border income.', 'cnb-consulting-theme')); ?>'
                        },
                        {
                            title: '<?php echo esc_js(__('Investors & crypto traders', 'cnb-consulting-theme')); ?>',
                            body: '<?php echo esc_js(__('We reconcile exchanges, custodians, and LP statements to deliver accurate capital gains and passive activity filings.', 'cnb-consulting-theme')); ?>'
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
                        <p class="text-sm uppercase tracking-[0.3em] text-cnb-primary"><?php echo esc_html__('Tailored filing experience', 'cnb-consulting-theme'); ?></p>
                        <p class="text-base leading-relaxed text-slate-600" x-text="profiles[active].body"></p>
                    </div>
                </div>

                <div class="rounded-[32px] border border-blue-100 bg-gradient-to-br from-white via-white to-blue-50 p-8 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cnb-secondary/20 text-3xl">📂</div>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900"><?php echo esc_html__('Ready-to-file checklist', 'cnb-consulting-theme'); ?></h3>
                                <p class="text-sm text-slate-600"><?php echo esc_html__('Gather these documents once—our team handles every schedule, reconciliation, and filing.', 'cnb-consulting-theme'); ?></p>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-700">
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Financial statements or bookkeeping export (12 months)', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Prior-year returns and IRS/state correspondence', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Payroll, contractor, and 1099 summaries', 'cnb-consulting-theme'); ?>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    <?php echo esc_html__('Investor statements, crypto exports, or brokerage reports', 'cnb-consulting-theme'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>