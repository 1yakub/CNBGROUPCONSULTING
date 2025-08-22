<?php
/**
 * Company Formation - Hero Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

            <div class="bg-white rounded-lg p-8 text-gray-900 shadow-2xl">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold mb-2">Get Started Today</h3>
                    <p class="text-gray-600">Free consultation • No obligation</p>
                </div>
                
                <form id="formation-form" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Business Name</label>
                        <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="Your Business Name">
                    </div>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">State</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                            <option>Select State</option>
                            <option>Delaware</option>
                            <option>Nevada</option>
                            <option>Wyoming</option>
                            <option>Texas</option>
                            <option>Florida</option>
                            <option>California</option>
                            <option>New York</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-4 rounded-lg font-bold text-lg transition">
                        Get Free Quote
                    </button>
                    
                    <p class="text-xs text-gray-500 text-center">
                        By submitting, you consent to being contacted about our services.
                    </p>
                </form>
            </div>