<?php
/**
 * About Page Leadership Team Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section class="relative overflow-hidden bg-white py-20 lg:py-24">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-16 left-8 h-64 w-64 rounded-full bg-cnb-secondary/15 blur-[160px]"></div>
        <div class="absolute bottom-0 right-20 h-72 w-72 rounded-full bg-slate-200 blur-[180px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col gap-6 text-center">
            <span class="mx-auto inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-[0.35em] text-slate-500">
                Leadership pod
            </span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-semibold text-slate-950">
                The operators orchestrating every CNB engagement.
            </h2>
            <p class="mx-auto max-w-3xl text-base text-slate-600 md:text-lg">
                Hands-on strategists, legal experts, and compliance leaders who oversee your roadmap, approvals, and ongoing momentum.
            </p>
        </div>

        <div class="mt-16 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
            <?php
            $team_members = array(
                array(
                    'initials' => 'CB',
                    'name' => 'Christina Bradley',
                    'title' => __('Founder & CEO', 'cnb-consulting-theme'),
                    'description' => __('Corporate attorney turned operator advocate guiding strategy across entity, tax, and marketplace tracks.', 'cnb-consulting-theme'),
                    'highlights' => array(
                        __('15+ years corporate law & consulting', 'cnb-consulting-theme'),
                        __('Oversees strategic partner alliances', 'cnb-consulting-theme')
                    )
                ),
                array(
                    'initials' => 'NJ',
                    'name' => 'Nathan Johnson',
                    'title' => __('Operations Director', 'cnb-consulting-theme'),
                    'description' => __('Builds the playbooks, dashboards, and workflows that keep every client engagement moving with velocity.', 'cnb-consulting-theme'),
                    'highlights' => array(
                        __('10+ years operations leadership', 'cnb-consulting-theme'),
                        __('Champion of automation + reporting', 'cnb-consulting-theme')
                    )
                ),
                array(
                    'initials' => 'BS',
                    'name' => 'Barbara Smith',
                    'title' => __('Legal Compliance Manager', 'cnb-consulting-theme'),
                    'description' => __('Leads multi-state compliance reviews, renewal cadences, and audit preparation for every client pod.', 'cnb-consulting-theme'),
                    'highlights' => array(
                        __('12+ years regulatory expertise', 'cnb-consulting-theme'),
                        __('Specialist in marketplace governance', 'cnb-consulting-theme')
                    )
                ),
            );

            foreach ($team_members as $member) :
            ?>
                <article class="relative overflow-hidden rounded-[28px] border border-slate-200 bg-white p-8 text-left shadow-[0_32px_80px_-55px_rgba(15,23,42,0.45)]">
                    <div class="flex items-center gap-4">
                        <span class="flex h-16 w-16 items-center justify-center rounded-2xl bg-slate-900 text-lg font-semibold uppercase tracking-[0.35em] text-white"><?php echo esc_html($member['initials']); ?></span>
                        <div>
                            <h3 class="text-xl font-semibold text-slate-900"><?php echo esc_html($member['name']); ?></h3>
                            <p class="text-sm font-semibold uppercase tracking-[0.3em] text-cnb-primary/90"><?php echo esc_html($member['title']); ?></p>
                        </div>
                    </div>

                    <p class="mt-6 text-sm text-slate-600"><?php echo esc_html($member['description']); ?></p>

                    <ul class="mt-6 space-y-3 text-sm text-slate-500" role="list">
                        <?php foreach ($member['highlights'] as $highlight) : ?>
                            <li class="flex items-center gap-2">
                                <span class="h-1.5 w-1.5 rounded-full bg-cnb-secondary"></span>
                                <span><?php echo esc_html($highlight); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>