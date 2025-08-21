<?php
/**
 * Mobile Menu Component
 *
 * @package CNB_Consulting_Theme
 */
?>
<!-- Mobile Menu -->
<div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-1"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-1"
    class="absolute top-full left-0 w-full bg-slate-800 border-t border-slate-700 z-40 max-h-screen overflow-y-auto"
    style="display: none;">
    <div class="px-4 py-6 space-y-4 max-h-[calc(100vh-200px)] overflow-y-auto">
        <a href="<?php echo esc_url(home_url('/')); ?>"
            class="block py-3 px-4 text-slate-200 hover:text-cnb-secondary hover:bg-slate-700 rounded-lg transition-all duration-200 font-semibold">
            <?php _e('Home', 'cnb-consulting-theme'); ?>
        </a>

        <!-- Mobile Services Submenu -->
        <div x-data="{ servicesOpen: false }" class="block">
            <button @click="servicesOpen = !servicesOpen"
                class="flex items-center justify-between w-full py-3 px-4 text-slate-200 hover:text-cnb-secondary hover:bg-slate-700 rounded-lg transition-all duration-200 font-semibold">
                <span>
                    <?php _e('Services', 'cnb-consulting-theme'); ?>
                </span>
                <svg class="w-4 h-4 transition-transform duration-200"
                    :class="{ 'rotate-180': servicesOpen }" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div x-show="servicesOpen" x-collapse
                class="pl-4 mt-2 space-y-2 max-h-60 overflow-y-auto scrollbar-thin scrollbar-thumb-slate-500 scrollbar-track-transparent scrollbar-thumb-rounded-full hover:scrollbar-thumb-slate-400">
                <?php
                $mobile_services = array(
                    'company-formation' => 'U.S. Company Formation',
                    'ein-service' => 'EIN Service',
                    'itin-service' => 'ITIN Service',
                    'registered-agent' => 'US Registered Agent',
                    'tax-filing' => 'US Tax Filing Return',
                    'duns-number' => 'DUNS Number',
                    'boi-filing' => 'BOI Filing',
                    'company-dissolution' => 'Company Dissolution',
                    'amazon-seller' => 'Amazon Seller Account',
                    'walmart-seller' => 'Walmart Seller Account',
                    'resale-certificate' => 'US Resale Certificate',
                    'ecommerce-registration' => 'E-commerce Registration',
                    'lease-agreement' => 'US Lease Agreement'
                );
                foreach ($mobile_services as $slug => $title) {
                    echo '<a href="' . esc_url(home_url('/' . $slug . '/')) . '" class="block py-2 px-4 text-sm text-slate-300 hover:text-white hover:bg-slate-700 rounded transition-all duration-200">' . esc_html($title) . '</a>';
                }
                ?>
            </div>
        </div>

        <a href="<?php echo esc_url(home_url('/about/')); ?>"
            class="block py-3 px-4 text-slate-200 hover:text-cnb-secondary hover:bg-slate-700 rounded-lg transition-all duration-200 font-semibold">
            <?php _e('About', 'cnb-consulting-theme'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
            class="block py-3 px-4 text-slate-200 hover:text-cnb-secondary hover:bg-slate-700 rounded-lg transition-all duration-200 font-semibold">
            <?php _e('Contact', 'cnb-consulting-theme'); ?>
        </a>
    </div>
</div>