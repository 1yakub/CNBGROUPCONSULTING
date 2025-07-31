<?php
/**
 * Template for Amazon Seller Service Page
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
                            🚀 Amazon FBA Specialists
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Complete Amazon Seller Setup & Support
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            From business formation to FBA optimization - we handle everything you need to succeed as an Amazon seller and scale your e-commerce business.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#packages" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Start Selling - $599
                        </a>
                        <a href="#services" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See All Services
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📦</div>
                            <div class="font-bold text-lg">FBA Ready</div>
                            <div class="text-blue-200 text-sm">Setup</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">💰</div>
                            <div class="font-bold text-lg">Tax</div>
                            <div class="text-blue-200 text-sm">Optimized</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">LLC</div>
                            <div class="text-blue-200 text-sm">Protection</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Amazon Seller Assessment</h3>
                        <p class="text-gray-600">Free consultation • Custom recommendations</p>
                    </div>
                    
                    <form id="amazon-seller-form" class="space-y-4">
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Selling Experience</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select experience level</option>
                                <option value="new">New to Amazon selling</option>
                                <option value="beginner">Beginner (0-6 months)</option>
                                <option value="intermediate">Intermediate (6-18 months)</option>
                                <option value="experienced">Experienced (18+ months)</option>
                                <option value="expert">Expert seller (3+ years)</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Revenue Goal</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="">Select revenue goal</option>
                                <option value="under-5k">Under $5,000/month</option>
                                <option value="5k-10k">$5,000 - $10,000/month</option>
                                <option value="10k-25k">$10,000 - $25,000/month</option>
                                <option value="25k-50k">$25,000 - $50,000/month</option>
                                <option value="over-50k">Over $50,000/month</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Primary Interest</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select primary need</option>
                                <option value="business-setup">Business Formation & Setup</option>
                                <option value="account-optimization">Account Optimization</option>
                                <option value="tax-planning">Tax Planning & Savings</option>
                                <option value="fba-setup">FBA Setup & Management</option>
                                <option value="brand-protection">Brand Protection</option>
                                <option value="full-service">Complete Done-for-You Service</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My Custom Plan
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            Free consultation • No obligation • Amazon FBA experts
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section id="services" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Amazon Seller Solutions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to build and scale your Amazon FBA business</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Business Formation -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🏢</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Business Formation</h3>
                    <p class="text-gray-600 mb-6">Proper LLC setup with Amazon-optimized structure for tax benefits and liability protection.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• LLC formation in best state</li>
                        <li>• EIN tax ID number</li>
                        <li>• Operating agreement</li>
                        <li>• Registered agent service</li>
                        <li>• Business bank account setup</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">Included in packages</div>
                </div>

                <!-- Amazon Account Setup -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">MOST POPULAR</span>
                    </div>
                    <div class="text-4xl mb-6">🛒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Amazon Account Setup</h3>
                    <p class="text-gray-600 mb-6">Professional seller account setup with FBA configuration and brand registry preparation.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Professional seller account</li>
                        <li>• FBA enrollment & setup</li>
                        <li>• Tax settings optimization</li>
                        <li>• Brand registry preparation</li>
                        <li>• Account health monitoring</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">Starting at $299</div>
                </div>

                <!-- Tax Optimization -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Tax Optimization</h3>
                    <p class="text-gray-600 mb-6">Advanced tax strategies specifically designed for Amazon FBA sellers to minimize tax liability.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• FBA expense tracking setup</li>
                        <li>• Inventory tax planning</li>
                        <li>• Multi-state tax strategy</li>
                        <li>• Quarterly tax planning</li>
                        <li>• Amazon fee deductions</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">Starting at $399</div>
                </div>

                <!-- Brand Protection -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Brand Protection</h3>
                    <p class="text-gray-600 mb-6">Trademark registration and brand protection services to secure your Amazon business.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Trademark search & filing</li>
                        <li>• Amazon Brand Registry</li>
                        <li>• Brand protection monitoring</li>
                        <li>• Anti-counterfeiting setup</li>
                        <li>• IP enforcement support</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">Starting at $799</div>
                </div>

                <!-- Bookkeeping & Analytics -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Bookkeeping & Analytics</h3>
                    <p class="text-gray-600 mb-6">Professional bookkeeping and advanced analytics to track profitability and optimize performance.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• Monthly bookkeeping</li>
                        <li>• Profit & loss tracking</li>
                        <li>• Amazon fee analysis</li>
                        <li>• Inventory valuation</li>
                        <li>• Performance dashboards</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">$299/month</div>
                </div>

                <!-- Scale & Growth -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🚀</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Scale & Growth</h3>
                    <p class="text-gray-600 mb-6">Advanced strategies for scaling your Amazon business including international expansion.</p>
                    <ul class="text-sm text-gray-600 space-y-2 mb-6">
                        <li>• International marketplace setup</li>
                        <li>• Multi-channel integration</li>
                        <li>• Advanced PPC strategies</li>
                        <li>• Wholesale & private label</li>
                        <li>• Exit planning & valuation</li>
                    </ul>
                    <div class="text-cnb-primary font-bold text-lg">Custom pricing</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <section id="packages" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Amazon Seller Packages</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Choose your complete solution for Amazon FBA success</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Starter Package -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative">
                    <div class="text-center mb-8">
                        <div class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium mb-4">Starter</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">FBA Starter</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$599</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Perfect for new Amazon sellers</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business LLC Formation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">EIN Tax ID Number</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Amazon Seller Account Setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">FBA Enrollment</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Basic Tax Setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Getting Started Guide</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition text-center">
                        Choose Starter
                    </a>
                </div>

                <!-- Growth Package (Most Popular) -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ MOST POPULAR
                        </div>
                    </div>

                    <div class="text-center mb-8">
                        <div class="inline-block bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-sm font-medium mb-4">Growth</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">FBA Growth</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$999</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Complete optimization for serious sellers</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Starter Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Advanced Tax Optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Brand Registry Preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business Banking Setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Bookkeeping System Setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">3 Months Expert Support</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition text-center">
                        Choose Growth
                    </a>
                </div>

                <!-- Premium Package -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative">
                    <div class="text-center mb-8">
                        <div class="inline-block bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium mb-4">Premium</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">FBA Premium</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$1,499</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Full-service Amazon business launch</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Growth Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Trademark Filing & Brand Registry</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">6 Months Bookkeeping Included</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Product Research Consultation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">International Expansion Planning</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">12 Months VIP Support</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition text-center">
                        Choose Premium
                    </a>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center space-x-3 bg-white rounded-lg shadow-lg p-6">
                    <span class="text-3xl">🚀</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Launch Your Amazon Business in 30 Days</div>
                        <div class="text-gray-600">Complete setup with ongoing support and optimization</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Amazon Seller Success Stories</h2>
                <p class="text-xl text-gray-600">Real results from our FBA clients</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <div class="text-4xl mb-4">📈</div>
                    <div class="text-3xl font-bold text-cnb-primary mb-2">$50K</div>
                    <div class="text-gray-600 mb-4">Monthly Revenue in 6 Months</div>
                    <p class="text-sm text-gray-500">Private label beauty products seller who started with our Growth package</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <div class="text-4xl mb-4">💰</div>
                    <div class="text-3xl font-bold text-cnb-primary mb-2">$15K</div>
                    <div class="text-gray-600 mb-4">Annual Tax Savings</div>
                    <p class="text-sm text-gray-500">Home goods seller optimized structure and quarterly tax planning</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <div class="text-4xl mb-4">🏆</div>
                    <div class="text-3xl font-bold text-cnb-primary mb-2">3 Brands</div>
                    <div class="text-gray-600 mb-4">Protected & Registered</div>
                    <p class="text-sm text-gray-500">Electronics seller with full trademark protection and Brand Registry</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Amazon Seller FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about starting and scaling your Amazon business</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-1')">
                        <h3 class="font-semibold text-gray-900">Do I need an LLC to sell on Amazon?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="amazon-faq-1">
                        <p class="text-gray-600">While not required, an LLC provides liability protection, tax benefits, and professional credibility. Most successful Amazon sellers operate as LLCs to protect personal assets and optimize taxes.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-2')">
                        <h3 class="font-semibold text-gray-900">How much can I save on taxes as an Amazon seller?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="amazon-faq-2">
                        <p class="text-gray-600">Amazon sellers can typically save 20-30% on taxes through proper business structure, expense tracking, inventory deductions, and strategic planning. Our clients average $8,000-$15,000 in annual tax savings.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-3')">
                        <h3 class="font-semibold text-gray-900">What's included in Amazon Brand Registry setup?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="amazon-faq-3">
                        <p class="text-gray-600">We handle trademark research and filing, brand registry application, enhanced brand content setup, and anti-counterfeiting protection. This typically increases sales by 15-25% and provides better control over your listings.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-4')">
                        <h3 class="font-semibold text-gray-900">How long does it take to set up everything?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="amazon-faq-4">
                        <p class="text-gray-600">Basic setup (LLC, EIN, Amazon account) takes 7-10 business days. Complete setup with brand protection and advanced optimization takes 2-4 weeks. We handle everything while you focus on product sourcing.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-5')">
                        <h3 class="font-semibold text-gray-900">Do you help with ongoing Amazon management?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="amazon-faq-5">
                        <p class="text-gray-600">Yes! We offer ongoing bookkeeping, tax planning, account health monitoring, and business consulting. Our goal is to be your long-term partner for Amazon success, not just a one-time setup service.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Dominate Amazon?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join hundreds of successful Amazon sellers who chose CNB Group for their business foundation and growth.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:amazon@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: amazon@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🚀</div>
                    <div class="font-semibold text-sm">FBA Experts</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Tax Optimized</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Brand Protected</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📊</div>
                    <div class="font-semibold text-sm">Full Service</div>
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
document.getElementById('amazon-seller-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our Amazon FBA specialist will contact you within 1 hour with your custom plan.');
});
</script>

<?php get_footer(); ?>