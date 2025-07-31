<?php
/**
 * Template for Company Formation Service Page
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
                            #1 Business Formation Service
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Start Your LLC or Corporation in 24 Hours
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Complete business formation with registered agent, EIN, and legal compliance - all handled by our experts so you can focus on growing your business.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Start My Business Now
                        </a>
                        <a href="#process" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            How It Works
                        </a>
                    </div>

                    <div class="flex items-center space-x-2 text-blue-200">
                        <span class="text-2xl">🛡️</span>
                        <span>100% Money-Back Guarantee • 500+ Businesses Formed</span>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Get Started Today</h3>
                        <p class="text-gray-600">Free consultation • No obligation</p>
                    </div>
                    
                    <form id="formation-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Your Business Name">
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option>Select State</option>
                                <option>Delaware</option>
                                <option>Nevada</option>
                                <option>Wyoming</option>
                                <option>Texas</option>
                                <option>Florida</option>
                                <option>California</option>
                                <option>New York</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get Free Quote
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            By submitting, you agree to our <a href="/privacy-policy" class="text-cnb-primary hover:underline">Privacy Policy</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why 500+ Entrepreneurs Choose CNB Group</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">The complete business formation solution that gets you operational faster</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">24-Hour Filing</h3>
                    <p class="text-gray-600">Most formations completed within 24 hours. Rush processing available for same-day filing.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">100% Guarantee</h3>
                    <p class="text-gray-600">Complete money-back guarantee. We stand behind our work with full confidence.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">📞</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Support</h3>
                    <p class="text-gray-600">Direct access to business formation experts. No call centers or automated responses.</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-white text-2xl">📋</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">All-Inclusive</h3>
                    <p class="text-gray-600">Complete package includes registered agent, EIN, operating agreement, and compliance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Choose Your Formation Package</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to start your business, at transparent pricing</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Basic Package -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative">
                    <div class="text-center mb-8">
                        <div class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium mb-4">Basic</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Starter</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$299</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Perfect for simple business structures</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">LLC Formation & State Filing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Registered Agent (1st Year FREE)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Articles of Organization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Email & Phone Support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Lifetime Customer Dashboard</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition text-center">
                        Choose Basic
                    </a>
                </div>

                <!-- Standard Package (Most Popular) -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ MOST POPULAR
                        </div>
                    </div>

                    <div class="text-center mb-8">
                        <div class="inline-block bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-sm font-medium mb-4">Recommended</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Complete</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$499</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Complete business formation solution</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Basic Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">EIN Tax ID Number</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Custom Operating Agreement</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Banking Resolution</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Priority Processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Compliance Calendar</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition text-center">
                        Choose Complete
                    </a>
                </div>

                <!-- Premium Package -->
                <div class="bg-white rounded-lg shadow-lg p-8 relative">
                    <div class="text-center mb-8">
                        <div class="inline-block bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium mb-4">Premium</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Premium</h3>
                        <div class="mb-4">
                            <span class="text-4xl font-bold text-cnb-primary">$799</span>
                            <span class="text-gray-500 text-lg"> + state fees</span>
                        </div>
                        <p class="text-gray-600">Full-service business launch package</p>
                    </div>

                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Complete Package</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business License Research</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">DBA Registration</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Business Credit Report</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Expedited 24-Hour Filing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">1-Hour Business Consultation</span>
                        </li>
                    </ul>

                    <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition text-center">
                        Choose Premium
                    </a>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center space-x-3 bg-white rounded-lg shadow-lg p-6">
                    <span class="text-3xl">🛡️</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">100% Money-Back Guarantee</div>
                        <div class="text-gray-600">Complete satisfaction guaranteed or your money back</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple 4-Step Process</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">From consultation to business launch in as little as 24 hours</p>
            </div>

            <div class="space-y-12">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto lg:mx-0 mb-4">1</div>
                        <div class="text-4xl mb-4">📋</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Choose Your Package & Provide Information</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">Select your business formation package and provide basic information about your business, owners, and preferred state of incorporation. Our experts will review everything and contact you within 1 hour.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto lg:mx-0 mb-4">2</div>
                        <div class="text-4xl mb-4">✅</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Document Preparation & Review</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">We prepare all required formation documents, operating agreements, and applications. You'll receive drafts for review before we proceed with filing to ensure everything is perfect.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto lg:mx-0 mb-4">3</div>
                        <div class="text-4xl mb-4">🚀</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">State Filing & EIN Application</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">We file your Articles of Organization with the state and apply for your EIN tax ID number with the IRS. Most filings are completed within 24 hours with confirmation and tracking numbers provided.</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-2 text-center lg:text-left">
                        <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto lg:mx-0 mb-4">4</div>
                        <div class="text-4xl mb-4">📦</div>
                    </div>
                    <div class="lg:col-span-10">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Receive Your Complete Business Package</h3>
                        <p class="text-lg text-gray-600 leading-relaxed">Get your filed Articles of Organization, EIN confirmation, operating agreement, registered agent appointment, and compliance calendar. Your business is now officially formed and ready to operate!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600">Real reviews from successful business owners</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"CNB Group made forming my LLC incredibly easy. Everything was handled professionally and quickly. I had my business formed and EIN within 48 hours!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-cnb-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            SM
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Sarah Martinez</div>
                            <div class="text-gray-500 text-sm">E-commerce Business Owner</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Outstanding service from start to finish. The team was knowledgeable, responsive, and made the entire process stress-free. Highly recommend!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-cnb-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            DJ
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">David Johnson</div>
                            <div class="text-gray-500 text-sm">Consulting Firm Owner</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"The complete package saved me time and money. Got my LLC, EIN, operating agreement, and registered agent all in one place. Perfect service!"</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-cnb-primary rounded-full flex items-center justify-center text-white font-bold mr-4">
                            RT
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Rachel Thompson</div>
                            <div class="text-gray-500 text-sm">Real Estate Investor</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about business formation</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-1')">
                        <h3 class="font-semibold text-gray-900">How long does it take to form my business?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="formation-faq-1">
                        <p class="text-gray-600">Most business formations are completed within 24-48 hours. We offer expedited same-day processing for urgent needs. The exact timeframe depends on the state where you're forming your business.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-2')">
                        <h3 class="font-semibold text-gray-900">What's the difference between LLC and Corporation?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="formation-faq-2">
                        <p class="text-gray-600">LLCs offer simplicity, flexibility, and pass-through taxation, making them ideal for most small businesses. Corporations provide more structure and are better for businesses seeking investment or with multiple shareholders. We'll help you choose the right structure during your consultation.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-3')">
                        <h3 class="font-semibold text-gray-900">Do I need a registered agent?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="formation-faq-3">
                        <p class="text-gray-600">Yes, all businesses are required to have a registered agent in their state of formation. We include registered agent service for the first year FREE with all packages, providing privacy protection and ensuring you receive all legal documents.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-4')">
                        <h3 class="font-semibold text-gray-900">What state should I form my business in?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="formation-faq-4">
                        <p class="text-gray-600">Most businesses should form in the state where they operate. Delaware, Nevada, and Wyoming offer business-friendly laws for certain situations. Our experts will help you choose the best state based on your specific business needs and goals.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-5')">
                        <h3 class="font-semibold text-gray-900">What ongoing requirements will my business have?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="formation-faq-5">
                        <p class="text-gray-600">Most businesses need to file annual reports, maintain good standing, and comply with tax obligations. We provide a compliance calendar and ongoing support to ensure you meet all requirements and deadlines.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Business?</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Join 500+ successful entrepreneurs who chose CNB Group for their business formation. Get started today with our proven process.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:info@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: info@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚡</div>
                    <div class="font-semibold">24-Hour Filing</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold">100% Guarantee</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📞</div>
                    <div class="font-semibold">Expert Support</div>
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
document.getElementById('formation-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We\'ll contact you within 1 hour with your custom quote.');
});
</script>

<?php get_footer(); ?>