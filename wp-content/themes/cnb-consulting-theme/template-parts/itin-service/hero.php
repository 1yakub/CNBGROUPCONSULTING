<?php
/**
 * ITIN Service Hero Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

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