<?php
/**
 * Footer Important Links Component
 *
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Important Links -->
<div class="space-y-4">
    <h3 class="text-lg font-semibold text-white mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2 text-cnb-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
        </svg>
        Important Links
    </h3>
    <ul class="space-y-3">
        <li><a href="<?php echo esc_url(home_url('/case-study/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Case Study
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/become-partner/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
            </svg>
            Become A Partner
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/become-affiliate/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            Become Affiliate
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/terms-conditions/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            Terms & Conditions
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/refund-policy/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"></path>
            </svg>
            Refund Policy
        </a></li>
        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" 
               class="text-slate-300 hover:text-cnb-secondary transition-colors duration-200 flex items-center group">
            <svg class="w-4 h-4 mr-2 text-slate-500 group-hover:text-cnb-secondary transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            Contact Us
        </a></li>
    </ul>
</div>