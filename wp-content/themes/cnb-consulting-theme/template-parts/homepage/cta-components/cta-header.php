<?php $company_stats = cnb_get_company_info(); ?>
<h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
    <?php _e('Ready to Launch Your US Business?', 'cnb-consulting-theme'); ?>
</h2>

<p class="text-xl md:text-2xl text-blue-100 mb-12 leading-relaxed max-w-4xl mx-auto">
    <?php 
    printf(
        __('Join %s international entrepreneurs who have successfully launched their US businesses with our expert guidance.', 'cnb-consulting-theme'),
        '<strong>' . esc_html($company_stats['clients_served']) . '</strong>'
    );
    ?>
</p>