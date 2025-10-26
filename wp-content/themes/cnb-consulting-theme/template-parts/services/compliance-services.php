<?php
$plays = array(
    'formation' => array(
        'title' => 'Launch & Formation Concierge',
        'description' => 'From entity strategy to final filings, your concierge makes sure nothing slips through the cracks.',
        'image' => 'business-incorporation.jpg',
        'highlights' => array(
            'Kickoff workshop to map ownership, tax posture, and timeline',
            'Articles, bylaws, and EIN delivered with digital vault access',
            'State compliance dashboard with automated reminders'
        )
    ),
    'compliance' => array(
        'title' => 'Compliance & Regulatory Desk',
        'description' => 'Registered agent, BOI reporting, and annual filings handled with proactive alerts.',
        'image' => 'resale-certificate.jpg',
        'highlights' => array(
            'Daily mail scanning, secure uploads, and urgent alert triage',
            'Beneficial ownership (BOI) monitoring with change documentation',
            'State annual report submission and proof-of-filing storage'
        )
    ),
    'growth' => array(
        'title' => 'Marketplace & Expansion Playbooks',
        'description' => 'Ecommerce approvals, tax registrations, and banking compliance aligned to your growth plan.',
        'image' => 'amazon-seller.jpg',
        'highlights' => array(
            'Marketplace application packs tuned to platform requirements',
            'Sales tax nexus mapping with multi-state registrations',
            'Banking, payment processor, and vendor compliance coordination'
        )
    )
);

$book_call_link = function_exists('cnb_get_cta_link') ? cnb_get_cta_link('consultation') : home_url('/contact/');
?>

<section class="relative bg-white py-24">
    <div class="absolute inset-0">
        <div class="absolute left-6 top-20 h-64 w-64 rounded-full bg-cnb-primary/10 blur-[140px]"></div>
        <div class="absolute right-10 bottom-10 h-80 w-80 rounded-full bg-cnb-secondary/10 blur-[160px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid gap-14 lg:grid-cols-[minmax(0,0.95fr)_minmax(0,1.05fr)] lg:gap-20" x-data="{ active: 'formation' }">
            <div class="space-y-8">
                <div class="space-y-4">
                    <p class="text-sm uppercase tracking-[0.35em] text-slate-500">How we support you</p>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950">Advisory teams that stay with you after the paperwork.</h2>
                    <p class="text-lg text-slate-600">
                        Tap into specialists who own your outcomes—long after the first filing. Switch between playbooks to see how we help at every stage.
                    </p>
                </div>

                <div class="flex flex-wrap gap-3">
                    <?php foreach ($plays as $key => $play) : ?>
                        <button type="button" @click="active = '<?php echo esc_js($key); ?>'"
                            class="rounded-full border border-slate-200 px-5 py-2 text-sm font-semibold transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-cnb-primary/60"
                            :class="active === '<?php echo esc_js($key); ?>' ? 'bg-slate-900 text-white shadow-[0_24px_56px_-32px_rgba(15,23,42,0.45)] border-slate-900' : 'bg-white text-slate-500 hover:text-slate-900 hover:border-slate-300'">
                            <?php echo esc_html($play['title']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-8 shadow-[0_30px_80px_-60px_rgba(15,23,42,0.55)]">
                    <?php foreach ($plays as $key => $play) : ?>
                        <div x-show="active === '<?php echo esc_js($key); ?>'" x-transition.opacity.duration.300ms x-transition.scale.origin.top.duration.300ms>
                            <h3 class="text-2xl font-semibold text-slate-900">
                                <?php echo esc_html($play['title']); ?>
                            </h3>
                            <p class="mt-3 text-slate-600">
                                <?php echo esc_html($play['description']); ?>
                            </p>
                            <ul class="mt-6 space-y-3 text-sm text-slate-600">
                                <?php foreach ($play['highlights'] as $highlight) : ?>
                                    <li class="flex items-start gap-3">
                                        <span class="mt-1 flex h-6 w-6 items-center justify-center rounded-full bg-cnb-primary/10 text-cnb-primary">
                                            <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                        <span><?php echo esc_html($highlight); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="flex flex-wrap gap-4">
                    <a href="<?php echo esc_url($book_call_link); ?>" target="_blank" rel="noopener"
                        class="inline-flex items-center justify-center rounded-full bg-cnb-secondary px-8 py-4 text-sm font-semibold text-slate-950 shadow-lg shadow-cnb-secondary/40 transition hover:bg-cnb-secondary/90 hover:shadow-xl hover:shadow-cnb-secondary/30">
                        Book a call
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-flex items-center gap-2 rounded-full border border-slate-300 px-8 py-4 text-sm font-semibold text-slate-700 transition hover:border-slate-400 hover:bg-slate-100">
                        Talk with a specialist
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-8 right-16 hidden h-24 w-24 rounded-full bg-cnb-secondary/15 blur-2xl lg:block"></div>

                <div class="relative overflow-hidden rounded-[32px] border border-slate-200 bg-white shadow-[0_40px_120px_-60px_rgba(15,23,42,0.65)]">
                    <?php foreach ($plays as $key => $play) : ?>
                        <div x-show="active === '<?php echo esc_js($key); ?>'" x-transition.opacity.duration.500ms class="relative">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/services/<?php echo esc_attr($play['image']); ?>" alt="<?php echo esc_attr($play['title']); ?>" class="h-[420px] w-full object-cover" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                                <p class="text-xs uppercase tracking-[0.25em] text-white/60">Playbook</p>
                                <h3 class="mt-2 text-2xl font-semibold"><?php echo esc_html($play['title']); ?></h3>
                                <p class="mt-3 text-sm text-white/70">
                                    <?php echo esc_html($play['description']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl border border-slate-200 bg-white/90 p-5 text-center shadow-sm">
                        <p class="text-2xl font-semibold text-slate-950">93%</p>
                        <p class="mt-1 text-xs uppercase tracking-[0.25em] text-slate-500">renewal rate</p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white/90 p-5 text-center shadow-sm">
                        <p class="text-2xl font-semibold text-slate-950">2.5h</p>
                        <p class="mt-1 text-xs uppercase tracking-[0.25em] text-slate-500">avg response</p>
                    </div>
                    <div class="rounded-3xl border border-slate-200 bg-white/90 p-5 text-center shadow-sm">
                        <p class="text-2xl font-semibold text-slate-950">140+</p>
                        <p class="mt-1 text-xs uppercase tracking-[0.25em] text-slate-500">industries served</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>