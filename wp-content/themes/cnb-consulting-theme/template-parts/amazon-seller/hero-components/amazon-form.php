<?php
/**
 * Amazon Seller Service - Hero Form
 * 
 * @package CNB_Consulting_Theme
 */
?>

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