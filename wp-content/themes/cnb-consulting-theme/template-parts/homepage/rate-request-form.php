<?php
/**
 * Rate Request Form Template Part
 * Modular contact form for custom quotes - components organized for easy maintenance
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section id="rate-form" class="py-16 lg:py-24 bg-white relative overflow-hidden">
    
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80')] bg-cover bg-center opacity-5"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <header class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Get Your Custom Quote
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Tell us about your business needs and we'll provide a personalized quote within 24 hours
            </p>
        </header>
        
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="space-y-6">
                
                <input type="hidden" name="action" value="cnb_rate_request">
                <?php wp_nonce_field('cnb_rate_request', 'cnb_nonce'); ?>
                
                <?php 
                // Load form field components
                require_once get_template_directory() . '/template-parts/homepage/form-fields/contact-fields.php';
                require_once get_template_directory() . '/template-parts/homepage/form-fields/business-fields.php';
                require_once get_template_directory() . '/template-parts/homepage/form-fields/services-checkboxes.php';
                require_once get_template_directory() . '/template-parts/homepage/form-fields/timeline-details.php';
                ?>
                
                <!-- Submit Button -->
                <div class="text-center pt-4">
                    <button type="submit" 
                            class="bg-gradient-to-r from-cnb-secondary to-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:from-yellow-400 hover:to-cnb-secondary hover:scale-105 transition-all shadow-xl inline-flex items-center">
                        <span>Get My Custom Quote</span>
                        <!-- Heroicon: paper-airplane -->
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
                
            </form>
            
        </div>
        
        <?php 
        // Load trust indicators component
        require_once get_template_directory() . '/template-parts/homepage/form-trust-indicators.php';
        ?>
        
    </div>
    
</section>