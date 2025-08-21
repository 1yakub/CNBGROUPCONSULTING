<?php
/**
 * Tax Filing Service - Hero Section
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
                        🏆 IRS Certified Tax Experts
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        Professional Tax Filing & Preparation Services
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
                        Maximize your deductions, minimize your taxes, and ensure IRS compliance with our certified tax professionals. Business and personal tax services available.
                    </p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#services" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
                        Get Tax Help Now
                    </a>
                    <a href="#calculator" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
                        Tax Savings Calculator
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">📊</div>
                        <div class="font-bold text-lg">$2,500</div>
                        <div class="text-blue-200 text-sm">Avg. Tax Savings</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">⚡</div>
                        <div class="font-bold text-lg">48 Hours</div>
                        <div class="text-blue-200 text-sm">Average Turnaround</div>
                    </div>
                    <div class="bg-white bg-opacity-10 rounded-lg p-4">
                        <div class="text-2xl mb-2">🛡️</div>
                        <div class="font-bold text-lg">100%</div>
                        <div class="text-blue-200 text-sm">Accuracy Guarantee</div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold mb-2">Free Tax Consultation</h3>
                    <p class="text-gray-600">Speak with a certified tax professional</p>
                </div>
                
                <form id="tax-consultation-form" class="space-y-4">
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
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Tax Situation</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                            <option value="">Select your situation</option>
                            <option value="personal">Personal Tax Return</option>
                            <option value="business">Business Tax Return</option>
                            <option value="both">Both Personal & Business</option>
                            <option value="amendment">Tax Amendment/Correction</option>
                            <option value="planning">Tax Planning</option>
                            <option value="audit">IRS Audit Support</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Estimated Annual Income</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                            <option value="">Select income range</option>
                            <option value="under-50k">Under $50,000</option>
                            <option value="50k-100k">$50,000 - $100,000</option>
                            <option value="100k-250k">$100,000 - $250,000</option>
                            <option value="250k-500k">$250,000 - $500,000</option>
                            <option value="over-500k">Over $500,000</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                        Schedule Free Consultation
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center">
                        Secure consultation • No obligation • IRS certified professionals
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>