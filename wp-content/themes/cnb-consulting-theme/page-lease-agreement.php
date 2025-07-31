<?php
/**
 * Template for US Lease Agreement Service Page
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
                            📋 Legal Document Experts
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Professional US Lease Agreements
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Custom lease agreement preparation for commercial and residential properties. Legally compliant documents that protect your interests and investment.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get Lease - $149
                        </a>
                        <a href="#types" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            See Lease Types
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚖️</div>
                            <div class="font-bold text-lg">State</div>
                            <div class="text-blue-200 text-sm">Compliant</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">Asset</div>
                            <div class="text-blue-200 text-sm">Protection</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📝</div>
                            <div class="font-bold text-lg">Custom</div>
                            <div class="text-blue-200 text-sm">Terms</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">Lease Agreement Consultation</h3>
                        <p class="text-gray-600">Free review • Custom preparation</p>
                    </div>
                    
                    <form id="lease-consultation-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Full name" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                                <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Property State</label>
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Property Type</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select property type</option>
                                <option value="residential-single">Residential - Single Family</option>
                                <option value="residential-multi">Residential - Multi-Unit</option>
                                <option value="commercial-office">Commercial - Office Space</option>
                                <option value="commercial-retail">Commercial - Retail</option>
                                <option value="commercial-warehouse">Commercial - Warehouse</option>
                                <option value="commercial-restaurant">Commercial - Restaurant</option>
                                <option value="land">Land/Vacant Property</option>
                                <option value="other">Other Property Type</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Your Role</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select your role</option>
                                <option value="landlord">Landlord/Property Owner</option>
                                <option value="tenant">Tenant/Renter</option>
                                <option value="agent">Real Estate Agent</option>
                                <option value="property-manager">Property Manager</option>
                                <option value="attorney">Attorney</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Lease Term</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select lease term</option>
                                <option value="month-to-month">Month-to-Month</option>
                                <option value="6-months">6 Months</option>
                                <option value="1-year">1 Year</option>
                                <option value="2-years">2 Years</option>
                                <option value="3-5-years">3-5 Years</option>
                                <option value="5-plus-years">5+ Years</option>
                                <option value="custom">Custom Term</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Special Requirements</label>
                            <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" rows="3" placeholder="Any specific clauses, restrictions, or requirements..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Get My Custom Lease Agreement
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free consultation • ⚖️ State compliant • 📝 Custom terms
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Lease Types Section -->
    <section id="types" class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Lease Agreement Types</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Professional lease agreements for every property type and situation</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Residential Lease -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🏠</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Residential Lease</h3>
                        <p class="text-gray-600 text-sm">Single family homes and apartments</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Security deposit provisions</li>
                        <li>• Pet policies and restrictions</li>
                        <li>• Maintenance responsibilities</li>
                        <li>• Utilities and services</li>
                        <li>• Renewal and termination terms</li>
                        <li>• Late fee structures</li>
                    </ul>
                </div>

                <!-- Commercial Lease -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">BUSINESS</span>
                    </div>
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🏢</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Commercial Lease</h3>
                        <p class="text-gray-600 text-sm">Office, retail, and industrial spaces</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Triple net lease provisions</li>
                        <li>• CAM charges and escalations</li>
                        <li>• Use restrictions and compliance</li>
                        <li>• Assignment and subletting rights</li>
                        <li>• Tenant improvement allowances</li>
                        <li>• Operating expense passthroughs</li>
                    </ul>
                </div>

                <!-- Multi-Unit Residential -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🏘️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Multi-Unit Residential</h3>
                        <p class="text-gray-600 text-sm">Duplexes, condos, and apartments</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Shared space agreements</li>
                        <li>• HOA requirements integration</li>
                        <li>• Parking and storage allocation</li>
                        <li>• Noise and neighbor policies</li>
                        <li>• Common area usage rules</li>
                        <li>• Guest and visitor policies</li>
                    </ul>
                </div>

                <!-- Month-to-Month -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">📅</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Month-to-Month</h3>
                        <p class="text-gray-600 text-sm">Flexible short-term agreements</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Flexible termination notice</li>
                        <li>• Rent adjustment provisions</li>
                        <li>• Higher security deposit options</li>
                        <li>• Tenant screening requirements</li>
                        <li>• Property access rights</li>
                        <li>• Quick eviction procedures</li>
                    </ul>
                </div>

                <!-- Vacation Rental -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🏖️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Vacation Rental</h3>
                        <p class="text-gray-600 text-sm">Short-term and Airbnb properties</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Check-in/check-out procedures</li>
                        <li>• Damage and cleaning fees</li>
                        <li>• Guest capacity limits</li>
                        <li>• Local regulation compliance</li>
                        <li>• Cancellation policies</li>
                        <li>• Property usage restrictions</li>
                    </ul>
                </div>

                <!-- Land/Ground Lease -->
                <div class="bg-gray-50 rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="text-4xl mb-4">🌾</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Land/Ground Lease</h3>
                        <p class="text-gray-600 text-sm">Vacant land and development</p>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li>• Development rights and restrictions</li>
                        <li>• Environmental compliance</li>
                        <li>• Zoning and use limitations</li>
                        <li>• Infrastructure responsibilities</li>
                        <li>• Ground rent escalations</li>
                        <li>• Reversion and renewal rights</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Professional Lease Agreements Matter -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Professional Lease Agreements Matter</h2>
                <p class="text-xl text-gray-600">Protect your investment with legally sound documentation</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-red-700 mb-6">❌ Risks of Generic/Poor Leases</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Unenforceable terms and clauses</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">State law compliance violations</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Expensive eviction complications</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Liability exposure and lawsuits</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Lost rental income during disputes</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Property damage without recourse</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-green-50 border border-green-200 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-green-700 mb-6">✅ Benefits of Professional Leases</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Complete legal protection and compliance</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Enforceable terms custom to your needs</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Streamlined eviction procedures</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Clear dispute resolution mechanisms</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Optimal rent collection terms</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Property protection and maintenance clauses</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- State Compliance -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">⚖️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">State Law Compliance</h3>
                    <p class="text-gray-600 mb-6">Every state has specific landlord-tenant laws and disclosure requirements that must be included in lease agreements.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Mandatory disclosures</li>
                        <li>• Security deposit limits</li>
                        <li>• Eviction procedure compliance</li>
                        <li>• Fair housing requirements</li>
                    </ul>
                </div>

                <!-- Asset Protection -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow border-2 border-cnb-secondary">
                    <div class="absolute -top-3 left-6">
                        <span class="bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-xs font-bold">PROTECTION</span>
                    </div>
                    <div class="text-4xl mb-6">🛡️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Asset Protection</h3>
                    <p class="text-gray-600 mb-6">Professional lease agreements include comprehensive liability protection and risk mitigation clauses.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Liability limitation clauses</li>
                        <li>• Insurance requirements</li>
                        <li>• Indemnification provisions</li>
                        <li>• Property damage protection</li>
                    </ul>
                </div>

                <!-- Revenue Optimization -->
                <div class="bg-white rounded-lg p-8 hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Revenue Optimization</h3>
                    <p class="text-gray-600 mb-6">Strategic lease terms that maximize rental income while minimizing vacancy and collection issues.</p>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Rent escalation clauses</li>
                        <li>• Late fee structures</li>
                        <li>• Additional income provisions</li>
                        <li>• Renewal incentives</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Lease Provisions -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Essential Lease Agreement Provisions</h2>
                <p class="text-xl text-gray-600">Critical clauses that every lease agreement must include</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Rent Terms -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">💵</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Rent & Payment Terms</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Monthly rent amount</li>
                        <li>• Due date and grace period</li>
                        <li>• Late fee structure</li>
                        <li>• Payment methods accepted</li>
                        <li>• Rent increase provisions</li>
                    </ul>
                </div>

                <!-- Security & Deposits -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">🔒</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Security & Deposits</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Security deposit amount</li>
                        <li>• Pet deposit requirements</li>
                        <li>• Deposit return conditions</li>
                        <li>• Damage assessment procedures</li>
                        <li>• Interest on deposits</li>
                    </ul>
                </div>

                <!-- Property Use -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">🏠</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Property Use & Rules</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Occupancy limits</li>
                        <li>• Pet policies and restrictions</li>
                        <li>• Smoking and substance policies</li>
                        <li>• Guest and visitor rules</li>
                        <li>• Noise and behavior standards</li>
                    </ul>
                </div>

                <!-- Maintenance -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mx-auto mb-6">🔧</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-4">Maintenance & Repairs</h3>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Landlord responsibilities</li>
                        <li>• Tenant maintenance duties</li>
                        <li>• Emergency repair procedures</li>
                        <li>• Property inspection rights</li>
                        <li>• Alteration and improvement policies</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Lease Agreement Services</h2>
                <p class="text-xl text-gray-600">Professional lease preparation vs. template downloads</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Template Option -->
                <div class="bg-white rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Generic Templates</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-600">$29</span>
                        <span class="text-gray-500 text-lg"> download</span>
                    </div>
                    <p class="text-gray-600 mb-6">One-size-fits-all documents</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Generic terms and conditions</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">May not comply with state laws</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No customization for your property</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No legal review or support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Risk of unenforceable terms</span>
                        </li>
                    </ul>
                    
                    <a href="#" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Download Template
                    </a>
                </div>

                <!-- Professional Service -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ RECOMMENDED
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Custom Lease</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$149</span>
                    </div>
                    <p class="text-gray-600 mb-6">Custom preparation and review</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Custom terms for your property</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">State law compliance guaranteed</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Property-specific provisions</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Attorney review and approval</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Unlimited revisions included</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">90-day support included</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Get Custom Lease
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-blue-50 border border-blue-200 rounded-lg p-6">
                    <span class="text-3xl">⚖️</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Legal Protection Worth Thousands</div>
                        <div class="text-gray-600">Professional lease prevents costly disputes and liability</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Lease Agreement FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about professional lease agreements</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('lease-faq-1')">
                        <h3 class="font-semibold text-gray-900">Can I use the same lease for all my properties?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-lease-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="lease-faq-1">
                        <p class="text-gray-600">While a base template can be adapted, each property may require specific provisions based on its type, location, local laws, and unique characteristics. We customize leases for optimal protection and compliance.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('lease-faq-2')">
                        <h3 class="font-semibold text-gray-900">What happens if my lease doesn't comply with state law?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-lease-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="lease-faq-2">
                        <p class="text-gray-600">Non-compliant leases can be unenforceable, result in penalties, and create liability exposure. Courts may void certain clauses or the entire agreement, leaving you without legal protection during disputes.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('lease-faq-3')">
                        <h3 class="font-semibold text-gray-900">How long does it take to prepare a custom lease?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-lease-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="lease-faq-3">
                        <p class="text-gray-600">Most custom lease agreements are completed within 2-3 business days. Complex commercial leases or properties with unique requirements may take 5-7 days for proper customization and review.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('lease-faq-4')">
                        <h3 class="font-semibold text-gray-900">Do you provide leases for commercial properties?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-lease-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="lease-faq-4">
                        <p class="text-gray-600">Yes, we prepare commercial leases for office space, retail, restaurants, warehouses, and other commercial properties. Commercial leases require specialized provisions for CAM charges, use restrictions, and business-specific terms.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('lease-faq-5')">
                        <h3 class="font-semibold text-gray-900">Can you help with lease modifications or addendums?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-lease-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="lease-faq-5">
                        <p class="text-gray-600">Absolutely. We prepare lease amendments, addendums, and modifications for rent increases, policy changes, or special circumstances. All modifications are properly documented and legally compliant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Protect Your Property Investment</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Get professionally prepared lease agreements that comply with state laws and protect your interests. Custom terms for your specific property needs.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:leases@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: leases@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚖️</div>
                    <div class="font-semibold text-sm">Legal Compliance</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Asset Protection</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📝</div>
                    <div class="font-semibold text-sm">Custom Terms</div>
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
document.getElementById('lease-consultation-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our legal document specialist will contact you within 2 hours to discuss your lease requirements and begin preparation.');
});
</script>

<?php get_footer(); ?>