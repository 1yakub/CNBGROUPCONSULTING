    </main><!-- #main -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            
            <!-- Main Footer Content -->
            <div class="footer-main">
                <div class="footer-widgets">
                    
                    <!-- Company Information -->
                    <div class="footer-widget footer-company">
                        <?php
                        $company_info = cnb_get_company_info();
                        $contact_info = cnb_get_contact_info();
                        ?>
                        <div class="footer-logo">
                            <?php
                            if (function_exists('the_custom_logo') && has_custom_logo()) {
                                the_custom_logo();
                            } else {
                            ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-site-logo">
                                    <?php echo esc_html($company_info['name']); ?>
                                </a>
                            <?php } ?>
                        </div>
                        
                        <p class="footer-description">
                            <?php echo esc_html($company_info['description']); ?>
                        </p>
                        
                        <div class="footer-stats">
                            <div class="stat-item">
                                <span class="stat-number"><?php echo esc_html($company_info['clients_served']); ?></span>
                                <span class="stat-label"><?php _e('Clients Served', 'cnb-consulting-theme'); ?></span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number"><?php echo esc_html($company_info['success_rate']); ?></span>
                                <span class="stat-label"><?php _e('Success Rate', 'cnb-consulting-theme'); ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer-widget footer-links">
                        <h3 class="widget-title"><?php _e('Quick Links', 'cnb-consulting-theme'); ?></h3>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'container'      => false,
                            'fallback_cb'    => 'cnb_consulting_footer_menu_fallback',
                        ));
                        ?>
                    </div>

                    <!-- Services -->
                    <div class="footer-widget footer-services">
                        <h3 class="widget-title"><?php _e('Our Services', 'cnb-consulting-theme'); ?></h3>
                        <ul class="services-list">
                            <li><a href="<?php echo esc_url(home_url('/services/us-company-formation/')); ?>"><?php _e('U.S. Company Formation', 'cnb-consulting-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/ein-service/')); ?>"><?php _e('EIN Service', 'cnb-consulting-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/itin-service/')); ?>"><?php _e('ITIN Service', 'cnb-consulting-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/amazon-seller-account/')); ?>"><?php _e('Amazon Seller Account', 'cnb-consulting-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/walmart-seller-account/')); ?>"><?php _e('Walmart Seller Account', 'cnb-consulting-theme'); ?></a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="view-all"><?php _e('View All Services →', 'cnb-consulting-theme'); ?></a></li>
                        </ul>
                    </div>

                    <!-- Contact Information -->
                    <div class="footer-widget footer-contact">
                        <h3 class="widget-title"><?php _e('Get In Touch', 'cnb-consulting-theme'); ?></h3>
                        
                        <div class="contact-items">
                            <div class="contact-item">
                                <i class="icon-phone"></i>
                                <div class="contact-details">
                                    <span class="contact-label"><?php _e('Phone:', 'cnb-consulting-theme'); ?></span>
                                    <a href="tel:<?php echo esc_attr(str_replace(array(' ', '(', ')', '-'), '', $contact_info['phone'])); ?>">
                                        <?php echo esc_html($contact_info['phone']); ?>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="icon-email"></i>
                                <div class="contact-details">
                                    <span class="contact-label"><?php _e('Email:', 'cnb-consulting-theme'); ?></span>
                                    <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>">
                                        <?php echo esc_html($contact_info['email']); ?>
                                    </a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="icon-location"></i>
                                <div class="contact-details">
                                    <span class="contact-label"><?php _e('Address:', 'cnb-consulting-theme'); ?></span>
                                    <address><?php echo esc_html($contact_info['address']); ?></address>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <i class="icon-clock"></i>
                                <div class="contact-details">
                                    <span class="contact-label"><?php _e('Business Hours:', 'cnb-consulting-theme'); ?></span>
                                    <span><?php echo esc_html($contact_info['business_hours']); ?></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media & Contact Actions -->
                        <div class="footer-actions">
                            <a href="https://wa.me/<?php echo esc_attr(str_replace(array(' ', '(', ')', '-', '+'), '', $contact_info['whatsapp'])); ?>" 
                               target="_blank" 
                               rel="noopener"
                               class="btn btn-primary btn-sm whatsapp-btn">
                                <i class="icon-whatsapp"></i>
                                <?php _e('WhatsApp Us', 'cnb-consulting-theme'); ?>
                            </a>
                            
                            <a href="#contact" class="btn btn-outline btn-sm">
                                <?php _e('Free Consultation', 'cnb-consulting-theme'); ?>
                            </a>
                        </div>
                    </div>

                </div><!-- .footer-widgets -->
            </div><!-- .footer-main -->

            <!-- Newsletter Signup -->
            <div class="footer-newsletter">
                <div class="newsletter-content">
                    <h3><?php _e('Stay Updated', 'cnb-consulting-theme'); ?></h3>
                    <p><?php _e('Subscribe to our newsletter for the latest updates on US business formation and drop shipping opportunities.', 'cnb-consulting-theme'); ?></p>
                </div>
                <div class="newsletter-form">
                    <form class="newsletter-signup" method="post" action="#" id="newsletter-form">
                        <div class="form-group newsletter-group">
                            <input type="email" 
                                   name="newsletter_email" 
                                   id="newsletter_email"
                                   placeholder="<?php _e('Enter your email address', 'cnb-consulting-theme'); ?>"
                                   class="form-input newsletter-input"
                                   required>
                            <button type="submit" class="btn btn-secondary newsletter-btn">
                                <?php _e('Subscribe', 'cnb-consulting-theme'); ?>
                            </button>
                        </div>
                        <p class="newsletter-privacy">
                            <?php _e('We respect your privacy. Unsubscribe at any time.', 'cnb-consulting-theme'); ?>
                        </p>
                    </form>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-copyright">
                    <p>&copy; <?php echo esc_html(date('Y')); ?> <?php echo esc_html($company_info['name']); ?>. 
                       <?php _e('All rights reserved.', 'cnb-consulting-theme'); ?>
                    </p>
                    
                    <div class="footer-legal">
                        <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php _e('Privacy Policy', 'cnb-consulting-theme'); ?></a>
                        <span class="separator">|</span>
                        <a href="<?php echo esc_url(home_url('/terms-of-service/')); ?>"><?php _e('Terms of Service', 'cnb-consulting-theme'); ?></a>
                        <span class="separator">|</span>
                        <a href="<?php echo esc_url(home_url('/refund-policy/')); ?>"><?php _e('Refund Policy', 'cnb-consulting-theme'); ?></a>
                    </div>
                </div>
                
                <!-- Trust Badges -->
                <div class="footer-trust">
                    <div class="trust-badges">
                        <div class="trust-item">
                            <i class="icon-shield"></i>
                            <span><?php _e('Secure & Trusted', 'cnb-consulting-theme'); ?></span>
                        </div>
                        <div class="trust-item">
                            <i class="icon-support"></i>
                            <span><?php _e('24/7 Support', 'cnb-consulting-theme'); ?></span>
                        </div>
                        <div class="trust-item">
                            <i class="icon-guarantee"></i>
                            <span><?php _e('Money Back Guarantee', 'cnb-consulting-theme'); ?></span>
                        </div>
                    </div>
                </div>
            </div><!-- .footer-bottom -->

        </div><!-- .container -->
    </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * Fallback function for footer menu
 */
function cnb_consulting_footer_menu_fallback() {
    echo '<ul class="footer-menu">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . __('Home', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about/')) . '">' . __('About Us', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/')) . '">' . __('Services', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/')) . '">' . __('Contact', 'cnb-consulting-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog/')) . '">' . __('Blog', 'cnb-consulting-theme') . '</a></li>';
    echo '</ul>';
}
?>