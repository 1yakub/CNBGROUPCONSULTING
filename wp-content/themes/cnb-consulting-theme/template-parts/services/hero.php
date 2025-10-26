<!-- Services Hero -->
<section class="relative overflow-hidden bg-slate-950 text-white py-20 lg:py-28">
    <div class="absolute inset-0">
        <div class="absolute -top-32 -left-24 h-72 w-72 rounded-full bg-cnb-secondary/25 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 h-96 w-96 rounded-full bg-cnb-primary/30 blur-3xl"></div>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(255,255,255,0.08),_transparent_65%)]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-16 lg:grid-cols-[minmax(0,1.1fr)_minmax(0,0.9fr)]">
            <div class="space-y-8">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/5 px-5 py-2 text-xs font-semibold uppercase tracking-[0.35em] text-white/70">
                    <svg class="h-4 w-4 text-cnb-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M4 4h16v7.5a4.5 4.5 0 01-4.5 4.5H8.5A4.5 4.5 0 014 11.5V4z"></path>
                        <path d="M8 22h8"></path>
                        <path d="M10 18h4"></path>
                    </svg>
                    Services
                </span>

                <div class="space-y-4">
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-semibold leading-tight">
                        Strategic services to launch, scale, and protect your business.
                    </h1>
                    <p class="text-lg md:text-xl text-white/70 max-w-2xl">
                        Partner with our IRS-certified specialists for formation, compliance, marketplace approvals, and tax solutions that keep you moving forward.
                    </p>
                </div>

                <ul class="grid gap-4 sm:grid-cols-2" role="list">
                    <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M8 6h13"></path>
                                <path d="M8 12h13"></path>
                                <path d="M8 18h13"></path>
                                <path d="M3 6h.01"></path>
                                <path d="M3 12h.01"></path>
                                <path d="M3 18h.01"></path>
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Full-service compliance</p>
                            <p class="text-sm text-white/60">Registered agents, BOI, EIN, and annual filings handled for you.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 8v8"></path>
                                <path d="M8 12h8"></path>
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Expert-led formation</p>
                            <p class="text-sm text-white/60">Entity structure guidance, filings, and IRS correspondence.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 5h12"></path>
                                <path d="M9 3v2"></path>
                                <path d="M19 10h1"></path>
                                <path d="M19 14h1"></path>
                                <path d="M10 12h4"></path>
                                <rect x="3" y="7" width="12" height="14" rx="2"></rect>
                                <path d="M17 7h4v14h-4"></path>
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">Marketplace approvals</p>
                            <p class="text-sm text-white/60">Amazon, Walmart, and ecommerce registrations done correctly.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 bg-white/5 rounded-2xl p-4 backdrop-blur">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-cnb-secondary/20 text-cnb-secondary">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 3v18h18"></path>
                                <path d="M7 14l4 4 6-6"></path>
                            </svg>
                        </span>
                        <div>
                            <p class="font-semibold">File-ready deliverables</p>
                            <p class="text-sm text-white/60">Digital documents, reminders, and proactive status updates.</p>
                        </div>
                    </li>
                </ul>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url(cnb_get_cta_link('consultation')); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center rounded-full bg-cnb-secondary px-8 py-4 text-base font-semibold text-slate-950 shadow-lg shadow-cnb-secondary/40 transition hover:bg-cnb-secondary/90 hover:shadow-xl hover:shadow-cnb-secondary/30">
                        Book a call
                    </a>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="inline-flex items-center justify-center rounded-full border border-white/20 bg-white/5 px-8 py-4 text-base font-semibold text-white transition hover:bg-white/10">
                        Learn more
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-10 -left-6 hidden h-28 w-28 rounded-full bg-cnb-secondary/25 blur-2xl lg:block"></div>
                <div class="absolute -bottom-8 -right-10 hidden h-40 w-40 rounded-full bg-cnb-primary/25 blur-3xl lg:block"></div>

                <div class="relative mx-auto w-full max-w-md">
                    <div class="relative rounded-3xl bg-white/5 p-4 backdrop-blur shadow-[0_30px_70px_-30px_rgba(15,23,42,0.8)]">
                        <div class="grid gap-4">
                            <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/business-incorporation.jpg" alt="Business formation team" class="h-56 w-full object-cover" loading="lazy">
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/ein-service.jpg" alt="EIN service preparation" class="h-32 w-full object-cover" loading="lazy">
                                </div>
                                <div class="overflow-hidden rounded-2xl ring-1 ring-white/10">
                                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/walmart-seller.jpg" alt="Marketplace approval support" class="h-32 w-full object-cover" loading="lazy">
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 left-1/2 hidden w-64 -translate-x-1/2 rounded-3xl border border-white/10 bg-slate-900/80 p-4 shadow-lg shadow-black/20 backdrop-blur lg:block" x-data="{ active: 0, highlights: ['Same-day EIN delivery', 'Dedicated compliance specialists', 'Marketplace-ready documentation'] }" x-init="setInterval(() => { active = (active + 1) % highlights.length }, 4000)">
                            <div class="flex items-center gap-3">
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