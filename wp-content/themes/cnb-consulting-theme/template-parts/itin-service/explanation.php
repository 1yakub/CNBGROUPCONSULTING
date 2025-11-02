<?php
/**
 * ITIN Service Explanation Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-10 left-10 h-60 w-60 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-0 h-80 w-80 rounded-full bg-blue-100/40 blur-[180px]"></div>
        <div class="absolute inset-y-0 left-1/2 hidden w-px -translate-x-1/2 bg-gradient-to-b from-transparent via-slate-200 to-transparent lg:block"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-16 lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)] lg:items-center">
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                        Why an ITIN matters
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950 leading-tight">
                        Unlock U.S. banking, investing, and compliance with a verified ITIN.
                    </h2>
                    <p class="text-lg text-slate-600 md:text-xl">
                        An Individual Taxpayer Identification Number is the IRS identifier non-U.S. citizens use to file taxes, open financial accounts, and build a U.S. footprint. We make the paperwork simple and compliant.
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
                                <h3 class="text-lg font-semibold text-slate-900">Operate in the U.S. legally</h3>
                                <p class="text-sm text-slate-600">File federal taxes, invest, and access credit-building opportunities without a Social Security Number.</p>
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
                                <h3 class="text-lg font-semibold text-slate-900">Open bank & payment accounts</h3>
                                <p class="text-sm text-slate-600">Use your ITIN to activate Stripe, PayPal, merchant processors, and U.S. bank accounts.</p>
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
                                <h3 class="text-lg font-semibold text-slate-900">Protect personal identity</h3>
                                <p class="text-sm text-slate-600">Keep your foreign passport and personal details secure—no need to mail originals to the IRS.</p>
                            </div>
                        </div>
                    </article>

                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-[0_24px_60px_-40px_rgba(15,23,42,0.35)]">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-cnb-secondary/15 text-cnb-secondary">
                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 6v6l3 3"></path>
                                </svg>
                            </span>
                            <div class="space-y-1">
                                <h3 class="text-lg font-semibold text-slate-900">Plan for residency or investment</h3>
                                <p class="text-sm text-slate-600">Establish credit history, purchase property, and support immigration applications with compliant records.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="space-y-8">
                <div class="rounded-[32px] border border-slate-200 bg-white p-8 shadow-[0_36px_100px_-60px_rgba(15,23,42,0.45)]" x-data="{
                    highlights: [
                        { title: 'Entrepreneurs & investors', body: 'Set up U.S. LLCs, open business bank accounts, and report taxes without needing a Social Security Number.' },
                        { title: 'Families & dependents', body: 'Claim eligible tax credits, include spouses on joint returns, and send children to U.S. schools with compliant records.' },
                        { title: 'Remote professionals', body: 'Support U.S. freelance income, marketplace payouts, and IRS compliance while living abroad.' }
                    ],
                    active: 0
                }" x-init="setInterval(() => { active = (active + 1) % highlights.length }, 5000)">
                    <div class="flex flex-wrap gap-3">
                        <template x-for="(item, index) in highlights" :key="index">
                            <button type="button" class="rounded-full border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-500 transition hover:border-cnb-primary hover:text-cnb-primary" :class="{ 'bg-cnb-primary text-white border-cnb-primary shadow-sm': active === index }" @mouseenter="active = index" @focus="active = index">
                                <span x-text="item.title"></span>
                            </button>
                        </template>
                    </div>
                    <div class="mt-6 space-y-2">
                        <p class="text-sm uppercase tracking-[0.3em] text-cnb-primary">Tailored launch paths</p>
                        <p class="text-base leading-relaxed text-slate-600" x-text="highlights[active].body"></p>
                    </div>
                </div>

                <div class="rounded-[32px] border border-blue-100 bg-gradient-to-br from-white via-white to-blue-50 p-8 shadow-sm">
                    <div class="flex items-start gap-4">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-cnb-secondary/20 text-3xl">📂</div>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900">Ready-to-file checklist</h3>
                                <p class="text-sm text-slate-600">Gather these once—we complete every form and submission.</p>
                            </div>
                            <ul class="space-y-3 text-sm text-slate-700">
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    Passport or two IRS-approved identity documents
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    Signed federal tax return (Form 1040) or exception documentation
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    Proof of tax purpose (bank letter, employer request, mortgage, etc.)
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="mt-1 text-cnb-primary">•</span>
                                    Dependent or spouse evidence if applying for family members
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>