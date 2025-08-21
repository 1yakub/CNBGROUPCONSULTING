<?php
/**
 * Footer Legal Services Component
 *
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Legal Services -->
<div class="space-y-4">
    <h3 class="text-lg font-semibold text-white mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2 text-cnb-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
        </svg>
        Legal Services
    </h3>
    <ul class="space-y-3">
        <li><a href="<?php echo esc_url(home_url('/company-formation/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            USA Company Formation
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/ein-service/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            EIN Service
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/itin-service/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14c-1.306 0-2.417.835-2.83 2"></path>
            </svg>
            ITIN Service
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/registered-agent/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            US Registered Agent
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/ecommerce-registration/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            E-Commerce Business
        </a></li>
    </ul>
</div>