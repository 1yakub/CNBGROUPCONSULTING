<?php
/**
 * Contact Page Form Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Contact Form Section -->
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
                            I consent to being contacted about CNB Group Consulting services. *
                        </label>
                    </div>

                    <button type="submit" 
                        class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105 flex items-center justify-center space-x-2">
                        <span>Send Message</span>
                        <span>→</span>
                    </button>
                </form>
            </div>
            
            <?php get_template_part('template-parts/contact/info'); ?>
        </div>
    </div>
</section>

<script>
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