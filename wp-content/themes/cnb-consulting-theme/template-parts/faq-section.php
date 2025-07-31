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

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php _e('Frequently Asked Questions', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php _e('Get answers to common questions about US business formation and our services', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="space-y-4 mb-16">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="bg-gray-50 rounded-lg <?php echo $index === 0 ? 'active' : ''; ?>" data-faq="<?php echo $index; ?>">
                    
                    <div class="p-6 cursor-pointer flex justify-between items-center" onclick="toggleFAQ(<?php echo $index; ?>)">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4"><?php echo esc_html($faq['question']); ?></h3>
                        <span class="faq-toggle text-cnb-primary text-xl font-bold flex-shrink-0">▼</span>
                    </div>
                    
                    <div class="faq-answer px-6 pb-6 text-gray-600 leading-relaxed" <?php echo $index === 0 ? 'style="display: block;"' : ''; ?>>
                        <p><?php echo esc_html($faq['answer']); ?></p>
                    </div>
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="bg-gray-50 rounded-lg p-8 text-center">
            <div class="">
                <h3 class="text-2xl font-bold text-gray-900 mb-4"><?php _e('Still Have Questions?', 'cnb-consulting-theme'); ?></h3>
                <p class="text-gray-600 mb-8"><?php _e('Our expert team is here to help. Get personalized answers to your specific business formation needs.', 'cnb-consulting-theme'); ?></p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="bg-cnb-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                        <?php _e('Contact Our Experts', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php 
                        $contact = cnb_get_contact_info();
                        echo esc_url(cnb_get_whatsapp_link($contact['whatsapp'])); 
                    ?>" target="_blank" rel="noopener" class="border-2 border-cnb-primary text-cnb-primary px-6 py-3 rounded-lg font-medium hover:bg-cnb-primary hover:text-white transition">
                        💬 <?php _e('WhatsApp Us', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
</section>

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