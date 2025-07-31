<?php
/**
 * Service CTA Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$primary_cta_text = get_post_meta(get_the_ID(), '_cnb_primary_cta_text', true) ?: 'Get Started Now';
$primary_cta_link = get_post_meta(get_the_ID(), '_cnb_primary_cta_link', true) ?: '#contact';
$secondary_cta_text = get_post_meta(get_the_ID(), '_cnb_secondary_cta_text', true) ?: 'Free Consultation';
$secondary_cta_link = get_post_meta(get_the_ID(), '_cnb_secondary_cta_link', true) ?: '#contact';
$contact_phone = get_post_meta(get_the_ID(), '_cnb_contact_phone', true);
$whatsapp_number = get_post_meta(get_the_ID(), '_cnb_whatsapp_number', true);

// Get company contact info from customizer as fallback
$contact_info = cnb_get_contact_info();
if (!$contact_phone) {
    $contact_phone = $contact_info['phone'];
}
if (!$whatsapp_number) {
    $whatsapp_number = $contact_info['whatsapp'];
}
?>

<section id="contact" class="service-cta">
    <div class="container">
        <div class="cta-content">
            <div class="cta-main">
                <h2>Ready to Get Started?</h2>
                <p>Join hundreds of satisfied clients who chose our <?php echo strtolower(get_the_title()); ?> service</p>
                
                <div class="cta-buttons">
                    <a href="<?php echo esc_url($primary_cta_link); ?>" class="btn btn-primary btn-large">
                        <?php echo esc_html($primary_cta_text); ?>
                    </a>
                    <a href="<?php echo esc_url($secondary_cta_link); ?>" class="btn btn-secondary btn-large">
                        <?php echo esc_html($secondary_cta_text); ?>
                    </a>
                </div>
                
                <div class="contact-options">
                    <p>Or contact us directly:</p>
                    <div class="contact-methods">
                        <?php if ($contact_phone) : ?>
                            <a href="tel:<?php echo esc_attr($contact_phone); ?>" class="contact-method">
                                <span class="contact-icon">📞</span>
                                <span class="contact-text"><?php echo esc_html($contact_phone); ?></span>
                            </a>
                        <?php endif; ?>
                        
                        <?php if ($whatsapp_number) : ?>
                            <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $whatsapp_number)); ?>" class="contact-method" target="_blank">
                                <span class="contact-icon">💬</span>
                                <span class="contact-text">WhatsApp</span>
                            </a>
                        <?php endif; ?>
                        
                        <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>" class="contact-method">
                            <span class="contact-icon">✉️</span>
                            <span class="contact-text">Email Us</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="cta-guarantee">
                <div class="guarantee-box">
                    <div class="guarantee-icon">🛡️</div>
                    <h3>Our Guarantee</h3>
                    <ul>
                        <li>✅ 100% Money-Back Guarantee</li>
                        <li>✅ Expert Professional Service</li>
                        <li>✅ Fast Processing Times</li>
                        <li>✅ Dedicated Support Team</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="cta-stats">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Clients Served</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">99%</span>
                <span class="stat-label">Success Rate</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">4.9★</span>
                <span class="stat-label">Client Rating</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">24/7</span>
                <span class="stat-label">Support</span>
            </div>
        </div>
    </div>
</section>