<?php
/**
 * EIN Form Component for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold mb-2">Get Your EIN Today</h3>
        <p class="text-gray-600">Fast application • Same day processing</p>
    </div>
    
    <form id="ein-application-form" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Legal Name</label>
            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Exact name as filed with state" required>
        </div>
        
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
            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Entity Type</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                <option value="">Select entity type</option>
                <option value="LLC">LLC (Limited Liability Company)</option>
                <option value="Corporation">Corporation</option>
                <option value="Partnership">Partnership</option>
                <option value="Sole Proprietorship">Sole Proprietorship</option>
                <option value="Non-Profit">Non-Profit Organization</option>
                <option value="Other">Other</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">State of Formation</label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" required>
                <option value="">Select state</option>
                <option value="DE">Delaware</option>
                <option value="NV">Nevada</option>
                <option value="WY">Wyoming</option>
                <option value="TX">Texas</option>
                <option value="FL">Florida</option>
                <option value="CA">California</option>
                <option value="NY">New York</option>
                <!-- Add more states as needed -->
            </select>
        </div>
        
        <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
            Get My EIN - $99
        </button>
        
        <p class="text-xs text-gray-500 text-center">
            ✅ Same day processing • 🛡️ 100% guarantee • 📞 Expert support
        </p>
    </form>
</div>