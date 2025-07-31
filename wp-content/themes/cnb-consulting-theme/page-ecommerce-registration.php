<?php
/**
 * Template for E-commerce Registration Service Page
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
                            🛒 E-commerce Specialists
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Complete E-commerce Business Registration
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Professional setup for Amazon, Shopify, TikTok Shop, and all major e-commerce platforms. Get legally registered and start selling with confidence.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Start Selling - $199
                        </a>
                        <a href="#platforms" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See Platforms
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📱</div>
                            <div class="font-bold text-lg">Multi-Platform</div>
                            <div class="text-blue-200 text-sm">Ready</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">24 Hour</div>
                            <div class="text-blue-200 text-sm">Setup</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">Legal</div>
                            <div class="text-blue-200 text-sm">Protection</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">E-commerce Business Setup</h3>
                        <p class="text-gray-600">Free consultation • Platform readiness check</p>
                    </div>
                    
                    <form id="ecommerce-setup-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Your business name" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                                <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Primary Platform Interest</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select platform</option>
                                <option value="amazon">Amazon Marketplace</option>
                                <option value="shopify">Shopify Store</option>
                                <option value="tiktok">TikTok Shop</option>
                                <option value="etsy">Etsy Marketplace</option>
                                <option value="ebay">eBay Store</option>
                                <option value="walmart">Walmart Marketplace</option>
                                <option value="multiple">Multiple Platforms</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Product Category</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select category</option>
                                <option value="clothing">Clothing & Fashion</option>
                                <option value="electronics">Electronics & Tech</option>
                                <option value="health">Health & Beauty</option>
                                <option value="home">Home & Garden</option>
                                <option value="sports">Sports & Outdoors</option>
                                <option value="toys">Toys & Games</option>
                                <option value="books">Books & Media</option>
                                <option value="jewelry">Jewelry & Accessories</option>
                                <option value="other">Other Products</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Status</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select status</option>
                                <option value="new">Starting new e-commerce business</option>
                                <option value="existing">Have existing business, need e-commerce setup</option>
                                <option value="individual">Individual seller wanting to incorporate</option>
                                <option value="expanding">Expanding to new platforms</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Expected Monthly Revenue</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select revenue goal</option>
                                <option value="under-5k">Under $5,000</option>
                                <option value="5k-15k">$5,000 - $15,000</option>
                                <option value="15k-50k">$15,000 - $50,000</option>
                                <option value="50k-100k">$50,000 - $100,000</option>
                                <option value="over-100k">Over $100,000</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My E-commerce Setup Plan
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free consultation • 📱 Multi-platform ready • ⚡ 24-hour setup
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Platforms Section -->
    <section id="platforms" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Supported E-commerce Platforms</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Professional registration and setup for all major selling platforms</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Amazon -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-orange-200">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">📦</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Amazon Marketplace</h3>
                        <p class="text-gray-600 text-sm">World's largest e-commerce platform</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Seller Central account setup</li>
                        <li>• FBA registration assistance</li>
                        <li>• Product category approval</li>
                        <li>• Brand registry preparation</li>
                        <li>• Tax collection setup</li>
                    </ul>
                </div>

                <!-- Shopify -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-green-200">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🛍️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Shopify Store</h3>
                        <p class="text-gray-600 text-sm">Complete online store solution</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Store setup and configuration</li>
                        <li>• Payment gateway integration</li>
                        <li>• Domain registration</li>
                        <li>• SSL certificate setup</li>
                        <li>• Tax calculation configuration</li>
                    </ul>
                </div>

                <!-- TikTok Shop -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">TRENDING</span>
                    </div>
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">📱</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">TikTok Shop</h3>
                        <p class="text-gray-600 text-sm">Social commerce platform</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Seller account registration</li>
                        <li>• Product catalog setup</li>
                        <li>• Creator partnership prep</li>
                        <li>• Live shopping configuration</li>
                        <li>• Compliance documentation</li>
                    </ul>
                </div>

                <!-- eBay -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-blue-200">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🔨</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">eBay Store</h3>
                        <p class="text-gray-600 text-sm">Auction and fixed-price selling</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Business account upgrade</li>
                        <li>• Store subscription setup</li>
                        <li>• Managed payments enrollment</li>
                        <li>• Top Rated Seller qualification</li>
                        <li>• International selling setup</li>
                    </ul>
                </div>

                <!-- Etsy -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-purple-200">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🎨</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Etsy Marketplace</h3>
                        <p class="text-gray-600 text-sm">Handmade and vintage items</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Shop setup and branding</li>
                        <li>• Product photography guidelines</li>
                        <li>• SEO optimization</li>
                        <li>• Etsy Ads preparation</li>
                        <li>• Pattern website integration</li>
                    </ul>
                </div>

                <!-- Walmart -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-yellow-200">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🏪</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Walmart Marketplace</h3>
                        <p class="text-gray-600 text-sm">Invitation-only platform</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Application preparation</li>
                        <li>• Performance metrics setup</li>
                        <li>• Fulfillment options</li>
                        <li>• Quality standards compliance</li>
                        <li>• Category approval assistance</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Complete Registration Package -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete E-commerce Registration Package</h2>
                <p class="text-xl text-gray-600">Everything you need to start selling legally and professionally</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-cnb-primary mb-6">🏢 Business Foundation</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">LLC formation for e-commerce business</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">EIN (Federal Tax ID) registration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Business bank account requirements</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Registered agent service</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Operating agreement preparation</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-cnb-primary mb-6">📱 Platform Setup</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Seller account registration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Payment processing setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Tax collection configuration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Product listing optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Shipping and fulfillment setup</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-cnb-primary mb-6">💳 Financial Setup</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Sales tax registration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Resale certificate acquisition</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Business credit setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Accounting system integration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Financial reporting setup</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-cnb-primary mb-6">🛡️ Legal Protection</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Terms of service templates</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Privacy policy creation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Return and refund policies</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Liability insurance guidance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">✓</span>
                            <span class="text-gray-700">Trademark search and filing</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">🎯</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Platform-Specific Expertise</h4>
                        <p class="text-gray-700">
                            Each platform has unique requirements and opportunities. Our experts understand the specific registration, compliance, and optimization needs for Amazon, Shopify, TikTok Shop, and other major platforms.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Professional Setup Matters -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Professional E-commerce Setup Matters</h2>
                <p class="text-xl text-gray-600">Avoid costly mistakes and compliance issues from day one</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-red-700 mb-6">❌ DIY Registration Risks</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Account suspension for improper setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Tax compliance violations and penalties</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Personal liability exposure</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Lost sales from platform restrictions</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Difficulty scaling to multiple platforms</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Legal document deficiencies</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-green-50 border border-green-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-green-700 mb-6">✅ Professional Setup Benefits</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Compliant setup from day one</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Optimized for growth and scaling</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Asset protection and liability shield</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Multi-platform ready infrastructure</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Tax efficiency and savings</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Professional credibility and trust</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">⚠️</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Platform Compliance is Critical</h4>
                        <p class="text-gray-700">
                            E-commerce platforms have strict requirements for business registration, tax compliance, and legal documentation. Non-compliance can result in account suspension, lost inventory, and frozen funds. Professional setup ensures you meet all requirements from day one.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">E-commerce Registration Packages</h2>
                <p class="text-xl text-gray-600">Complete setup solutions for every business size</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Starter Package -->
                <div class="bg-white rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Starter Package</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$199</span>
                    </div>
                    <p class="text-gray-600 mb-6">Single platform setup</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">LLC formation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">EIN registration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">One platform account setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Basic tax setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Email support</span>
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
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Package</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$399</span>
                    </div>
                    <p class="text-gray-600 mb-6">Multi-platform ready</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Starter Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Up to 3 platform setups</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Resale certificate</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business banking setup</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Legal document templates</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Phone consultation included</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Choose Professional
                    </a>
                </div>

                <!-- Enterprise Package -->
                <div class="bg-white rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise Package</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$699</span>
                    </div>
                    <p class="text-gray-600 mb-6">Complete business solution</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Professional Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Unlimited platform setups</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Trademark search & filing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Advanced tax optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business credit building</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">1-year ongoing support</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition">
                        Choose Enterprise
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <span class="text-3xl">🚀</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Ready to Sell in 24 Hours</div>
                        <div class="text-gray-600">Complete setup with expert guidance and support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">E-commerce Registration FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about starting an e-commerce business</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ecommerce-faq-1')">
                        <h3 class="font-semibold text-gray-900">Do I need an LLC for my e-commerce business?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ecommerce-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ecommerce-faq-1">
                        <p class="text-gray-600">While not legally required, an LLC provides liability protection, tax benefits, and professional credibility. Most e-commerce platforms also prefer business entities over individual sellers for higher transaction volumes and better terms.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ecommerce-faq-2')">
                        <h3 class="font-semibold text-gray-900">Can I sell on multiple platforms with one business registration?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ecommerce-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ecommerce-faq-2">
                        <p class="text-gray-600">Yes, once you have your business properly registered, you can use the same entity to sell on multiple platforms. Each platform will have its own account setup requirements, but the underlying business structure remains the same.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ecommerce-faq-3')">
                        <h3 class="font-semibold text-gray-900">What tax obligations do I have for e-commerce sales?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ecommerce-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ecommerce-faq-3">
                        <p class="text-gray-600">E-commerce businesses must collect sales tax in states where they have nexus, file income tax returns, and may need to register for sales tax in multiple states. We help you understand and comply with all applicable tax requirements.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ecommerce-faq-4')">
                        <h3 class="font-semibold text-gray-900">How long does the setup process take?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ecommerce-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ecommerce-faq-4">
                        <p class="text-gray-600">Our standard setup process takes 24-48 hours for most packages. Business formation typically takes 1-3 business days, and platform account approvals vary by platform but usually complete within 24-72 hours.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ecommerce-faq-5')">
                        <h3 class="font-semibold text-gray-900">What's included in ongoing support?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-ecommerce-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="ecommerce-faq-5">
                        <p class="text-gray-600">Ongoing support includes compliance monitoring, tax filing reminders, business growth consultation, platform policy updates, and assistance with scaling to new platforms or markets as your business grows.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Your E-commerce Business Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Get professionally registered and start selling on major platforms with confidence. Complete setup in 24 hours with expert support.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:ecommerce@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: ecommerce@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📱</div>
                    <div class="font-semibold text-sm">Multi-Platform</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold text-sm">24-Hour Setup</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Legal Protection</div>
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
document.getElementById('ecommerce-setup-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our e-commerce specialist will contact you within 30 minutes to discuss your setup plan and get you selling quickly.');
});
</script>

<?php get_footer(); ?>