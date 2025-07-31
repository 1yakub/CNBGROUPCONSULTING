<?php
/**
 * Template for Contact Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Contact Us</h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed">
                    Ready to start your business? Get in touch for a free consultation and personalized service recommendations.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-gray-50 rounded-lg p-8">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form id="contact-form" class="space-y-6" action="#" method="POST">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-semibold text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first_name" name="first_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-semibold text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last_name" name="last_name" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                        </div>

                        <div>
                            <label for="business_type" class="block text-sm font-semibold text-gray-700 mb-2">Business Type</label>
                            <select id="business_type" name="business_type"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                                <option value="">Select Business Type</option>
                                <option value="llc">LLC Formation</option>
                                <option value="corporation">Corporation Formation</option>
                                <option value="partnership">Partnership Formation</option>
                                <option value="nonprofit">Nonprofit Formation</option>
                                <option value="existing">Existing Business Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="service_interest" class="block text-sm font-semibold text-gray-700 mb-2">Service Interest</label>
                            <select id="service_interest" name="service_interest"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition">
                                <option value="">Select Service</option>
                                <option value="business-formation">Business Formation</option>
                                <option value="registered-agent">Registered Agent</option>
                                <option value="ein-number">EIN Number</option>
                                <option value="business-license">Business License</option>
                                <option value="operating-agreement">Operating Agreement</option>
                                <option value="annual-report">Annual Report</option>
                                <option value="trademark">Trademark</option>
                                <option value="consultation">Free Consultation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
                            <textarea id="message" name="message" rows="4" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent transition"
                                placeholder="Tell us about your business goals and how we can help..."></textarea>
                        </div>

                        <div class="flex items-start space-x-3">
                            <input type="checkbox" id="privacy_agree" name="privacy_agree" required
                                class="mt-1 w-4 h-4 text-cnb-primary border-gray-300 rounded focus:ring-cnb-primary">
                            <label for="privacy_agree" class="text-sm text-gray-600">
                                I agree to the <a href="<?php echo home_url('/privacy-policy'); ?>" class="text-cnb-primary hover:underline">Privacy Policy</a> and consent to being contacted about CNB Group Consulting services. *
                            </label>
                        </div>

                        <button type="submit" 
                            class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105 flex items-center justify-center space-x-2">
                            <span>Send Message</span>
                            <span>→</span>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Get In Touch</h2>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Ready to start your business or need help with existing compliance? Our expert team is here to provide personalized guidance and professional service.
                        </p>
                    </div>

                    <!-- Contact Methods -->
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xl">📞</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Phone</h3>
                                <p class="text-gray-600">Call us for immediate assistance</p>
                                <a href="tel:+1-555-CNB-GROUP" class="text-cnb-primary font-semibold hover:underline">
                                    +1 (555) CNB-GROUP
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xl">✉️</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">Send us a detailed message</p>
                                <a href="mailto:info@cnbgroupconsulting.com" class="text-cnb-primary font-semibold hover:underline">
                                    info@cnbgroupconsulting.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xl">💬</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
                                <p class="text-gray-600">Quick questions and support</p>
                                <a href="https://wa.me/15555555555" class="text-cnb-primary font-semibold hover:underline" target="_blank">
                                    Chat with us on WhatsApp
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-cnb-primary rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-white text-xl">🕒</span>
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-900 mb-1">Business Hours</h3>
                                <div class="text-gray-600 space-y-1">
                                    <p>Monday - Friday: 9:00 AM - 6:00 PM EST</p>
                                    <p>Saturday: 10:00 AM - 4:00 PM EST</p>
                                    <p>Sunday: Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guarantee Badge -->
                    <div class="bg-gradient-to-r from-cnb-secondary to-yellow-400 rounded-lg p-6 text-center">
                        <div class="text-4xl mb-4">🛡️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">100% Satisfaction Guarantee</h3>
                        <p class="text-gray-700">
                            We stand behind our work with a complete money-back guarantee. Your success is our commitment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
</main>

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

// Contact form handling
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const formData = new FormData(this);
    
    // Show loading state
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = '<span>Sending...</span>';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual endpoint)
    setTimeout(() => {
        alert('Thank you for your message! We\'ll get back to you within 24 hours.');
        this.reset();
        submitBtn.innerHTML = originalText;
        submitBtn.disabled = false;
    }, 2000);
});
</script>

<?php get_footer(); ?>