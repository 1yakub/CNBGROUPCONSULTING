<?php
/**
 * CTA Button Component
 *
 * @package CNB_Consulting_Theme
 */
?>
<div class="hidden md:flex items-center">
    <a href="<?php echo esc_url(cnb_get_cta_link('incorporate-now')); ?>"
       class="group relative inline-flex items-center px-6 py-3 font-semibold text-white 
              bg-gradient-to-r from-cnb-primary to-blue-700 
              rounded-lg shadow-lg overflow-hidden
              transition-all duration-300 ease-out
              hover:shadow-[0_25px_50px_-12px_rgba(0,0,0,0.4),0_10px_20px_-8px_rgba(30,64,175,0.3)]
              hover:-translate-y-1 hover:scale-105
              active:scale-100 active:translate-y-0">
        <!-- Gradient overlay for flip effect -->
        <span class="absolute inset-0 bg-gradient-to-r from-blue-700 to-cnb-primary
                   opacity-0 transition-opacity duration-300 group-hover:opacity-100"></span>
        <!-- Button text -->
        <span class="relative z-10"><?php _e('Incorporate now', 'cnb-consulting-theme'); ?></span>
    </a>
</div>