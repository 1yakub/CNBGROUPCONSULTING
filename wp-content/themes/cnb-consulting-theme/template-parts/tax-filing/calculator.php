<?php
/**
 * Tax Filing Service - Tax Savings Calculator Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Tax Savings Calculator -->
<section id="calculator" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Tax Savings Calculator</h2>
            <p class="text-xl text-gray-600">See how much you could save with professional tax preparation</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Enter Your Information</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Annual Income</label>
                            <input type="number" id="annual-income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="75000">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Filing Status</label>
                            <select id="filing-status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="single">Single</option>
                                <option value="married-joint">Married Filing Jointly</option>
                                <option value="married-separate">Married Filing Separately</option>
                                <option value="head-household">Head of Household</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Owner?</label>
                            <select id="business-owner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Homeowner?</label>
                            <select id="homeowner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="no">No</option>
                                <option value="yes">Yes</option>
                            </select>
                        </div>
                        
                        <button onclick="calculateSavings()" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
                            Calculate My Savings
                        </button>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Your Potential Savings</h3>
                    
                    <div id="calculator-results" class="hidden">
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="text-gray-600">DIY Tax Software:</span>
                                <span class="font-semibold" id="diy-refund">$0</span>
                            </div>
                            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                                <span class="text-gray-600">Professional Preparation:</span>
                                <span class="font-semibold text-cnb-primary" id="pro-refund">$0</span>
                            </div>
                            <div class="flex justify-between items-center py-3 bg-cnb-secondary rounded-lg px-4">
                                <span class="font-bold text-gray-900">Additional Savings:</span>
                                <span class="font-bold text-2xl text-gray-900" id="additional-savings">$0</span>
                            </div>
                        </div>
                        
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                            <p class="text-sm text-gray-700">
                                <strong>Note:</strong> This is an estimate based on average savings. Actual results may vary. Schedule a consultation for a personalized tax review.
                            </p>
                        </div>
                        
                        <div class="mt-6">
                            <a href="#contact" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition text-center block">
                                Schedule My Consultation
                            </a>
                        </div>
                    </div>
                    
                    <div id="calculator-placeholder" class="text-center py-12">
                        <div class="text-6xl mb-4">📊</div>
                        <p class="text-gray-500">Enter your information to see potential tax savings</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>