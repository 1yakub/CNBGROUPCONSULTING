<?php
/**
 * Template for US Resale Certificate Service Page
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
                            💰 Tax Savings Experts
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Get Your US Resale Certificate - Buy Tax-Free
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Professional resale certificate service. Purchase inventory and business supplies tax-free with proper sales tax exemption certificates.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get Certificate - $79
                        </a>
                        <a href="#benefits" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See Savings
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">💰</div>
                            <div class="font-bold text-lg">Tax-Free</div>
                            <div class="text-blue-200 text-sm">Purchases</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📋</div>
                            <div class="font-bold text-lg">Legal</div>
                            <div class="text-blue-200 text-sm">Compliance</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">Same Day</div>
                            <div class="text-blue-200 text-sm">Processing</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Resale Certificate Application</h3>
                        <p class="text-gray-600">Free consultation • Tax savings calculator</p>
                    </div>
                    
                    <form id="resale-application-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Legal business name" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Owner, Manager, etc." required>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Primary State for Certificate</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select state</option>
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                                <option value="FL">Florida</option>
                                <option value="NY">New York</option>
                                <option value="IL">Illinois</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="OH">Ohio</option>
                                <option value="GA">Georgia</option>
                                <option value="NC">North Carolina</option>
                                <option value="MI">Michigan</option>
                                <!-- Add more states as needed -->
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Type</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select business type</option>
                                <option value="retail">Retail Store</option>
                                <option value="wholesale">Wholesale Distribution</option>
                                <option value="ecommerce">E-commerce/Online</option>
                                <option value="manufacturing">Manufacturing</option>
                                <option value="services">Service Business</option>
                                <option value="restaurant">Restaurant/Food Service</option>
                                <option value="other">Other Business Type</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Purchase Volume</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Estimate monthly purchases</option>
                                <option value="under-5k">Under $5,000</option>
                                <option value="5k-15k">$5,000 - $15,000</option>
                                <option value="15k-50k">$15,000 - $50,000</option>
                                <option value="50k-100k">$50,000 - $100,000</option>
                                <option value="over-100k">Over $100,000</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Calculate My Tax Savings
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free consultation • 💰 Tax savings estimate • 📋 Legal compliance
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is Resale Certificate Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is a US Resale Certificate?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding sales tax exemption certificates for business purchases</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Sales Tax Exemption Certificate</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            A resale certificate allows businesses to purchase goods without paying sales tax when those items will be resold to customers. It's a legal document that exempts qualifying purchases from state sales tax.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Also called a sales tax exemption certificate or reseller's permit, this document can save your business thousands of dollars annually by eliminating unnecessary tax payments on inventory and supplies.
                        </p>
                    </div>
                </div>
                
                <div class="bg-green-50 border border-green-200 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-green-700 mb-4">💰 Typical Annual Savings</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-600 mt-1">$</span>
                            <span class="text-gray-700"><strong>Small retail:</strong> $3,000 - $8,000</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-600 mt-1">$</span>
                            <span class="text-gray-700"><strong>Medium business:</strong> $8,000 - $25,000</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-600 mt-1">$</span>
                            <span class="text-gray-700"><strong>Large operations:</strong> $25,000+</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-600 mt-1">$</span>
                            <span class="text-gray-700"><strong>E-commerce stores:</strong> $5,000 - $15,000</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">⚖️</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Legal Requirement</h4>
                        <p class="text-gray-700">
                            Resale certificates must be properly obtained and used according to state regulations. Misuse can result in penalties, interest charges, and tax audits. Professional preparation ensures compliance.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Resale Certificate Benefits</h2>
                <p class="text-xl text-gray-600">Save money and improve cash flow with tax-exempt purchasing</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-green-600 mb-6">✅ What You CAN Buy Tax-Free</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Inventory for resale to customers</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Raw materials for manufacturing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Packaging and shipping supplies</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Components for finished products</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Wholesale merchandise</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Items for online store inventory</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-red-600 mb-6">❌ What You CANNOT Buy Tax-Free</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Office supplies for business use</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Equipment and machinery</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Personal use items</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Services (labor, consulting, etc.)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Items for business consumption</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Furniture and fixtures</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Cash Flow Improvement -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Improve Cash Flow</h3>
                    <p class="text-gray-600 mb-6">Eliminate unnecessary tax payments on inventory purchases, freeing up cash for business growth and operations.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Immediate cost savings</li>
                        <li>• Better profit margins</li>
                        <li>• More working capital</li>
                        <li>• Competitive pricing advantage</li>
                    </ul>
                </div>

                <!-- Legal Protection -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">PROTECTION</span>
                    </div>
                    <div class="text-4xl mb-6">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Legal Compliance</h3>
                    <p class="text-gray-600 mb-6">Properly prepared certificates ensure compliance with state tax laws and protect against audits and penalties.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Audit protection</li>
                        <li>• Penalty avoidance</li>
                        <li>• Proper documentation</li>
                        <li>• State-specific compliance</li>
                    </ul>
                </div>

                <!-- Multi-State Coverage -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">🗺️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Multi-State Coverage</h3>
                    <p class="text-gray-600 mb-6">Get certificates for multiple states where you purchase inventory or materials for your business operations.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• All 50 states available</li>
                        <li>• Reciprocity agreements</li>
                        <li>• Uniform certificate forms</li>
                        <li>• Interstate commerce ready</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Tax Savings Calculator -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Calculate Your Tax Savings</h2>
                <p class="text-xl text-gray-600">See how much you could save with a resale certificate</p>
            </div>

            <div class="bg-gray-50 rounded-lg p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Savings Calculator</h3>
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Inventory Purchases</label>
                                <input type="number" id="monthly-purchases" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="$10,000" min="0">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">State Sales Tax Rate</label>
                                <select id="tax-rate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                    <option value="0.05">5% (Delaware, Montana)</option>
                                    <option value="0.06">6% (Colorado, Utah)</option>
                                    <option value="0.07">7% (Indiana, Mississippi)</option>
                                    <option value="0.08" selected>8% (Arizona, Nevada)</option>
                                    <option value="0.09">9% (Louisiana, Tennessee)</option>
                                    <option value="0.10">10%+ (California, Washington)</option>
                                </select>
                            </div>
                            <button onclick="calculateSavings()" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-bold transition">
                                Calculate Savings
                            </button>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg p-6">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">Your Potential Savings</h4>
                        <div id="savings-results" class="space-y-4">
                            <div class="text-center text-gray-500">
                                Enter your purchase amount to see potential savings
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple 4-Step Process</h2>
                <p class="text-xl text-gray-600">Get your resale certificate in 24 hours</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">1</div>
                    <div class="text-3xl mb-4">📋</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Business Verification</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">We verify your business registration and eligibility for resale certificate privileges.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">2</div>
                    <div class="text-3xl mb-4">📝</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Certificate Preparation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Expert preparation of state-specific resale certificate forms with accurate business information.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">3</div>
                    <div class="text-3xl mb-4">🏛️</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">State Submission</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Direct submission to state tax authority with expedited processing for faster approval.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">4</div>
                    <div class="text-3xl mb-4">📄</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Certificate Delivery</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Receive your official resale certificate and usage guidelines for immediate tax savings.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-white rounded-lg shadow-lg p-6">
                    <span class="text-3xl">⚡</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Same-Day Processing Available</div>
                        <div class="text-gray-600">Start saving on taxes immediately</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Resale Certificate Service Pricing</h2>
                <p class="text-xl text-gray-600">Professional service vs. DIY application</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- DIY Option -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">DIY State Application</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-600">FREE</span>
                    </div>
                    <p class="text-gray-600 mb-6">Apply directly through state website</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Complex state-specific forms</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Risk of application errors</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Slow processing times</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No usage guidance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Compliance risk</span>
                        </li>
                    </ul>
                    
                    <a href="#" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
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
                        <span class="text-4xl font-bold text-cnb-primary">$79</span>
                        <span class="text-gray-500 text-lg"> per state</span>
                    </div>
                    <p class="text-gray-600 mb-6">Expert certificate preparation</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Expert form preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Same-day processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">State compliance guarantee</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Usage guidelines included</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Multi-state discount available</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Ongoing tax support</span>
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
                        <div class="font-bold text-gray-900">ROI: First Purchase Pays for Service</div>
                        <div class="text-gray-600">$79 service fee typically saves $500+ on first order</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Resale Certificate FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about sales tax exemption certificates</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('resale-faq-1')">
                        <h3 class="font-semibold text-gray-900">Do I need a resale certificate if I sell online?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-resale-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="resale-faq-1">
                        <p class="text-gray-600">Yes, if you purchase inventory to resell online, you can use a resale certificate to buy those items tax-free. This applies to Amazon FBA, Shopify stores, eBay businesses, and all other e-commerce platforms.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('resale-faq-2')">
                        <h3 class="font-semibold text-gray-900">Can I use my certificate in multiple states?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-resale-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="resale-faq-2">
                        <p class="text-gray-600">Many states have reciprocity agreements that allow you to use your certificate in other states. However, some suppliers may require state-specific certificates. We can help you get certificates for multiple states at discounted rates.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('resale-faq-3')">
                        <h3 class="font-semibold text-gray-900">What happens if I misuse my resale certificate?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-resale-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="resale-faq-3">
                        <p class="text-gray-600">Misusing a resale certificate can result in penalties, interest charges, and tax audits. You may owe back taxes plus penalties. That's why proper usage guidelines and professional preparation are essential for compliance.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('resale-faq-4')">
                        <h3 class="font-semibold text-gray-900">How long does it take to get my certificate?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-resale-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="resale-faq-4">
                        <p class="text-gray-600">With our professional service, most certificates are processed within 24-48 hours. DIY applications through state websites can take 2-4 weeks. We offer same-day processing for urgent needs.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('resale-faq-5')">
                        <h3 class="font-semibold text-gray-900">Do resale certificates expire?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-resale-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="resale-faq-5">
                        <p class="text-gray-600">Most resale certificates don't expire, but some states require periodic updates or renewals. We monitor expiration dates and provide renewal reminders to keep your certificates current and compliant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Saving on Taxes Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Get your resale certificate and begin purchasing inventory tax-free. Professional service with same-day processing available.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:resale@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: resale@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Tax Savings</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold text-sm">Same Day</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Compliance</div>
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

function calculateSavings() {
    const monthlyPurchases = parseFloat(document.getElementById('monthly-purchases').value) || 0;
    const taxRate = parseFloat(document.getElementById('tax-rate').value) || 0.08;
    
    if (monthlyPurchases <= 0) {
        document.getElementById('savings-results').innerHTML = '<div class="text-center text-red-500">Please enter a valid purchase amount</div>';
        return;
    }
    
    const monthlySavings = monthlyPurchases * taxRate;
    const annualSavings = monthlySavings * 12;
    const serviceFee = 79;
    const roi = ((annualSavings - serviceFee) / serviceFee * 100).toFixed(0);
    
    document.getElementById('savings-results').innerHTML = `
        <div class="text-center space-y-3">
            <div class="text-2xl font-bold text-green-600">$${monthlySavings.toLocaleString()}</div>
            <div class="text-sm text-gray-600">Monthly Savings</div>
            <div class="text-3xl font-bold text-cnb-primary">$${annualSavings.toLocaleString()}</div>
            <div class="text-sm text-gray-600">Annual Savings</div>
            <div class="text-lg font-semibold text-gray-900">${roi}% ROI</div>
            <div class="text-xs text-gray-500">Return on $79 investment</div>
        </div>
    `;
}

// Form handling
document.getElementById('resale-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our tax specialist will contact you within 1 hour with your savings estimate and certificate details.');
});
</script>

<?php get_footer(); ?>