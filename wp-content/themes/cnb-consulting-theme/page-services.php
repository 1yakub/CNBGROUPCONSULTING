<?php
/**
 * Template Name: Services Page
 * Description: Template for displaying the services overview page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Our Services</h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed">
                    Comprehensive business formation and legal services to launch, protect, and grow your business with confidence.
                </p>
            </div>
        </div>
    </section>

    <!-- Services Categories -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Business Solutions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to start, run, and protect your business - all in one place</p>
            </div>

            <!-- Formation Services -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-4">💼 Business Formation Services</h3>
                    <p class="text-lg text-gray-600">Start your business with the right legal structure</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- LLC Formation -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">🏢</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">LLC Formation</h4>
                        <p class="text-gray-600 mb-4">Limited Liability Company formation with personal asset protection and tax flexibility.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Personal asset protection</li>
                            <li>• Tax flexibility options</li>
                            <li>• Simple management structure</li>
                            <li>• All 50 states available</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $299</div>
                        <a href="<?php echo home_url('/services/llc-formation'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- Corporation Formation -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">🏛️</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Corporation Formation</h4>
                        <p class="text-gray-600 mb-4">C-Corp or S-Corp formation for businesses seeking investment or complex ownership.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Maximum liability protection</li>
                            <li>• Easy to raise capital</li>
                            <li>• Formal business structure</li>
                            <li>• Stock options available</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $399</div>
                        <a href="<?php echo home_url('/services/corporation-formation'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- Nonprofit Formation -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">❤️</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Nonprofit Formation</h4>
                        <p class="text-gray-600 mb-4">501(c)(3) nonprofit formation with tax-exempt status and donation eligibility.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Tax-exempt status</li>
                            <li>• Accept tax-deductible donations</li>
                            <li>• Grant eligibility</li>
                            <li>• IRS application assistance</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">Starting at $799</div>
                        <a href="<?php echo home_url('/services/nonprofit-formation'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Legal Documents -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-4">📋 Legal Documents & Agreements</h3>
                    <p class="text-lg text-gray-600">Professional legal documents to protect your business</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Operating Agreement -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="text-3xl mb-3">📄</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Operating Agreement</h4>
                        <p class="text-gray-600 text-sm mb-3">Custom LLC operating agreements defining ownership and management.</p>
                        <div class="text-cnb-primary font-bold mb-3">$199</div>
                        <a href="<?php echo home_url('/services/operating-agreement'); ?>" class="text-cnb-primary hover:underline text-sm font-semibold">Learn More →</a>
                    </div>

                    <!-- Buy-Sell Agreement -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="text-3xl mb-3">🤝</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Buy-Sell Agreement</h4>
                        <p class="text-gray-600 text-sm mb-3">Agreements for business ownership transfers and exits.</p>
                        <div class="text-cnb-primary font-bold mb-3">$299</div>
                        <a href="<?php echo home_url('/services/buy-sell-agreement'); ?>" class="text-cnb-primary hover:underline text-sm font-semibold">Learn More →</a>
                    </div>

                    <!-- Employment Agreement -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="text-3xl mb-3">👥</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Employment Agreement</h4>
                        <p class="text-gray-600 text-sm mb-3">Professional employment contracts and NDA agreements.</p>
                        <div class="text-cnb-primary font-bold mb-3">$149</div>
                        <a href="<?php echo home_url('/services/employment-agreement'); ?>" class="text-cnb-primary hover:underline text-sm font-semibold">Learn More →</a>
                    </div>

                    <!-- Contract Review -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow">
                        <div class="text-3xl mb-3">🔍</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Contract Review</h4>
                        <p class="text-gray-600 text-sm mb-3">Professional review of existing contracts and agreements.</p>
                        <div class="text-cnb-primary font-bold mb-3">$99</div>
                        <a href="<?php echo home_url('/services/contract-review'); ?>" class="text-cnb-primary hover:underline text-sm font-semibold">Learn More →</a>
                    </div>
                </div>
            </div>

            <!-- Compliance Services -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-4">✅ Compliance & Ongoing Services</h3>
                    <p class="text-lg text-gray-600">Keep your business compliant and in good standing</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Registered Agent -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">📬</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Registered Agent Service</h4>
                        <p class="text-gray-600 mb-4">Professional registered agent service with mail forwarding and compliance alerts.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Privacy protection</li>
                            <li>• Mail scanning & forwarding</li>
                            <li>• Compliance notifications</li>
                            <li>• Available in all 50 states</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$99/year</div>
                        <a href="<?php echo home_url('/services/registered-agent'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- Annual Report -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">📊</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Annual Report Filing</h4>
                        <p class="text-gray-600 mb-4">Professional annual report preparation and filing to maintain good standing.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Timely filing guarantee</li>
                            <li>• Deadline monitoring</li>
                            <li>• State fee included</li>
                            <li>• Good standing maintenance</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$149 + state fees</div>
                        <a href="<?php echo home_url('/services/annual-report'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- EIN Application -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">🔢</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">EIN Number Service</h4>
                        <p class="text-gray-600 mb-4">Fast EIN (Tax ID) number application with same-day processing available.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Same-day processing</li>
                            <li>• IRS application handling</li>
                            <li>• No IRS fees</li>
                            <li>• Digital delivery</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$99</div>
                        <a href="<?php echo home_url('/services/ein-number'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>

            <!-- Business Licenses & Protection -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-4">🛡️ Licenses & Protection Services</h3>
                    <p class="text-lg text-gray-600">Protect your business name and obtain required licenses</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Business License -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">📜</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Business License Research</h4>
                        <p class="text-gray-600 mb-4">Complete research of required licenses and permits for your business type and location.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Federal, state & local research</li>
                            <li>• Industry-specific requirements</li>
                            <li>• Application assistance</li>
                            <li>• Compliance guidance</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$199</div>
                        <a href="<?php echo home_url('/services/business-license'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- Trademark -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">®️</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">Trademark Registration</h4>
                        <p class="text-gray-600 mb-4">Federal trademark registration to protect your business name and brand.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Comprehensive trademark search</li>
                            <li>• USPTO application filing</li>
                            <li>• Office action responses</li>
                            <li>• 10-year protection</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$799 + USPTO fees</div>
                        <a href="<?php echo home_url('/services/trademark'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>

                    <!-- DBA Registration -->
                    <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                        <div class="text-4xl mb-4">✏️</div>
                        <h4 class="text-xl font-bold text-gray-900 mb-3">DBA Registration</h4>
                        <p class="text-gray-600 mb-4">"Doing Business As" name registration for operating under a trade name.</p>
                        <ul class="text-sm text-gray-600 space-y-1 mb-6">
                            <li>• Trade name registration</li>
                            <li>• Publishing requirements</li>
                            <li>• State compliance</li>
                            <li>• Banking authorization</li>
                        </ul>
                        <div class="text-cnb-primary font-bold text-lg mb-4">$149 + state fees</div>
                        <a href="<?php echo home_url('/services/dba-registration'); ?>" class="inline-block bg-cnb-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Learn More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Simple Process</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Getting started is easy with our proven 4-step process</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Choose Your Service</h3>
                    <p class="text-gray-600">Select the business service that fits your needs and goals.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Free Consultation</h3>
                    <p class="text-gray-600">Speak with our experts to customize your service package.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">We Handle Everything</h3>
                    <p class="text-gray-600">Our team manages all paperwork, filing, and compliance requirements.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-4">4</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">You're Ready!</h3>
                    <p class="text-gray-600">Receive your completed documents and ongoing support.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Business?</h2>
            <p class="text-xl text-blue-100 mb-8">
                Choose from our comprehensive business services or schedule a free consultation to discuss your specific needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                    Free Consultation
                </a>
                <a href="#services" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition" onclick="document.querySelector('#primary').scrollIntoView({behavior: 'smooth'})">
                    Browse Services
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>