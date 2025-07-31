<?php
/**
 * Template for Registered Agent Service Page
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
                            📬 Required by Law in All 50 States
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Professional Registered Agent Service
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Protect your privacy and ensure compliance with our reliable registered agent service. Mail forwarding, compliance alerts, and professional representation.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Start Service - $99/Year
                        </a>
                        <a href="#features" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See All Features
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🏢</div>
                            <div class="font-bold text-lg">1000+</div>
                            <div class="text-blue-200 text-sm">Business Served</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📍</div>
                            <div class="font-bold text-lg">All 50</div>
                            <div class="text-blue-200 text-sm">States Covered</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">Same Day</div>
                            <div class="text-blue-200 text-sm">Setup Available</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Get Registered Agent Service</h3>
                        <p class="text-gray-600">Instant setup • Professional address • Privacy protection</p>
                    </div>
                    
                    <form id="registered-agent-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Your Business Name" required>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State of Formation</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select State</option>
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
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Service Needed</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select Service</option>
                                <option value="new-business">New Business Formation</option>
                                <option value="existing-business">Existing Business</option>
                                <option value="change-agent">Change Current Agent</option>
                                <option value="multi-state">Multi-State Service</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Start Service - $99/Year
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Instant setup • 🔒 Privacy protected • 📬 Mail forwarding included
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is a Registered Agent -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is a Registered Agent?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding the legal requirement and benefits of professional registered agent service</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Legal Requirement</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Every business entity (LLC, Corporation, Partnership) is required by law to have a registered agent in the state where it's formed. This is not optional - it's a legal mandate in all 50 states.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            The registered agent serves as the official point of contact between your business and the state government, receiving important legal documents, tax notices, and compliance reminders on your behalf.
                        </p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">Key Requirements:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Must have physical address in state of formation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Available during normal business hours</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Authorized to receive legal documents</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Forward documents promptly to business owner</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">Maintain consistent service throughout business life</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-cnb-secondary p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">⚠️</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Important Warning</h4>
                        <p class="text-gray-700">
                            If your business doesn't have a registered agent or your agent becomes unavailable, your business may be dissolved by the state, lose good standing status, and face penalties or legal consequences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features & Benefits -->
    <section id="features" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Registered Agent Service</h2>
                <p class="text-xl text-gray-600">Everything you need for compliance and peace of mind</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Privacy Protection -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-4xl mb-6">🔒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Privacy Protection</h3>
                    <p class="text-gray-600 mb-6">Keep your personal address private. Our professional address appears on public records instead of your home or office address.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Professional business address</li>
                        <li>• Personal privacy protection</li>
                        <li>• No unwanted visitors or mail</li>
                        <li>• Enhanced professional image</li>
                    </ul>
                </div>

                <!-- Mail Scanning & Forwarding -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">PREMIUM FEATURE</span>
                    </div>
                    <div class="text-4xl mb-6">📬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Mail Scanning & Forwarding</h3>
                    <p class="text-gray-600 mb-6">Receive digital scans of all mail within 24 hours. Choose to have important documents forwarded to you immediately.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Same-day digital mail scanning</li>
                        <li>• Email notifications for all mail</li>
                        <li>• Priority mail forwarding</li>
                        <li>• Secure online mail dashboard</li>
                    </ul>
                </div>

                <!-- Compliance Monitoring -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-4xl mb-6">📅</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Compliance Monitoring</h3>
                    <p class="text-gray-600 mb-6">Never miss important deadlines with our automated compliance calendar and deadline reminders.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Annual report deadline alerts</li>
                        <li>• State compliance monitoring</li>
                        <li>• Renewal reminders</li>
                        <li>• Good standing maintenance</li>
                    </ul>
                </div>

                <!-- Legal Document Receipt -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-4xl mb-6">⚖️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Legal Document Receipt</h3>
                    <p class="text-gray-600 mb-6">Professional handling of all legal documents including lawsuits, subpoenas, and official government correspondence.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Immediate notification of legal documents</li>
                        <li>• Professional document handling</li>
                        <li>• Secure forwarding protocols</li>
                        <li>• Time-sensitive alerts</li>
                    </ul>
                </div>

                <!-- Multi-State Service -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-4xl mb-6">🗺️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Multi-State Service</h3>
                    <p class="text-gray-600 mb-6">Expand your business to multiple states with our registered agent service available in all 50 states and DC.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Service in all 50 states + DC</li>
                        <li>• Consistent service quality</li>
                        <li>• Unified management dashboard</li>
                        <li>• Volume discounts available</li>
                    </ul>
                </div>

                <!-- 24/7 Online Access -->
                <div class="bg-white rounded-lg p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="text-4xl mb-6">💻</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">24/7 Online Access</h3>
                    <p class="text-gray-600 mb-6">Access your documents, mail scans, and account information anytime through our secure online portal.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Secure online dashboard</li>
                        <li>• Document history and archive</li>
                        <li>• Mobile-friendly access</li>
                        <li>• Real-time status updates</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Professional registered agent service at an affordable annual rate</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Basic Service -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Basic Service</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$99</span>
                        <span class="text-gray-500 text-lg">/year</span>
                    </div>
                    <p class="text-gray-600 mb-6">Essential registered agent service for one state</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Professional registered agent address</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Legal document receipt & forwarding</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Email notifications</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Online account access</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Compliance calendar</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                        Choose Basic
                    </a>
                </div>

                <!-- Premium Service (Most Popular) -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ MOST POPULAR
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Premium Service</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$149</span>
                        <span class="text-gray-500 text-lg">/year</span>
                    </div>
                    <p class="text-gray-600 mb-6">Complete service with mail scanning and priority support</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Basic Service</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Mail scanning & digital delivery</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Priority mail forwarding</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Phone & email support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Compliance monitoring alerts</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Choose Premium
                    </a>
                </div>

                <!-- Enterprise Service -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise Service</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$249</span>
                        <span class="text-gray-500 text-lg">/year</span>
                    </div>
                    <p class="text-gray-600 mb-6">Multi-state service with dedicated support</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Premium Service</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Service in up to 3 states</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Dedicated account manager</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Priority customer support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Custom compliance reporting</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                        Choose Enterprise
                    </a>
                </div>
            </div>

            <div class="text-center">
                <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                    <span class="text-3xl">💰</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">No Setup Fees • No Hidden Costs</div>
                        <div class="text-gray-600">One simple annual fee covers everything. Cancel anytime.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Not DIY -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Not Serve as Your Own Registered Agent?</h2>
                <p class="text-xl text-gray-600">While legally possible, being your own registered agent has significant drawbacks</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-red-600 mb-4">❌ DIY Registered Agent Risks</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Privacy Loss:</strong> Your personal address becomes public record</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Availability Requirements:</strong> Must be available during business hours</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Legal Service Risk:</strong> Potential embarrassment from public service</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Missed Documents:</strong> Risk of missing important deadlines</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Relocation Issues:</strong> Must update with state when moving</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-green-600 mb-4">✅ Professional Service Benefits</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Privacy Protection:</strong> Professional address keeps you private</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Always Available:</strong> Professional service during business hours</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Professional Image:</strong> Enhances business credibility</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Never Miss Deadlines:</strong> Automatic compliance monitoring</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700"><strong>Consistent Service:</strong> No disruption when you move or travel</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Protect Your Business Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Don't risk your privacy and compliance. Get professional registered agent service starting at just $99/year.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:agent@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: agent@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🔒</div>
                    <div class="font-semibold text-sm">Privacy Protected</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📬</div>
                    <div class="font-semibold text-sm">Mail Forwarding</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📅</div>
                    <div class="font-semibold text-sm">Compliance Alerts</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🏢</div>
                    <div class="font-semibold text-sm">All 50 States</div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// Form handling
document.getElementById('registered-agent-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We\'ll set up your registered agent service within 24 hours and send you confirmation details.');
});
</script>

<?php get_footer(); ?>