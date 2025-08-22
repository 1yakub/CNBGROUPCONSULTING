<?php
/**
 * BOI Filing - Application Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

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