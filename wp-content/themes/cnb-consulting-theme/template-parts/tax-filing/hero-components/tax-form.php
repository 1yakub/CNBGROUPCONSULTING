<?php
/**
 * Tax Filing Service - Tax Consultation Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

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