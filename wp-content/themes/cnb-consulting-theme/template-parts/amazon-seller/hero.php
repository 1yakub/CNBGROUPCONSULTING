<?php
/**
 * Amazon Seller Service - Hero Section
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