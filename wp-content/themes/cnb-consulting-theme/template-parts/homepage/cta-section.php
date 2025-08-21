<?php
/**
 * Call-to-Action Section Template Part
 * 
 * Final conversion section with strong CTA and contact options
 * 
 * @package CNB_Consulting_Theme
 */

$company_stats = cnb_get_company_info();
$contact_info = cnb_get_contact_info();
?>

<section class="relative py-20 lg:py-32 bg-gradient-to-br from-cnb-primary to-blue-900 text-white overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center">
            
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
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div class="flex flex-col items-center text-center">
                    <span class="text-3xl mb-2">⚡</span>
                    <span class="text-blue-100 text-sm"><?php _e('Fast 5-10 day setup', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="text-3xl mb-2">🛡️</span>
                    <span class="text-blue-100 text-sm"><?php _e('100% compliant & legal', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="text-3xl mb-2">💰</span>
                    <span class="text-blue-100 text-sm"><?php _e('Transparent pricing', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="flex flex-col items-center text-center">
                    <span class="text-3xl mb-2">🎧</span>
                    <span class="text-blue-100 text-sm"><?php _e('Expert support included', 'cnb-consulting-theme'); ?></span>
                </div>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-4 justify-center mb-12">
                <a href="<?php echo esc_url(cnb_get_cta_link('get-started')); ?>" class="bg-cnb-secondary text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:bg-yellow-400 transition transform hover:scale-105">
                    🚀 <?php _e('Get Started Now', 'cnb-consulting-theme'); ?>
                </a>
                <a href="<?php echo esc_url(cnb_get_cta_link('book-consultation')); ?>" target="_blank" rel="noopener" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-bold hover:bg-white hover:text-cnb-primary transition transform hover:scale-105">
                    📞 <?php _e('Book Your Consultation', 'cnb-consulting-theme'); ?>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="flex items-center justify-center lg:justify-start">
                    <span class="text-2xl mr-3">📞</span>
                    <div class="text-left">
                        <div class="text-blue-200 text-sm"><?php _e('Call Us:', 'cnb-consulting-theme'); ?></div>
                        <a href="tel:<?php echo esc_attr(cnb_format_phone_href($contact_info['phone'])); ?>" class="text-white hover:text-cnb-secondary transition font-medium">
                            <?php echo esc_html($contact_info['phone']); ?>
                        </a>
                    </div>
                </div>
                
                <div class="flex items-center justify-center lg:justify-start">
                    <span class="text-2xl mr-3">💬</span>
                    <div class="text-left">
                        <div class="text-blue-200 text-sm"><?php _e('WhatsApp:', 'cnb-consulting-theme'); ?></div>
                        <a href="<?php echo esc_url(cnb_get_whatsapp_link($contact_info['whatsapp'])); ?>" 
                           target="_blank" rel="noopener" class="text-white hover:text-cnb-secondary transition font-medium">
                            <?php echo esc_html($contact_info['whatsapp']); ?>
                        </a>
                    </div>
                </div>
                
                <div class="flex items-center justify-center lg:justify-start">
                    <span class="text-2xl mr-3">✉️</span>
                    <div class="text-left">
                        <div class="text-blue-200 text-sm"><?php _e('Email:', 'cnb-consulting-theme'); ?></div>
                        <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>" class="text-white hover:text-cnb-secondary transition font-medium">
                            <?php echo esc_html($contact_info['email']); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="flex justify-center">
                <div class="bg-white bg-opacity-10 rounded-lg px-6 py-4 flex items-center">
                    <span class="text-2xl mr-4">✅</span>
                    <div class="text-left">
                        <div class="font-bold text-white mb-1"><?php _e('Money-Back Guarantee', 'cnb-consulting-theme'); ?></div>
                        <div class="text-blue-200 text-sm"><?php _e('100% satisfaction or full refund', 'cnb-consulting-theme'); ?></div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white to-transparent transform skew-y-1"></div>
    </div>
    
</section>