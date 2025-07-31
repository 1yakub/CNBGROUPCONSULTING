<?php
/**
 * Template for BOI Filing Service Page
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
                            ⚠️ NEW 2024 Requirement
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                            BOI Filing Service - Avoid $10,000 Penalties
                        </h1>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                            New federal requirement: All businesses must file Beneficial Ownership Information with FinCEN. Don't risk massive penalties - we handle your compliance.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                            File BOI Now - $99
                        </a>
                        <a href="#requirements" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                            Check Requirements
                        </a>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">⚠️</div>
                            <div class="font-bold text-lg">$10,000</div>
                            <div class="text-blue-200 text-sm">Penalty Risk</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">📅</div>
                            <div class="font-bold text-lg">Jan 1, 2024</div>
                            <div class="text-blue-200 text-sm">Effective Date</div>
                        </div>
                        <div class="bg-white bg-opacity-10 rounded-lg p-4">
                            <div class="text-2xl mb-2">🛡️</div>
                            <div class="font-bold text-lg">Compliant</div>
                            <div class="text-blue-200 text-sm">Filing Service</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                    <div class="text-center mb-6">
                        <h3 class="text-2xl font-bold mb-2">BOI Compliance Check</h3>
                        <p class="text-gray-600">Free assessment • Expert guidance</p>
                    </div>
                    
                    <form id="boi-assessment-form" class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Legal Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Exact legal name" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Your Name</label>
                                <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">Title/Role</label>
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
                                <option value="Trust">Trust</option>
                                <option value="Other">Other Entity</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">When was your business formed?</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select timeframe</option>
                                <option value="before-2024">Before January 1, 2024</option>
                                <option value="2024-after">January 1, 2024 or later</option>
                                <option value="not-sure">Not sure</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Have you filed BOI yet?</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                                <option value="">Select status</option>
                                <option value="not-filed">No, haven't filed</option>
                                <option value="filed">Yes, already filed</option>
                                <option value="not-sure">Not sure what BOI is</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                            Check My BOI Requirements
                        </button>
                        
                        <p class="text-xs text-gray-500 text-center">
                            ✅ Free compliance check • ⚠️ Penalty avoidance • 🛡️ Expert filing
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- What is BOI Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What is BOI Filing?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understanding the new Beneficial Ownership Information requirement</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Beneficial Ownership Information (BOI)</h3>
                    <div class="space-y-4">
                        <p class="text-lg text-gray-600 leading-relaxed">
                            The Corporate Transparency Act requires most businesses to report information about their beneficial owners (people with significant control or ownership) to the Financial Crimes Enforcement Network (FinCEN).
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            This federal requirement became effective January 1, 2024, and failure to comply can result in penalties up to $10,000 and potential criminal charges.
                        </p>
                    </div>
                </div>
                
                <div class="bg-red-50 border border-red-200 rounded-lg p-8">
                    <h4 class="text-xl font-bold text-red-700 mb-4">⚠️ URGENT: Filing Deadlines</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-600 mt-1">📅</span>
                            <span class="text-gray-700"><strong>Existing businesses:</strong> Must file by Jan 1, 2025</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-600 mt-1">📅</span>
                            <span class="text-gray-700"><strong>New businesses (2024+):</strong> 90 days after formation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-600 mt-1">📅</span>
                            <span class="text-gray-700"><strong>Updates:</strong> 30 days after any changes</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-600 mt-1">💰</span>
                            <span class="text-gray-700"><strong>Penalties:</strong> Up to $10,000 + criminal charges</span>
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
                            BOI filing is not optional - it's a federal law. Most LLCs, corporations, and other entities formed in the US must comply. Don't risk massive penalties for non-compliance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Requirements Section -->
    <section id="requirements" class="py-16 lg:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Who Must File BOI?</h2>
                <p class="text-xl text-gray-600">Check if your business is required to file</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-red-600 mb-6">❌ MUST FILE BOI (Most Businesses)</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">LLCs (Limited Liability Companies)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Corporations (C-Corp, S-Corp)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Limited Partnerships</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Limited Liability Partnerships</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Business Trusts</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-1">•</span>
                            <span class="text-gray-700">Any entity formed by filing with a state</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white rounded-lg p-8 shadow-lg">
                    <h3 class="text-xl font-bold text-green-600 mb-6">✅ EXEMPT (Limited Exceptions)</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Large operating companies (500+ employees, $5M+ revenue)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Public companies (SEC reporting)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Banks and credit unions</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Insurance companies</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Tax-exempt entities (501c3)</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-1">•</span>
                            <span class="text-gray-700">Sole proprietorships (no filing required)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">📋</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Not Sure If You're Exempt?</h4>
                        <p class="text-gray-700">
                            Most small and medium businesses are NOT exempt and must file BOI. The exemptions are narrow and specific. If you're unsure, it's safer to file than risk penalties.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Information Required -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Information Required for BOI Filing</h2>
                <p class="text-xl text-gray-600">What data we need to complete your filing</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">📋 Company Information</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Legal business name</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Any trade names or DBAs</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Business address</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">State/country of formation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">EIN (Tax ID number)</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-gray-50 rounded-lg p-8">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">👤 Beneficial Owner Information</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Full legal name</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Date of birth</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Residential address</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Driver's license or passport info</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-cnb-primary mt-1">•</span>
                            <span class="text-gray-700">Percentage of ownership/control</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 bg-yellow-50 border border-yellow-200 rounded-lg p-6">
                <div class="flex items-start space-x-3">
                    <div class="text-2xl">🔒</div>
                    <div>
                        <h4 class="font-bold text-gray-900 mb-2">Privacy & Security</h4>
                        <p class="text-gray-700">
                            BOI information is confidential and protected. FinCEN has strict rules about who can access this data. We use secure processes to protect your sensitive information throughout the filing process.
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">BOI Filing Service</h2>
                <p class="text-xl text-gray-600">Professional compliance service vs. DIY filing</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- DIY Option -->
                <div class="bg-white rounded-lg p-8 text-center">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">DIY FinCEN Filing</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-gray-600">FREE</span>
                    </div>
                    <p class="text-gray-600 mb-6">File directly on FinCEN website</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Complex federal forms</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Risk of filing errors</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Penalties for mistakes</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">No ongoing compliance help</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-red-500 mt-0.5">❌</span>
                            <span class="text-gray-700">Confusing requirements</span>
                        </li>
                    </ul>
                    
                    <a href="https://www.fincen.gov/boi" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Try DIY Filing
                    </a>
                </div>

                <!-- Professional Service -->
                <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                            ⭐ RECOMMENDED
                        </div>
                    </div>
                    
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Professional BOI Filing</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-bold text-cnb-primary">$99</span>
                    </div>
                    <p class="text-gray-600 mb-6">Expert compliance service</p>
                    
                    <ul class="text-left space-y-3 mb-8">
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Expert form preparation</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Accuracy guarantee</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Penalty protection</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Update reminders</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">Ongoing compliance support</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <span class="text-green-500 mt-0.5">✅</span>
                            <span class="text-gray-700">1-year support included</span>
                        </li>
                    </ul>
                    
                    <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                        File BOI Now
                    </a>
                </div>
            </div>

            <div class="text-center mt-12">
                <div class="inline-flex items-center space-x-3 bg-red-50 border border-red-200 rounded-lg p-6">
                    <span class="text-3xl">⚠️</span>
                    <div class="text-left">
                        <div class="font-bold text-gray-900">Don't Risk $10,000 Penalties</div>
                        <div class="text-gray-600">Professional filing is cheaper than one penalty</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">BOI Filing FAQ</h2>
                <p class="text-xl text-gray-600">Common questions about Beneficial Ownership Information filing</p>
            </div>

            <div class="space-y-4">
                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-1')">
                        <h3 class="font-semibold text-gray-900">What happens if I don't file BOI?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-1">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="boi-faq-1">
                        <p class="text-gray-600">Failure to file BOI can result in civil penalties up to $500 per day (capped at $10,000) and criminal penalties including fines up to $10,000 and up to 2 years in prison. The government is serious about enforcement.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-2')">
                        <h3 class="font-semibold text-gray-900">When is my BOI filing due?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-2">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="boi-faq-2">
                        <p class="text-gray-600">Existing businesses (formed before 2024) must file by January 1, 2025. New businesses formed in 2024 or later have 90 days from formation. Any updates must be filed within 30 days of changes.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-3')">
                        <h3 class="font-semibold text-gray-900">Who is considered a beneficial owner?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-3">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="boi-faq-3">
                        <p class="text-gray-600">A beneficial owner is anyone who owns 25% or more of the business OR exercises substantial control (like CEO, CFO, or someone with authority over major decisions). Most small businesses have 1-3 beneficial owners.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-4')">
                        <h3 class="font-semibold text-gray-900">Is my information kept confidential?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-4">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="boi-faq-4">
                        <p class="text-gray-600">Yes, BOI information is confidential and protected by federal law. Only authorized government agencies and financial institutions can access this data under strict conditions. It's not public information.</p>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg">
                    <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-5')">
                        <h3 class="font-semibold text-gray-900">Do I need to update my BOI filing?</h3>
                        <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-5">+</span>
                    </button>
                    <div class="hidden px-6 pb-6" id="boi-faq-5">
                        <p class="text-gray-600">Yes, you must file updates within 30 days of any changes to beneficial ownership, company information, or beneficial owner details. We provide ongoing support to help you stay compliant.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Don't Risk $10,000 Penalties</h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                File your BOI with experts who understand the complex requirements. Protect your business from massive federal penalties.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
                <a href="mailto:boi@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                    Email: boi@cnbgroupconsulting.com
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">⚠️</div>
                    <div class="font-semibold text-sm">Avoid Penalties</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">🛡️</div>
                    <div class="font-semibold text-sm">Expert Filing</div>
                </div>
                <div class="bg-white bg-opacity-10 rounded-lg p-4">
                    <div class="text-2xl mb-2">📅</div>
                    <div class="font-semibold text-sm">Stay Compliant</div>
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
document.getElementById('boi-assessment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our BOI compliance specialist will contact you within 30 minutes with your assessment and next steps.');
});
</script>

<?php get_footer(); ?>