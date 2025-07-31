<?php
/**
 * Template for Company Dissolution Service Page
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
                            ⚖️ Legal Dissolution Experts
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Properly Close Your Business & Avoid Future Liabilities
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Professional business dissolution service. Protect yourself from ongoing taxes, legal obligations, and personal liability with proper closure procedures.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Close Business - $299
                        </a>
                        <a href="#process" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See Process
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">Asset</div>
                            <div class="text-blue-200 text-sm">Protection</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📋</div>
                            <div class="font-bold text-lg">Legal</div>
                            <div class="text-blue-200 text-sm">Compliance</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">💰</div>
                            <div class="font-bold text-lg">Tax</div>
                            <div class="text-blue-200 text-sm">Closure</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Business Dissolution Assessment</h3>
                        <p class="text-gray-600">Free consultation • Risk evaluation</p>
                    </div>
                    
                    <form id="dissolution-assessment-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Business legal name" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Owner, CEO, etc." required>
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
                                <option value="Other">Other Entity Type</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State of Formation</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select state</option>
                                <option value="DE">Delaware</option>
                                <option value="NV">Nevada</option>
                                <option value="WY">Wyoming</option>
                                <option value="CA">California</option>
                                <option value="TX">Texas</option>
                                <option value="FL">Florida</option>
                                <option value="NY">New York</option>
                                <!-- Add more states as needed -->
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Reason for Dissolution</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select reason</option>
                                <option value="closing-business">Closing/retiring from business</option>
                                <option value="not-operating">Business no longer operating</option>
                                <option value="restructuring">Restructuring/merging</option>
                                <option value="tax-issues">Tax compliance issues</option>
                                <option value="financial-difficulties">Financial difficulties</option>
                                <option value="other">Other reason</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get Dissolution Plan
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free assessment • ⚖️ Legal protection • 💰 Tax closure
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Proper Dissolution Matters -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Proper Business Dissolution Matters</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Simply stopping operations isn't enough - protect yourself legally and financially</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-red-700 mb-6">❌ Risks of Improper Closure</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Ongoing tax obligations and penalties</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Personal liability for business debts</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">State compliance violations and fines</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Creditor claims against assets</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Professional license complications</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Future business formation difficulties</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-green-50 border border-green-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-green-700 mb-6">✅ Benefits of Professional Dissolution</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Complete legal protection from future claims</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Proper tax closure and final returns</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Asset protection and distribution</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Creditor notification and resolution</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Clean closure for future ventures</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Peace of mind and liability protection</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">⚠️</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Don't Just Stop Operating</h4>
                        <p class="text-gray-700">
                            Many business owners think they can simply stop operating and walk away. This creates ongoing legal and financial risks that can follow you for years. Proper dissolution is essential for complete protection.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dissolution Process -->
    <section id="process" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Dissolution Process</h2>
                <p class="text-xl text-gray-600">Professional closure in 7 systematic steps</p>
            </div>

            <div class="space-y-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">1</div>
                        <div class="text-3xl mb-2">📋</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Business Assessment & Planning</h3>
                        <p class="text-gray-600 leading-relaxed">Complete review of your business structure, assets, liabilities, and legal obligations to create a customized dissolution plan.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">2</div>
                        <div class="text-3xl mb-2">💰</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Asset & Liability Resolution</h3>
                        <p class="text-gray-600 leading-relaxed">Inventory assets, settle debts, distribute remaining assets to owners, and handle any outstanding financial obligations properly.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">3</div>
                        <div class="text-3xl mb-2">📢</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Creditor & Stakeholder Notification</h3>
                        <p class="text-gray-600 leading-relaxed">Proper legal notice to creditors, vendors, customers, and other stakeholders as required by state dissolution laws.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">4</div>
                        <div class="text-3xl mb-2">📋</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Tax Closure & Final Returns</h3>
                        <p class="text-gray-600 leading-relaxed">File final tax returns, close tax accounts, handle payroll tax obligations, and ensure complete tax compliance closure.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">5</div>
                        <div class="text-3xl mb-2">🏛️</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">State Dissolution Filing</h3>
                        <p class="text-gray-600 leading-relaxed">File Articles of Dissolution with the state, handle any required publications, and complete official dissolution procedures.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">6</div>
                        <div class="text-3xl mb-2">📄</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">License & Registration Closure</h3>
                        <p class="text-gray-600 leading-relaxed">Cancel business licenses, registrations, permits, and close accounts with banks, vendors, and service providers.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto lg:mx-0 mb-4">7</div>
                        <div class="text-3xl mb-2">✅</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Final Documentation & Protection</h3>
                        <p class="text-gray-600 leading-relaxed">Provide complete dissolution documentation, final compliance certificates, and ongoing protection from future claims.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Business Dissolution Packages</h2>
                <p class="text-xl text-gray-600">Complete closure solutions for different business needs</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Dissolution -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Basic Dissolution</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$299</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Simple business closure</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Articles of Dissolution filing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Basic creditor notification</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Tax account closure guidance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Dissolution certificate</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Email support</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                        Choose Basic
                    </a>
                </div>

                <!-- Complete Dissolution -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ MOST POPULAR
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Complete Dissolution</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$599</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Full-service business closure</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Basic Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Asset & liability assessment</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Final tax return preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">License cancellation assistance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Legal creditor notification</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Phone consultation included</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Choose Complete
                    </a>
                </div>

                <!-- Premium Dissolution -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Premium Dissolution</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$999</span>
                        <span class="text-gray-500 text-lg"> + state fees</span>
                    </div>
                    <p class="text-gray-600 mb-6">Complex business closure with legal protection</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Complete Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Legal review & protection</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Asset distribution planning</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Creditor negotiation support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Multi-state dissolution (if needed)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">6-month liability protection</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition">
                        Choose Premium
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <span class="text-3xl">🛡️</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Complete Legal Protection</div>
                        <div class="text-gray-600">Proper closure protects you from future claims and liabilities</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Business Dissolution FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about closing your business properly</p>
            </div>

            <div class="space-y-4">
                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('dissolution-faq-1')">
                        <h3 class="font-semibold text-gray-900">What happens if I just stop operating without formal dissolution?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-dissolution-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="dissolution-faq-1">
                        <p class="text-gray-600">Your business remains legally active, creating ongoing tax obligations, potential penalties, and personal liability exposure. States may also dissolve your business involuntarily, which can affect your good standing and future business activities.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('dissolution-faq-2')">
                        <h3 class="font-semibold text-gray-900">How long does the dissolution process take?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-dissolution-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="dissolution-faq-2">
                        <p class="text-gray-600">Basic dissolution typically takes 4-8 weeks, depending on state requirements and creditor notification periods. Complex dissolutions with multiple assets or creditor issues may take 3-6 months to complete properly.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('dissolution-faq-3')">
                        <h3 class="font-semibold text-gray-900">Can I dissolve my business if it has debts?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-dissolution-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="dissolution-faq-3">
                        <p class="text-gray-600">Yes, but debts must be handled properly during dissolution. We help negotiate with creditors, prioritize payments, and ensure legal compliance. Proper dissolution can provide protection from personal liability for business debts.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('dissolution-faq-4')">
                        <h3 class="font-semibold text-gray-900">What tax obligations do I have during dissolution?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-dissolution-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="dissolution-faq-4">
                        <p class="text-gray-600">You must file final tax returns, pay any outstanding taxes, close tax accounts with federal and state agencies, and handle final payroll obligations. We ensure all tax requirements are met to avoid future penalties.</p>
                    </div>
                </div>

                <div class="bg-white rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('dissolution-faq-5')">
                        <h3 class="font-semibold text-gray-900">Will dissolution affect my personal credit?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-dissolution-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="dissolution-faq-5">
                        <p class="text-gray-600">Proper dissolution can actually protect your personal credit by preventing ongoing business obligations from affecting you personally. However, any personal guarantees on business debts will still need to be addressed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Close Your Business Properly</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Don't leave yourself exposed to future liabilities. Professional dissolution provides complete legal protection and peace of mind.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:dissolution@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: dissolution@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Asset Protection</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚖️</div>
                    <div class="font-semibold text-sm">Legal Compliance</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">💰</div>
                    <div class="font-semibold text-sm">Tax Closure</div>
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
document.getElementById('dissolution-assessment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our business dissolution specialist will contact you within 2 hours to discuss your closure plan.');
});
</script>

<?php get_footer(); ?>