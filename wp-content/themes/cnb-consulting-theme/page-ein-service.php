<?php
/**
 * Template for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div>
                        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
                            ⚡ Same Day EIN Processing
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Get Your EIN Tax ID Number Today
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Fast, reliable EIN application service with IRS-certified professionals. Get your Federal Tax ID in hours, not weeks.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get EIN Now - $99
                        </a>
                        <a href="#process" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            How It Works
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">Same Day</div>
                            <div class="text-blue-200 text-sm">Processing</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🏆</div>
                            <div class="font-bold text-lg">IRS Certified</div>
                            <div class="text-blue-200 text-sm">Professionals</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">100%</div>
                            <div class="text-blue-200 text-sm">Guarantee</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Get Your EIN Today</h3>
                        <p class="text-gray-600">Fast application • Same day processing</p>
                    </div>
                    
                    <form id="ein-application-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Legal Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Exact name as filed with state" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Entity Type</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select entity type</option>
                                <option value="LLC">LLC (Limited Liability Company)</option>
                                <option value="Corporation">Corporation</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Sole Proprietorship">Sole Proprietorship</option>
                                <option value="Non-Profit">Non-Profit Organization</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State of Formation</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select state</option>
                                <option value="DE">Delaware</option>
                                <option value="NV">Nevada</option>
                                <option value="WY">Wyoming</option>
                                <option value="TX">Texas</option>
                                <option value="FL">Florida</option>
                                <option value="CA">California</option>
                                <option value="NY">New York</option>
                                <!-- Add more states as needed -->
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My EIN - $99
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Same day processing • 🛡️ 100% guarantee • 📞 Expert support
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is an EIN Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is an EIN?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding your Federal Tax ID Number and why you need it</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Employer Identification Number (EIN)</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            An EIN, also known as a Federal Tax ID Number, is a unique nine-digit number assigned by the IRS to identify your business for tax purposes. It's required for most business activities including opening bank accounts, filing taxes, and hiring employees.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Even if you don't have employees, most banks require an EIN to open a business account, and it provides privacy protection by keeping your Social Security Number separate from your business activities.
                        </p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">You Need an EIN If:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You have a business with employees</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You operate as an LLC or Corporation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You want to open a business bank account</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You need to file business tax returns</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You want privacy protection for your SSN</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You plan to apply for business credit</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-cnb-secondary p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">💡</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Pro Tip</h4>
                        <p class="text-gray-700">
                            Even sole proprietors without employees should get an EIN to protect their Social Security Number and establish business credit history.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple 3-Step Process</h2>
                <p class="text-xl text-gray-600">Get your EIN in hours, not weeks</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">1</div>
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Information</h3>
                    <p class="text-gray-600 leading-relaxed">Provide your business information through our secure form. We'll verify everything and contact you within 30 minutes.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">2</div>
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">IRS Application</h3>
                    <p class="text-gray-600 leading-relaxed">Our IRS-certified professionals prepare and submit your EIN application directly to the IRS with expedited processing.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">3</div>
                    <div class="text-4xl mb-4">📄</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Receive Your EIN</h3>
                    <p class="text-gray-600 leading-relaxed">Get your official EIN confirmation letter from the IRS via email and postal mail within the same business day.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-white rounded-lg shadow-lg p-6">
                    <span class="text-3xl">⚡</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Same Day Processing</div>
                        <div class="text-gray-600">Most EINs processed within 4-6 hours</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
                <p class="text-xl text-gray-600">Professional EIN service at an affordable fixed rate</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- DIY Option -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">DIY IRS Website</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-600">FREE</span>
                    </div>
                    <p class="text-gray-600 mb-6">Apply directly through IRS website</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Complex IRS forms and process</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">2-4 week processing time</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No error checking or support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Risk of delays or rejection</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Business hours only (limited)</span>
                        </li>
                    </ul>
                    
                    <a href="https://www.irs.gov/businesses/small-businesses-self-employed/apply-for-an-employer-identification-number-ein-online" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Try DIY Route
                    </a>
                </div>

                <!-- Professional Service -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ RECOMMENDED
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Service</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$99</span>
                    </div>
                    <p class="text-gray-600 mb-6">Expert EIN application service</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Same day processing (4-6 hours)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">IRS-certified professionals</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Complete error checking</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Direct phone & email support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">100% accuracy guarantee</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Official IRS confirmation letter</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Started Now
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                    <span class="text-3xl">💰</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Save Time & Avoid Errors</div>
                        <div class="text-gray-600">Professional service pays for itself in time saved</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about getting an EIN</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-1')">
                        <h3 class="font-semibold text-gray-900">How long does it take to get my EIN?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ein-faq-1">
                        <p class="text-gray-600">With our professional service, most EINs are processed within 4-6 hours on the same business day. The IRS DIY website can take 2-4 weeks for processing.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-2')">
                        <h3 class="font-semibold text-gray-900">Do I need an EIN if I'm a sole proprietor?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ein-faq-2">
                        <p class="text-gray-600">While not always required, getting an EIN as a sole proprietor provides privacy protection for your SSN and is necessary for opening business bank accounts or establishing business credit.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-3')">
                        <h3 class="font-semibold text-gray-900">Can I get an EIN for free from the IRS?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ein-faq-3">
                        <p class="text-gray-600">Yes, the IRS doesn't charge for EIN applications. However, their process is complex and slow. Our $99 fee covers professional preparation, expedited processing, error checking, and support.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-4')">
                        <h3 class="font-semibold text-gray-900">What if my EIN application is rejected?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ein-faq-4">
                        <p class="text-gray-600">With our professional service and error checking, rejections are extremely rare. If it happens, we'll fix any issues and resubmit at no additional charge under our 100% guarantee.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-5')">
                        <h3 class="font-semibold text-gray-900">Do I need business formation before getting an EIN?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ein-faq-5">
                        <p class="text-gray-600">For LLCs and Corporations, yes - you need to file with your state first. For sole proprietorships, you can get an EIN without formal business registration. We can help with business formation too!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Get Your EIN Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Don't wait weeks for the IRS. Get your Federal Tax ID Number processed professionally in hours.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:ein@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: ein@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold text-sm">Same Day Processing</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">100% Guarantee</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Fixed $99 Fee</div>
                </div>
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

// Form handling
document.getElementById('ein-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We\'ll contact you within 30 minutes to confirm your EIN application details.');
});
</script>

<?php get_footer(); ?>