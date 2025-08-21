<?php
/**
 * Mobile Menu Button Component
 *
 * @package CNB_Consulting_Theme
 */
?>
<button @click="mobileMenuOpen = !mobileMenuOpen"
    class="flex items-center space-x-2 p-2 text-slate-300 hover:text-white transition-colors duration-200"
    aria-controls="mobile-menu" :aria-expanded="mobileMenuOpen">
    <span class="flex flex-col space-y-1">
        <span class="w-6 h-0.5 bg-slate-300 transition-all duration-300"
            :class="{ 'rotate-45 translate-y-1.5': mobileMenuOpen }"></span>
        <span class="w-6 h-0.5 bg-slate-300 transition-all duration-300"
            :class="{ 'opacity-0': mobileMenuOpen }"></span>
        <span class="w-6 h-0.5 bg-slate-300 transition-all duration-300" 
            :class="{ '-rotate-45 -translate-y-1.5': mobileMenuOpen }"></span>
    </span>
    <span class="menu-text">
        <?php _e('Menu', 'cnb-consulting-theme'); ?>
    </span>
</button>