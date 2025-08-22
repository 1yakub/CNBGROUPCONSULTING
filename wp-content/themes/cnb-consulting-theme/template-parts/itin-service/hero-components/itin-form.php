<?php
/**
 * ITIN Service Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

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