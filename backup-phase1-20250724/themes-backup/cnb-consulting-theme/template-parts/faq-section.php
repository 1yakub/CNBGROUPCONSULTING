<?php
/**
 * FAQ Section Template Part
 * 
 * Displays frequently asked questions with basic accordion functionality
 * 
 * @package CNB_Consulting_Theme
 */

$faqs = cnb_get_homepage_faqs();
?>

<section class="faq-section">
    <div class="container">
        
        <header class="section-header">
            <h2 class="section-title">
                <?php _e('Frequently Asked Questions', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="section-subtitle">
                <?php _e('Get answers to common questions about US business formation and our services', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="faq-container">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="faq-item <?php echo $index === 0 ? 'active' : ''; ?>" data-faq="<?php echo $index; ?>">
                    
                    <div class="faq-question" onclick="toggleFAQ(<?php echo $index; ?>)">
                        <h3><?php echo esc_html($faq['question']); ?></h3>
                        <span class="faq-toggle">▼</span>
                    </div>
                    
                    <div class="faq-answer" <?php echo $index === 0 ? 'style="display: block;"' : ''; ?>>
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                    
                </div><!-- .faq-item -->
            <?php endforeach; ?>
        </div><!-- .faq-container -->
        
        <div class="faq-footer">
            <div class="faq-contact">
                <h3><?php _e('Still Have Questions?', 'cnb-consulting-theme'); ?></h3>
                <p><?php _e('Our expert team is here to help. Get personalized answers to your specific business formation needs.', 'cnb-consulting-theme'); ?></p>
                <div class="faq-actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary">
                        <?php _e('Contact Our Experts', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php 
                        $contact = cnb_get_contact_info();
                        echo esc_url(cnb_get_whatsapp_link($contact['whatsapp'])); 
                    ?>" target="_blank" rel="noopener" class="btn btn-outline">
                        💬 <?php _e('WhatsApp Us', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div><!-- .container -->
</section><!-- .faq-section -->

<script>
// Basic FAQ accordion functionality
function toggleFAQ(index) {
    const faqItem = document.querySelector(`[data-faq="${index}"]`);
    const faqAnswer = faqItem.querySelector('.faq-answer');
    const faqToggle = faqItem.querySelector('.faq-toggle');
    
    // Close all other FAQs
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('active');
            item.querySelector('.faq-answer').style.display = 'none';
            item.querySelector('.faq-toggle').innerHTML = '▼';
        }
    });
    
    // Toggle current FAQ
    if (faqItem.classList.contains('active')) {
        faqItem.classList.remove('active');
        faqAnswer.style.display = 'none';
        faqToggle.innerHTML = '▼';
    } else {
        faqItem.classList.add('active');
        faqAnswer.style.display = 'block';
        faqToggle.innerHTML = '▲';
    }
}
</script>