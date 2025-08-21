<?php
/**
 * Fallback function for primary menu
 */
function cnb_consulting_primary_menu_fallback()
{
    echo '<ul id="primary-menu" class="flex space-x-12 items-center">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="cnb-nav-link flex items-center text-slate-200 hover:text-cnb-secondary font-semibold transition-all duration-300 text-base tracking-wide hover:-translate-y-0.5">' . __('Home', 'cnb-consulting-theme') . '</a></li>';

    // Services dropdown menu with Alpine.js
    echo '<li class="relative" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">';
    echo '<a href="' . esc_url(home_url('/services/')) . '" class="cnb-nav-link flex items-center space-x-2 text-slate-200 hover:text-cnb-secondary font-semibold transition-all duration-300 text-base tracking-wide hover:-translate-y-0.5">';
    echo '<span>' . __('Services', 'cnb-consulting-theme') . '</span>';
    echo '<svg class="w-4 h-4 transition-transform duration-200" :class="{ \'rotate-180\': open }" fill="currentColor" viewBox="0 0 20 20">';
    echo '<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>';
    echo '</svg>';
    echo '</a>';

    // Dropdown menu with Alpine.js show/hide and dynamic arrow
    echo '<div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute left-0 top-full mt-3 w-80 bg-white rounded-xl shadow-2xl z-50 border border-slate-200 max-h-[520px] overflow-y-auto scrollbar-thin scrollbar-thumb-slate-600 scrollbar-track-transparent scrollbar-thumb-rounded-full hover:scrollbar-thumb-slate-700 scrollbar-corner-transparent" style="display: none;">';

    // All 13 service pages with Heroicons
    $services = array(
        'company-formation' => array(
            'title' => 'U.S. Company Formation',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>'
        ),
        'ein-service' => array(
            'title' => 'EIN Service',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>'
        ),
        'itin-service' => array(
            'title' => 'ITIN Service',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14c-1.306 0-2.417.835-2.83 2"></path>'
        ),
        'registered-agent' => array(
            'title' => 'US Registered Agent',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>'
        ),
        'tax-filing' => array(
            'title' => 'US Tax Filing Return',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>'
        ),
        'duns-number' => array(
            'title' => 'DUNS Number',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>'
        ),
        'boi-filing' => array(
            'title' => 'BOI Filing',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>'
        ),
        'company-dissolution' => array(
            'title' => 'Company Dissolution',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>'
        ),
        'amazon-seller' => array(
            'title' => 'Amazon Seller Account',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>'
        ),
        'walmart-seller' => array(
            'title' => 'Walmart Seller Account',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m-2 0L4.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17M17 13v4a2 2 0 01-2 2H9a2 2 0 01-2-2v-4m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>'
        ),
        'resale-certificate' => array(
            'title' => 'US Resale Certificate',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>'
        ),
        'ecommerce-registration' => array(
            'title' => 'E-commerce Registration',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9V3m0 9L3 12h18zM12 3v18"></path>'
        ),
        'lease-agreement' => array(
            'title' => 'US Lease Agreement',
            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>'
        )
    );

    foreach ($services as $slug => $service) {
        echo '<a href="' . esc_url(home_url('/' . $slug . '/')) . '" class="flex items-center space-x-3 px-6 py-4 text-sm font-semibold text-slate-700 hover:bg-slate-900 hover:text-white transition-all duration-200 border-b border-slate-100 last:border-b-0 first:rounded-t-xl last:rounded-b-xl group">';
        echo '<svg class="w-5 h-5 text-slate-500 group-hover:text-white transition-colors duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">';
        echo $service['icon'];
        echo '</svg>';
        echo '<span>' . esc_html($service['title']) . '</span>';
        echo '</a>';
    }

    echo '</div>';
    echo '</li>';

    echo '<li><a href="' . esc_url(home_url('/about/')) . '" class="cnb-nav-link flex items-center text-slate-200 hover:text-cnb-secondary font-semibold transition-all duration-300 text-base tracking-wide hover:-translate-y-0.5">' . __('About', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '" class="cnb-nav-link flex items-center text-slate-200 hover:text-cnb-secondary font-semibold transition-all duration-300 text-base tracking-wide hover:-translate-y-0.5">' . __('Contact', 'cnb-consulting-theme') . '</a></li>';
    echo '</ul>';
}
?>