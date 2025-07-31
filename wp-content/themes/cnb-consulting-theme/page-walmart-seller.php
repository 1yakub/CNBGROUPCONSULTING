<?php
/**
 * Template for Walmart Seller Service Page
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
                            🛒 Walmart Marketplace Experts
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Walmart Seller Account Setup & Optimization
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Complete Walmart Marketplace setup with business formation, tax optimization, and seller account approval. Diversify beyond Amazon with America's #1 retailer.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#packages" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Start Selling - $399
                        </a>
                        <a href="#benefits" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            Why Walmart
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🎯</div>
                            <div class="font-bold text-lg">Invitation</div>
                            <div class="text-blue-200 text-sm">Only Setup</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">💰</div>
                            <div class="font-bold text-lg">Higher</div>
                            <div class="text-blue-200 text-sm">Profit Margins</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🚀</div>
                            <div class="font-bold text-lg">Less</div>
                            <div class="text-blue-200 text-sm">Competition</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Walmart Seller Assessment</h3>
                        <p class="text-gray-600">Free consultation • Approval strategy</p>
                    </div>
                    
                    <form id="walmart-seller-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Full Name" required>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Current E-commerce Experience</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select experience level</option>
                                <option value="new">New to e-commerce</option>
                                <option value="amazon-seller">Currently sell on Amazon</option>
                                <option value="other-platforms">Sell on other platforms</option>
                                <option value="experienced">Experienced multi-platform seller</option>
                                <option value="wholesale">Wholesale/B2B experience</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Product Category Interest</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select category</option>
                                <option value="home-garden">Home & Garden</option>
                                <option value="electronics">Electronics</option>
                                <option value="clothing">Clothing & Accessories</option>
                                <option value="health-beauty">Health & Beauty</option>
                                <option value="sports-outdoors">Sports & Outdoors</option>
                                <option value="baby-kids">Baby & Kids</option>
                                <option value="automotive">Automotive</option>
                                <option value="grocery">Grocery & Food</option>
                                <option value="other">Other Category</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Revenue Goal</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="">Select goal</option>
                                <option value="under-10k">Under $10,000/month</option>
                                <option value="10k-25k">$10,000 - $25,000/month</option>
                                <option value="25k-50k">$25,000 - $50,000/month</option>
                                <option value="50k-100k">$50,000 - $100,000/month</option>
                                <option value="over-100k">Over $100,000/month</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Current Business Status</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select status</option>
                                <option value="no-business">No business entity yet</option>
                                <option value="have-llc">Have LLC/Corporation</option>
                                <option value="sole-proprietor">Sole proprietor</option>
                                <option value="need-formation">Need business formation</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My Walmart Strategy
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free consultation • 🎯 Approval strategy • 🚀 Expert setup
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Walmart Marketplace -->
    <section id="benefits" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Sell on Walmart Marketplace?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">America's largest retailer offers unique advantages for serious sellers</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <!-- Less Competition -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏆</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Less Competition</h3>
                    <p class="text-gray-600 mb-6">Invitation-only platform means significantly fewer sellers competing for customers compared to Amazon's open marketplace.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Invitation-only seller access</li>
                        <li>• Stricter seller requirements</li>
                        <li>• Quality over quantity approach</li>
                        <li>• Better product visibility</li>
                    </ul>
                </div>

                <!-- Higher Profit Margins -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">BIG ADVANTAGE</span>
                    </div>
                    <div class="text-4xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Higher Profit Margins</h3>
                    <p class="text-gray-600 mb-6">Lower fees and less price competition translate to better profit margins on Walmart vs Amazon.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Lower referral fees (avg 6-15%)</li>
                        <li>• No monthly subscription fees</li>
                        <li>• Less price racing to bottom</li>
                        <li>• Premium brand positioning</li>
                    </ul>
                </div>

                <!-- Massive Customer Base -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🎯</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Huge Customer Base</h3>
                    <p class="text-gray-600 mb-6">Access to Walmart's 240+ million monthly website visitors and loyal customer base seeking quality products.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 240M+ monthly visitors</li>
                        <li>• Trusted Walmart brand</li>
                        <li>• Omnichannel shoppers</li>
                        <li>• Growing online presence</li>
                    </ul>
                </div>

                <!-- Premium Brand Association -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏪</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Brand Association</h3>
                    <p class="text-gray-600 mb-6">Benefit from Walmart's trusted brand reputation and customer loyalty for instant credibility.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Trusted retail brand</li>
                        <li>• Customer confidence</li>
                        <li>• Quality expectations</li>
                        <li>• Professional marketplace</li>
                    </ul>
                </div>

                <!-- Multi-Channel Growth -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📈</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Growth Opportunities</h3>
                    <p class="text-gray-600 mb-6">Expand beyond Amazon with Walmart's growing marketplace and omnichannel opportunities.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Diversify revenue streams</li>
                        <li>• Reduce Amazon dependency</li>
                        <li>• In-store pickup options</li>
                        <li>• Walmart+ integration</li>
                    </ul>
                </div>

                <!-- Better Support -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🤝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Better Seller Support</h3>
                    <p class="text-gray-600 mb-6">Dedicated account management and support teams help serious sellers succeed on the platform.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Dedicated account managers</li>
                        <li>• Seller success teams</li>
                        <li>• Direct communication</li>
                        <li>• Growth partnerships</li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-cnb-primary p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">📊</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Success Statistics</h4>
                        <p class="text-gray-700">
                            Walmart sellers typically see 20-30% higher profit margins compared to Amazon due to lower fees and less competition. The platform is growing 40%+ year-over-year.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Walmart Seller Solutions</h2>
                <p class="text-xl text-gray-600">Everything you need to succeed on Walmart Marketplace</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Setup -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏢</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Business Formation</h3>
                    <p class="text-gray-600 mb-6">Proper business entity setup optimized for e-commerce selling and tax benefits.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• LLC or Corporation formation</li>
                        <li>• EIN tax ID number</li>
                        <li>• Business bank account</li>
                        <li>• E-commerce optimization</li>
                    </ul>
                </div>

                <!-- Walmart Account Setup -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🛒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Account Setup & Approval</h3>
                    <p class="text-gray-600 mb-6">Professional seller account application and approval process management.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Invitation application</li>
                        <li>• Account approval strategy</li>
                        <li>• Profile optimization</li>
                        <li>• Seller dashboard setup</li>
                    </ul>
                </div>

                <!-- Product Listing -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📦</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Product Listing Optimization</h3>
                    <p class="text-gray-600 mb-6">Professional product listings that convert visitors into buyers.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• SEO-optimized titles</li>
                        <li>• Professional images</li>
                        <li>• Compelling descriptions</li>
                        <li>• Category optimization</li>
                    </ul>
                </div>

                <!-- Tax Optimization -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tax Optimization</h3>
                    <p class="text-gray-600 mb-6">E-commerce tax strategies to maximize deductions and minimize liability.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Sales tax compliance</li>
                        <li>• Expense tracking setup</li>
                        <li>• Multi-state tax planning</li>
                        <li>• Quarterly planning</li>
                    </ul>
                </div>

                <!-- Inventory Management -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Fulfillment Setup</h3>
                    <p class="text-gray-600 mb-6">Walmart fulfillment services setup and inventory management systems.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Walmart Fulfillment Services</li>
                        <li>• Inventory planning</li>
                        <li>• Shipping optimization</li>
                        <li>• 2-day delivery setup</li>
                    </ul>
                </div>

                <!-- Ongoing Support -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🚀</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Growth & Optimization</h3>
                    <p class="text-gray-600 mb-6">Ongoing support to scale your Walmart marketplace business.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Performance analytics</li>
                        <li>• Advertising campaigns</li>
                        <li>• Category expansion</li>
                        <li>• Account health monitoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Walmart Seller Packages</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Complete solutions for Walmart Marketplace success</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Starter Package -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Walmart Starter</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$399</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Essential setup for new sellers</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business formation (if needed)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">EIN tax ID number</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Walmart seller application</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Basic account setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Getting started guide</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                        Choose Starter
                    </a>
                </div>

                <!-- Professional Package -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ MOST POPULAR
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Walmart Professional</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$699</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Complete seller optimization</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Starter Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Product listing optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Tax optimization setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Fulfillment services setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Brand profile optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">3 months support included</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Choose Professional
                    </a>
                </div>

                <!-- Enterprise Package -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Walmart Enterprise</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$999</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Full-service business launch</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Professional Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Multi-category setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Advanced tax planning</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Advertising campaign setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">6 months bookkeeping</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">12 months VIP support</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition">
                        Choose Enterprise
                    </a>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center space-x-3 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <span class="text-3xl">🎯</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Invitation-Only Platform</div>
                        <div class="text-gray-600">We help you get approved with proven application strategies</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Walmart Marketplace FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about selling on Walmart</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('walmart-faq-1')">
                        <h3 class="font-semibold text-gray-900">How do I get approved to sell on Walmart?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-walmart-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="walmart-faq-1">
                        <p class="text-gray-600">Walmart Marketplace is invitation-only. You need to apply and meet their requirements including having a legitimate business, quality products, good customer service history, and meeting their performance standards. We help optimize your application for approval.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('walmart-faq-2')">
                        <h3 class="font-semibold text-gray-900">What are Walmart's seller fees?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-walmart-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="walmart-faq-2">
                        <p class="text-gray-600">Walmart charges referral fees ranging from 6-15% depending on category (typically lower than Amazon). There are no monthly subscription fees, making it more profitable for many sellers. Additional fees may apply for fulfillment services.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('walmart-faq-3')">
                        <h3 class="font-semibold text-gray-900">Can I sell on both Amazon and Walmart?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-walmart-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="walmart-faq-3">
                        <p class="text-gray-600">Absolutely! Many successful sellers use both platforms to diversify revenue and reduce dependency on any single marketplace. We help you optimize for both platforms while managing inventory and pricing strategies.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('walmart-faq-4')">
                        <h3 class="font-semibold text-gray-900">Does Walmart offer fulfillment services like Amazon FBA?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-walmart-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="walmart-faq-4">
                        <p class="text-gray-600">Yes, Walmart Fulfillment Services (WFS) provides storage, packing, shipping, and customer service similar to Amazon FBA. This enables 2-day delivery and helps improve your seller metrics on the platform.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('walmart-faq-5')">
                        <h3 class="font-semibold text-gray-900">How long does it take to get approved and start selling?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-walmart-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="walmart-faq-5">
                        <p class="text-gray-600">The approval process typically takes 2-4 weeks once you submit a complete application. With our professional setup service, you can usually start selling within 30-45 days from beginning the process, including business formation if needed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Selling on Walmart Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Diversify beyond Amazon with higher profit margins and less competition. Get approved and optimized by Walmart marketplace experts.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:walmart@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: walmart@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🎯</div>
                    <div class="font-semibold text-sm">Approval Strategy</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Higher Margins</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🚀</div>
                    <div class="font-semibold text-sm">Less Competition</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🏪</div>
                    <div class="font-semibold text-sm">Trusted Platform</div>
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
document.getElementById('walmart-seller-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our Walmart marketplace specialist will contact you within 1 hour with your custom strategy.');
});
</script>

<?php get_footer(); ?>