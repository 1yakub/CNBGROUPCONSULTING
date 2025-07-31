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

<section class="cta-section">
    <div class="container">
        
        <div class="cta-content">
            
            <h2 class="cta-headline">
                <?php _e('Ready to Launch Your US Business?', 'cnb-consulting-theme'); ?>
            </h2>
            
            <p class="cta-subtitle">
                <?php 
                printf(
                    __('Join %s international entrepreneurs who have successfully launched their US businesses with our expert guidance.', 'cnb-consulting-theme'),
                    '<strong>' . esc_html($company_stats['clients_served']) . '</strong>'
                );
                ?>
            </p>
            
            <div class="cta-benefits">
                <div class="benefit-item">
                    <span class="benefit-icon">⚡</span>
                    <span class="benefit-text"><?php _e('Fast 5-10 day setup', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🛡️</span>
                    <span class="benefit-text"><?php _e('100% compliant & legal', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">💰</span>
                    <span class="benefit-text"><?php _e('Transparent pricing', 'cnb-consulting-theme'); ?></span>
                </div>
                <div class="benefit-item">
                    <span class="benefit-icon">🎧</span>
                    <span class="benefit-text"><?php _e('Expert support included', 'cnb-consulting-theme'); ?></span>
                </div>
            </div>
            
            <div class="cta-actions">
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary btn-xl">
                    🚀 <?php _e('Get Started Now', 'cnb-consulting-theme'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline btn-xl cta-secondary">
                    📞 <?php _e('Schedule Free Consultation', 'cnb-consulting-theme'); ?>
                </a>
            </div>
            
            <div class="cta-contact-options">
                <div class="contact-option">
                    <span class="contact-icon">📞</span>
                    <div class="contact-details">
                        <span class="contact-label"><?php _e('Call Us:', 'cnb-consulting-theme'); ?></span>
                        <a href="tel:<?php echo esc_attr(cnb_format_phone_href($contact_info['phone'])); ?>" class="contact-link">
                            <?php echo esc_html($contact_info['phone']); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-option">
                    <span class="contact-icon">💬</span>
                    <div class="contact-details">
                        <span class="contact-label"><?php _e('WhatsApp:', 'cnb-consulting-theme'); ?></span>
                        <a href="<?php echo esc_url(cnb_get_whatsapp_link($contact_info['whatsapp'])); ?>" 
                           target="_blank" rel="noopener" class="contact-link">
                            <?php echo esc_html($contact_info['whatsapp']); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-option">
                    <span class="contact-icon">✉️</span>
                    <div class="contact-details">
                        <span class="contact-label"><?php _e('Email:', 'cnb-consulting-theme'); ?></span>
                        <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>" class="contact-link">
                            <?php echo esc_html($contact_info['email']); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="cta-guarantee">
                <div class="guarantee-badge">
                    <span class="guarantee-icon">✅</span>
                    <div class="guarantee-text">
                        <strong><?php _e('Money-Back Guarantee', 'cnb-consulting-theme'); ?></strong>
                        <span><?php _e('100% satisfaction or full refund', 'cnb-consulting-theme'); ?></span>
                    </div>
                </div>
            </div>
            
        </div><!-- .cta-content -->
        
    </div><!-- .container -->
    
    <!-- Background decoration -->
    <div class="cta-background">
        <div class="cta-pattern"></div>
    </div>
    
</section><!-- .cta-section -->