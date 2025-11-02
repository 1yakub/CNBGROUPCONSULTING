<?php
/**
 * About Page Why Choose Us Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-12 left-1/3 h-64 w-64 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-slate-200 blur-[200px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-12 lg:grid-cols-[minmax(0,0.65fr)_minmax(0,1.35fr)] lg:items-start">
            <div class="space-y-6">
                <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                    Why CNB
                </span>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950 leading-tight">
                    Precision operations, proactive compliance, and white-glove guidance under one roof.
                </h2>
                <p class="text-base text-slate-600 md:text-lg">
                    We designed CNB Group Consulting to be more than a filing service. It is your end-to-end operator hub—combining strategic advisors, compliance analysts, and vetted partner network to support growth every quarter.
                </p>

                <div class="rounded-[28px] border border-slate-200 bg-white/90 p-6 shadow-[0_32px_80px_-55px_rgba(15,23,42,0.45)]">
                    <p class="text-xs uppercase tracking-[0.3em] text-slate-500 mb-2">Support system</p>
                    <p class="text-sm text-slate-600">Pod lead, compliance analyst, CPA, and partner success manager aligned to your operating calendar.</p>
                </div>
            </div>

            <div class="grid gap-6 md:grid-cols-2">
                <?php
                $advantages = array(
                    array(
                        'icon' => '🚀',
                        'title' => __('Launch velocity', 'cnb-consulting-theme'),
                        'copy' => __('24-48 hour filings, EIN, and banking setup sequenced to remove downtime.', 'cnb-consulting-theme')
                    ),
                    array(
                        'icon' => '🛡️',
                        'title' => __('Compliance assurance', 'cnb-consulting-theme'),
                        'copy' => __('Automated alerts, document vault, and renewal workflows prevent missed deadlines.', 'cnb-consulting-theme')
                    ),
                    array(
                        'icon' => '📞',
                        'title' => __('Direct operator access', 'cnb-consulting-theme'),
                        'copy' => __('Talk with the specialists doing the work—no ticketing queues or call centers.', 'cnb-consulting-theme')
                    ),
                    array(
                        'icon' => '🏆',
                        'title' => __('Proven KPIs', 'cnb-consulting-theme'),
                        'copy' => __('500+ launches with 99% compliance success and 4.9★ client satisfaction.', 'cnb-consulting-theme')
                    ),
                    array(
                        'icon' => '🌐',
                        'title' => __('Multi-state mastery', 'cnb-consulting-theme'),
                        'copy' => __('All 50 states, marketplace approval packs, foreign owner guidance, and cross-border support.', 'cnb-consulting-theme')
                    ),
                    array(
                        'icon' => '💼',
                        'title' => __('Full lifecycle services', 'cnb-consulting-theme'),
                        'copy' => __('Formation, bookkeeping, tax, marketplace, compliance, and exit readiness in one playbook.', 'cnb-consulting-theme')
                    ),
                );

                foreach ($advantages as $advantage) :
                ?>
                    <article class="rounded-[28px] border border-slate-200 bg-white p-6 shadow-[0_32px_80px_-55px_rgba(15,23,42,0.4)]">
                        <div class="text-4xl mb-4"><?php echo esc_html($advantage['icon']); ?></div>
                        <h3 class="text-lg font-semibold text-slate-900 mb-2"><?php echo esc_html($advantage['title']); ?></h3>
                        <p class="text-sm text-slate-600 leading-relaxed"><?php echo esc_html($advantage['copy']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>