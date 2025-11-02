<!-- Resale Certificate Hero -->
<section class="relative overflow-hidden bg-slate-950 text-white py-20 lg:py-28">
    <div class="absolute inset-0">
        <div class="absolute -top-32 -left-24 h-72 w-72 rounded-full bg-cnb-secondary/25 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-cnb-primary/25 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(148,163,184,0.15),_transparent_65%)]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)]">
            <div class="space-y-10">
                <?php include get_template_directory() . '/template-parts/resale-certificate/hero-components/hero-content.php'; ?>
            </div>

            <div class="relative" aria-hidden="true">
                <div class="absolute -top-8 -left-10 hidden h-24 w-24 rounded-full bg-cnb-secondary/20 blur-2xl lg:block"></div>
                <div class="absolute -bottom-10 -right-10 hidden h-40 w-40 rounded-full bg-cnb-primary/25 blur-3xl lg:block"></div>

                <div class="relative mx-auto w-full max-w-md">
                    <div class="relative rounded-3xl bg-white/5 p-4 backdrop-blur shadow-[0_32px_90px_-45px_rgba(15,23,42,0.85)]">
                        <div class="grid gap-4">
                            <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/resale-certificate.jpg" alt="Team reviewing resale certificate application" class="h-56 w-full object-cover" loading="lazy" />
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/tax-preparation.jpg" alt="Compliance specialist verifying tax documents" class="h-32 w-full object-cover" loading="lazy" />
                                </div>
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/business-incorporation.jpg" alt="Entity formation paperwork" class="h-32 w-full object-cover" loading="lazy" />
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 left-1/2 hidden w-72 -translate-x-1/2 rounded-3xl border border-white/10 bg-slate-900/85 p-5 shadow-lg shadow-black/30 backdrop-blur lg:block" x-data="{ highlights: ['Multi-state resale certificates delivered with compliance calendar', 'Sales tax automation and exemption forms tailored to your vendors', 'Inventory, wholesale, and dropship workflows ready for tax-exempt buying'], active: 0 }" x-init="setInterval(() => { active = (active + 1) % highlights.length }, 4200)">
                            <div class="flex items-start gap-3">
                                <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>
                                <p class="text-sm font-semibold text-white" x-text="highlights[active]"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>