<?php
/**
 * Blog CTA Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Call to Action Section for Blog/Archive Pages -->
<?php if (is_home() || is_archive()) : ?>
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2><?php _e('Ready to Start Your US Business?', 'cnb-consulting-theme'); ?></h2>
                <p><?php _e('Join hundreds of international entrepreneurs who have successfully launched their US businesses with our expert guidance.', 'cnb-consulting-theme'); ?></p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary">
                        <?php _e('View Our Services', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline">
                        <?php _e('Free Consultation', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>