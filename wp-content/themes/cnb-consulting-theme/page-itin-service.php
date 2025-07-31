<?php
/**
 * Template for ITIN Service Page
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
                            🌎 IRS Certified ITIN Specialists
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            Get Your ITIN Number Fast & Easy
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            Professional ITIN application service for foreign nationals and non-residents. Expert preparation, document handling, and IRS submission.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            Get ITIN - $199
                        </a>
                        <a href="#process" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            How It Works
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🏆</div>
                            <div class="font-bold text-lg">IRS Certified</div>
                            <div class="text-blue-200 text-sm">Acceptance Agents</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📄</div>
                            <div class="font-bold text-lg">Document</div>
                            <div class="text-blue-200 text-sm">Authentication</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚡</div>
                            <div class="font-bold text-lg">6-8 Week</div>
                            <div class="text-blue-200 text-sm">Processing</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">ITIN Application Form</h3>
                        <p class="text-gray-600">Free consultation • Expert guidance</p>
                    </div>
                    
                    <form id="itin-application-form" class="space-y-4">
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
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Country of Birth</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select country</option>
                                <option value="Mexico">Mexico</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Canada">Canada</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Current Tax Situation</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select situation</option>
                                <option value="spouse">Spouse of US citizen/resident</option>
                                <option value="student">Student with US income</option>
                                <option value="investor">Foreign investor</option>
                                <option value="business">Business owner</option>
                                <option value="dependent">Dependent of US taxpayer</option>
                                <option value="other">Other tax requirement</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Need ITIN For</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select reason</option>
                                <option value="tax-return">Filing tax return</option>
                                <option value="bank-account">Opening bank account</option>
                                <option value="business">Starting business</option>
                                <option value="mortgage">Getting mortgage</option>
                                <option value="investment">Investment account</option>
                                <option value="other">Other purpose</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Start My ITIN Application
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ IRS certified agents • 📄 Document authentication • 🛡️ Secure processing
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is ITIN Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is an ITIN?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding Individual Taxpayer Identification Numbers for non-US citizens</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Individual Taxpayer Identification Number</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            An ITIN is a nine-digit tax processing number issued by the IRS for individuals who are required to have a US taxpayer identification number but don't qualify for a Social Security Number (SSN).
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            ITINs are essential for foreign nationals who need to file US tax returns, open bank accounts, apply for mortgages, or start businesses in the United States.
                        </p>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-gray-900 mb-4">You Need an ITIN If:</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You're a foreign national with US tax obligations</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You're married to a US citizen filing jointly</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You need to open a US bank account</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You're starting a business in the US</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You're applying for a mortgage</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">✓</span>
                            <span class="text-gray-700">You're a dependent of a US taxpayer</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border-l-4 border-cnb-primary p-6 rounded-lg">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">💡</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Important Note</h4>
                        <p class="text-gray-700">
                            ITINs are for tax purposes only and don't authorize work in the US or provide eligibility for Social Security benefits. They expire if not used for three consecutive years.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ITIN Application Process</h2>
                <p class="text-xl text-gray-600">Professional service with IRS Certified Acceptance Agents</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">1</div>
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Document Review</h3>
                    <p class="text-gray-600 leading-relaxed">We review your situation and determine the best approach for your ITIN application.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">2</div>
                    <div class="text-4xl mb-4">📄</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Form Preparation</h3>
                    <p class="text-gray-600 leading-relaxed">We prepare Form W-7 and any required tax return with complete accuracy.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">3</div>
                    <div class="text-4xl mb-4">🏛️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Document Authentication</h3>
                    <p class="text-gray-600 leading-relaxed">As IRS Certified Acceptance Agents, we authenticate your documents without mailing originals.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-cnb-primary text-white rounded-full flex items-center justify-center text-3xl font-bold mx-auto mb-6">4</div>
                    <div class="text-4xl mb-4">📬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">IRS Submission</h3>
                    <p class="text-gray-600 leading-relaxed">We submit your application to the IRS and track status until you receive your ITIN.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-white rounded-lg shadow-lg p-6">
                    <span class="text-3xl">🏆</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">IRS Certified Acceptance Agents</div>
                        <div class="text-gray-600">Authorized to authenticate documents and expedite processing</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-16 lg:py-24 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ITIN Service Pricing</h2>
                <p class="text-xl text-gray-600">Professional ITIN application with expert support</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Basic ITIN Service -->
                <div class="bg-gray-50 rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Basic ITIN Service</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$199</span>
                    </div>
                    <p class="text-gray-600 mb-6">Standard ITIN application service</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Form W-7 preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Document authentication</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">IRS submission</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Status tracking</span>
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

                <!-- Complete ITIN Package -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ RECOMMENDED
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Complete ITIN Package</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$299</span>
                    </div>
                    <p class="text-gray-600 mb-6">ITIN application plus tax return preparation</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Everything in Basic Service</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Tax return preparation (Form 1040)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Deduction optimization</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Phone consultation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Priority processing</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">1-year support</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Choose Complete
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                    <span class="text-3xl">💰</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">No Hidden Fees • Money-Back Guarantee</div>
                        <div class="text-gray-600">Transparent pricing with full satisfaction guarantee</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Documents -->
    <section class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Required Documents</h2>
                <p class="text-xl text-gray-600">Documents needed for your ITIN application</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Identity Documents (Original or Certified Copy)</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📄</span>
                            <span class="text-gray-700">Passport (most common)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📄</span>
                            <span class="text-gray-700">National identification card</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📄</span>
                            <span class="text-gray-700">Driver's license (foreign)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📄</span>
                            <span class="text-gray-700">Visa (if applicable)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📄</span>
                            <span class="text-gray-700">Birth certificate (with official translation)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Additional Requirements</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📋</span>
                            <span class="text-gray-700">Complete tax return (Form 1040)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📋</span>
                            <span class="text-gray-700">Proof of US tax liability</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📋</span>
                            <span class="text-gray-700">Supporting income documents</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📋</span>
                            <span class="text-gray-700">Marriage certificate (if applicable)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">📋</span>
                            <span class="text-gray-700">Dependent documentation (if applicable)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">⚠️</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Important: Document Authentication</h4>
                        <p class="text-gray-700">
                            As IRS Certified Acceptance Agents, we can authenticate your documents in person, so you don't need to mail original documents to the IRS. This significantly reduces the risk of document loss.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ITIN FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about ITIN applications</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-1')">
                        <h3 class="font-semibold text-gray-900">How long does it take to get an ITIN?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="itin-faq-1">
                        <p class="text-gray-600">The IRS typically processes ITIN applications within 7-11 weeks from the date they receive your complete application. Using our Certified Acceptance Agent service can help ensure faster processing.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-2')">
                        <h3 class="font-semibold text-gray-900">Do I need to file a tax return to get an ITIN?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="itin-faq-2">
                        <p class="text-gray-600">Yes, you must attach a valid tax return to your ITIN application unless you qualify for one of the five exceptions. Most applicants need to file Form 1040 along with Form W-7.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-3')">
                        <h3 class="font-semibold text-gray-900">Can I mail my original documents to the IRS?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="itin-faq-3">
                        <p class="text-gray-600">While possible, it's risky as documents can be lost. As IRS Certified Acceptance Agents, we can authenticate your documents in person, eliminating the need to mail originals and reducing processing time.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-4')">
                        <h3 class="font-semibold text-gray-900">Does an ITIN expire?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="itin-faq-4">
                        <p class="text-gray-600">Yes, ITINs expire if not used on a tax return for three consecutive years. ITINs issued before 2013 have also expired and need renewal. We can help with ITIN renewals too.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-5')">
                        <h3 class="font-semibold text-gray-900">Can I use an ITIN to work in the US?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="itin-faq-5">
                        <p class="text-gray-600">No, ITINs are for tax purposes only and do not authorize work in the US. You need proper work authorization from USCIS to legally work in the United States.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Get Your ITIN Today</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Don't risk mailing your original documents. Work with IRS Certified Acceptance Agents for secure, professional ITIN processing.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:itin@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: itin@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🏆</div>
                    <div class="font-semibold text-sm">IRS Certified Agents</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Secure Process</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📄</div>
                    <div class="font-semibold text-sm">No Mailing Required</div>
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
document.getElementById('itin-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our ITIN specialist will contact you within 2 hours to discuss your application.');
});
</script>

<?php get_footer(); ?>