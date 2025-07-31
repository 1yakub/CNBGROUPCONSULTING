<?php
/**
 * Rate Request Form Template Part
 * Clean contact form for custom quotes - no pricing shown
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section id="rate-form" class="py-16 lg:py-24 bg-white relative overflow-hidden">
    
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80')] bg-cover bg-center opacity-5"></div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <header class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Get Your Custom Quote
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Tell us about your business needs and we'll provide a personalized quote within 24 hours
            </p>
        </header>
        
        <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
            
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" class="space-y-6">
                
                <input type="hidden" name="action" value="cnb_rate_request">
                <?php wp_nonce_field('cnb_rate_request', 'cnb_nonce'); ?>
                
                <!-- Contact Information -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
                            First Name *
                        </label>
                        <input type="text" id="first_name" name="first_name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Last Name *
                        </label>
                        <input type="text" id="last_name" name="last_name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email Address *
                        </label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                    </div>
                </div>
                
                <!-- Business Information -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="business_type" class="block text-sm font-medium text-gray-700 mb-2">
                            Business Type *
                        </label>
                        <select id="business_type" name="business_type" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                            <option value="">Select Business Type</option>
                            <option value="llc">LLC</option>
                            <option value="corporation">Corporation</option>
                            <option value="partnership">Partnership</option>
                            <option value="existing">Existing Business</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700 mb-2">
                            Formation Country *
                        </label>
                        <select id="country" name="country" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                            <option value="">Select Country</option>
                            <option value="usa">United States</option>
                            <option value="uk">United Kingdom</option>
                            <option value="uae">United Arab Emirates</option>
                        </select>
                    </div>
                </div>
                
                <!-- Services Needed -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-4">
                        Services Needed * (Select all that apply)
                    </label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="company_formation" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>Company Formation</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="banking" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>Business Banking</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="ein" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>EIN Service</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="registered_agent" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>Registered Agent</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="ecommerce" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>E-Commerce Setup</span>
                        </label>
                        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
                            <input type="checkbox" name="services[]" value="tax_filing" class="text-cnb-primary focus:ring-cnb-primary">
                            <span>Tax Filing</span>
                        </label>
                    </div>
                </div>
                
                <!-- Timeline -->
                <div>
                    <label for="timeline" class="block text-sm font-medium text-gray-700 mb-2">
                        When do you need this completed? *
                    </label>
                    <select id="timeline" name="timeline" required 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
                        <option value="">Select Timeline</option>
                        <option value="asap">As soon as possible</option>
                        <option value="1-2weeks">1-2 weeks</option>
                        <option value="1month">Within 1 month</option>
                        <option value="3months">Within 3 months</option>
                        <option value="planning">Just planning ahead</option>
                    </select>
                </div>
                
                <!-- Additional Details -->
                <div>
                    <label for="details" class="block text-sm font-medium text-gray-700 mb-2">
                        Additional Details
                    </label>
                    <textarea id="details" name="details" rows="4" 
                              placeholder="Tell us more about your business goals, specific requirements, or any questions you have..."
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors resize-none"></textarea>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center pt-4">
                    <button type="submit" 
                            class="bg-gradient-to-r from-cnb-secondary to-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:from-yellow-400 hover:to-cnb-secondary hover:scale-105 transition-all shadow-xl inline-flex items-center">
                        <span>Get My Custom Quote</span>
                        <!-- Heroicon: paper-airplane -->
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </button>
                </div>
                
            </form>
            
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-12 text-center">
            <div class="flex flex-wrap justify-center items-center gap-8 text-gray-500">
                <div class="flex items-center space-x-2">
                    <!-- Heroicon: shield-check -->
                    <svg class="w-5 h-5 text-cnb-primary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-sm">100% Secure</span>
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Heroicon: clock -->
                    <svg class="w-5 h-5 text-cnb-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm">Response in 24 Hours</span>
                </div>
                <div class="flex items-center space-x-2">
                    <!-- Heroicon: phone -->
                    <svg class="w-5 h-5 text-cnb-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span class="text-sm">Free Consultation</span>
                </div>
            </div>
        </div>
        
    </div>
    
</section>