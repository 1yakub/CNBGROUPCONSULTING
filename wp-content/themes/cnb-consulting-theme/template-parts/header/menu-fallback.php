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

    // Load services data from external file
    $services = include get_template_directory() . '/template-parts/header/menu-fallback-components/services-data.php';

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