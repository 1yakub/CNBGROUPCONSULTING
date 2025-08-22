<?php $company_stats = cnb_get_company_info(); ?>
<!-- Stats Grid -->
<div class="grid grid-cols-1 gap-6 lg:grid-cols-1">
    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
        <div class="text-center">
            <!-- Heroicon: trophy -->
            <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 1C4.477 1 0 5.477 0 11s4.477 10 10 10 10-4.477 10-10S15.523 1 10 1zM8 11a1 1 0 112 0v2a1 1 0 11-2 0v-2zM8 7a1 1 0 112 0v1a1 1 0 11-2 0V7z" clip-rule="evenodd"></path>
            </svg>
            <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['clients_served']); ?></div>
            <div class="text-blue-200">Happy Clients</div>
        </div>
    </div>
    
    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
        <div class="text-center">
            <!-- Heroicon: check-circle -->
            <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['success_rate']); ?></div>
            <div class="text-blue-200">Success Rate</div>
        </div>
    </div>
    
    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
        <div class="text-center">
            <!-- Heroicon: globe -->
            <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
            </svg>
            <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['countries_served']); ?></div>
            <div class="text-blue-200">Countries</div>
        </div>
    </div>
</div>