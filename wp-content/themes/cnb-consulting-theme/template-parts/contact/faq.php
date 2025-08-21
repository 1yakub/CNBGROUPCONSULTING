<?php
/**
 * Contact Page FAQ Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Quick Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Quick answers to common questions</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-lg shadow-sm">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('contact-faq-1')">
                    <h3 class="font-semibold text-gray-900">How quickly can you form my business?</h3>
                    <span class="text-cnb-primary text-xl" id="toggle-contact-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="contact-faq-1">
                    <p class="text-gray-600">Most business formations are completed within 24-48 hours. Rush processing is available for same-day filing when needed.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('contact-faq-2')">
                    <h3 class="font-semibold text-gray-900">What information do you need to get started?</h3>
                    <span class="text-cnb-primary text-xl" id="toggle-contact-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="contact-faq-2">
                    <p class="text-gray-600">We need your business name, business address, member/owner information, and your preferred business structure. We'll guide you through everything during your consultation.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-sm">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('contact-faq-3')">
                    <h3 class="font-semibold text-gray-900">Do you provide ongoing support after formation?</h3>
                    <span class="text-cnb-primary text-xl" id="toggle-contact-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="contact-faq-3">
                    <p class="text-gray-600">Yes! We offer registered agent services, annual report filing, compliance monitoring, and ongoing business consulting to keep your company in good standing.</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="<?php echo home_url('/faq'); ?>" class="text-cnb-primary hover:underline font-semibold">
                View All FAQs →
            </a>
        </div>
    </div>
</section>

<script>
function toggleFAQ(targetId) {
    const answer = document.getElementById(targetId);
    const toggle = document.getElementById('toggle-' + targetId);
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        toggle.textContent = '−';
    } else {
        answer.classList.add('hidden');
        toggle.textContent = '+';
    }
}
</script>