<?php
/**
 * Template for DUNS Number Service Page
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
                            🏢 Business Credit Specialists
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Get Your DUNS Number Fast
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Establish business credit and qualify for government contracts with your official DUNS Number. Professional application service with expedited processing.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get DUNS - $149
                        </a>
                        <a href="#benefits" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See Benefits
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">48 Hour</div>
                            <div class="text-blue-200 text-sm">Processing</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">💰</div>
                            <div class="font-bold text-lg">Business</div>
                            <div class="text-blue-200 text-sm">Credit Ready</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🏛️</div>
                            <div class="font-bold text-lg">Gov Contract</div>
                            <div class="text-blue-200 text-sm">Eligible</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">DUNS Number Application</h3>
                        <p class="text-gray-600">Free consultation • Same day processing</p>
                    </div>
                    
                    <form id="duns-application-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Legal Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Exact name as registered" required>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Phone</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Address</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Street address" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">City</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">State</label>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                    <option value="">Select state</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <!-- Add more states as needed -->
                                </select>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Primary Business Purpose</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select purpose</option>
                                <option value="establish-credit">Establish business credit</option>
                                <option value="government-contracts">Apply for government contracts</option>
                                <option value="vendor-registration">Vendor registration</option>
                                <option value="banking">Banking requirements</option>
                                <option value="insurance">Insurance applications</option>
                                <option value="other">Other business purpose</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My DUNS Number
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ 48-hour processing • 🏢 Expert verification • 🛡️ Accuracy guarantee
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is DUNS Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is a DUNS Number?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding the Data Universal Numbering System for your business</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Data Universal Numbering System</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            A DUNS Number is a unique nine-digit identifier assigned to businesses by Dun & Bradstreet (D&B). It's used to establish and track your company's credit profile and is required for many business activities.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Think of it as a Social Security Number for your business - it helps lenders, suppliers, and government agencies identify and verify your company's creditworthiness and legitimacy.
                        </p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">You Need a DUNS Number For:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Establishing business credit history</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Applying for government contracts</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Getting approved as a vendor</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Opening business credit accounts</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Obtaining business insurance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">SAM.gov registration</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-cnb-primary p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">💡</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Business Credit Advantage</h4>
                        <p class="text-gray-700">
                            A DUNS Number is the foundation of your business credit profile. With proper management, you can establish credit lines separate from your personal credit, protecting your personal assets and increasing borrowing capacity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">DUNS Number Benefits</h2>
                <p class="text-xl text-gray-600">Why your business needs a DUNS Number</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Credit Building -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">💳</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Build Business Credit</h3>
                    <p class="text-gray-600 mb-6">Establish a credit profile separate from your personal credit to protect personal assets and increase borrowing power.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Separate business credit history</li>
                        <li>• Higher credit limits available</li>
                        <li>• Better loan terms and rates</li>
                        <li>• Asset protection benefits</li>
                    </ul>
                </div>

                <!-- Government Contracts -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">HIGH VALUE</span>
                    </div>
                    <div class="text-4xl mb-6">🏛️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Government Contracts</h3>
                    <p class="text-gray-600 mb-6">Required for federal contracts and grants. Access billions in government spending opportunities.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• SAM.gov registration eligible</li>
                        <li>• Federal contract bidding</li>
                        <li>• Grant application requirements</li>
                        <li>• State and local contracts</li>
                    </ul>
                </div>

                <!-- Vendor Registration -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🤝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Vendor Qualification</h3>
                    <p class="text-gray-600 mb-6">Many large corporations require DUNS Numbers for vendor approval and payment processing.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Corporate vendor approval</li>
                        <li>• Supplier qualification</li>
                        <li>• Payment processing setup</li>
                        <li>• B2B marketplace access</li>
                    </ul>
                </div>

                <!-- Banking & Insurance -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏦</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Banking & Insurance</h3>
                    <p class="text-gray-600 mb-6">Streamline applications for business banking, loans, and commercial insurance policies.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Business loan applications</li>
                        <li>• Commercial insurance</li>
                        <li>• Faster approval processes</li>
                        <li>• Better rates and terms</li>
                    </ul>
                </div>

                <!-- Business Credibility -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏆</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Business Credibility</h3>
                    <p class="text-gray-600 mb-6">Demonstrate legitimacy and professionalism to customers, partners, and suppliers.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Enhanced business reputation</li>
                        <li>• Professional credibility</li>
                        <li>• Customer trust building</li>
                        <li>• Competitive advantage</li>
                    </ul>
                </div>

                <!-- Credit Monitoring -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Credit Monitoring</h3>
                    <p class="text-gray-600 mb-6">Track your business credit score and receive alerts about changes to your credit profile.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Business credit reports</li>
                        <li>• Score monitoring</li>
                        <li>• Alert notifications</li>
                        <li>• Credit improvement tips</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple 3-Step Process</h2>
                <p class="text-xl text-gray-600">Get your DUNS Number in 2-3 business days</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">1</div>
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Gather Information</h3>
                    <p class="text-gray-600 leading-relaxed">We collect your business details and verify all information for accuracy before submission to D&B.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">2</div>
                    <div class="text-4xl mb-4">🚀</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Application</h3>
                    <p class="text-gray-600 leading-relaxed">We submit your complete application directly to Dun & Bradstreet with expedited processing.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">3</div>
                    <div class="text-4xl mb-4">📄</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Receive DUNS Number</h3>
                    <p class="text-gray-600 leading-relaxed">Get your official DUNS Number and begin building your business credit profile immediately.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-gray-50 rounded-lg shadow-lg p-6">
                    <span class="text-3xl">⚡</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">48-Hour Expedited Processing</div>
                        <div class="text-gray-600">Faster than DIY applications that can take 2-4 weeks</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">DUNS Number Service Pricing</h2>
                <p class="text-xl text-gray-600">Professional service vs. DIY application</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- DIY Option -->
                <div class="bg-white rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">DIY D&B Application</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-600">FREE</span>
                    </div>
                    <p class="text-gray-600 mb-6">Apply directly through D&B website</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">2-4 week processing time</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Complex application process</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No error checking</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Risk of delays or rejection</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No ongoing support</span>
                        </li>
                    </ul>
                    
                    <a href="https://www.dnb.com" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
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
                        <span class="text-4xl font-bold text-cnb-primary">$149</span>
                    </div>
                    <p class="text-gray-600 mb-6">Expert DUNS application service</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">48-hour expedited processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Expert application preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Complete accuracy verification</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Direct submission to D&B</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business credit consultation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">90-day support included</span>
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
                        <div class="font-bold text-gray-900">Time is Money</div>
                        <div class="text-gray-600">Get your DUNS Number 10x faster with professional service</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Get Your DUNS Number Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Start building business credit and qualify for government contracts with professional DUNS Number service.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:duns@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: duns@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold text-sm">48-Hour Processing</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💳</div>
                    <div class="font-semibold text-sm">Credit Building</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🏛️</div>
                    <div class="font-semibold text-sm">Gov Contracts</div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Form handling
document.getElementById('duns-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our business credit specialist will contact you within 1 hour to process your DUNS application.');
});
</script>

<?php get_footer(); ?>