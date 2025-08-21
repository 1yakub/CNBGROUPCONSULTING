<!-- Tax Savings Calculator -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Calculate Your Tax Savings</h2>
            <p class="text-xl text-gray-600">See how much you could save with a resale certificate</p>
        </div>

        <div class="bg-gray-50 rounded-lg p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold text-gray-900 mb-6">Savings Calculator</h3>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Monthly Inventory Purchases</label>
                            <input type="number" id="monthly-purchases" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="$10,000" min="0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">State Sales Tax Rate</label>
                            <select id="tax-rate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                                <option value="0.05">5% (Delaware, Montana)</option>
                                <option value="0.06">6% (Colorado, Utah)</option>
                                <option value="0.07">7% (Indiana, Mississippi)</option>
                                <option value="0.08" selected>8% (Arizona, Nevada)</option>
                                <option value="0.09">9% (Louisiana, Tennessee)</option>
                                <option value="0.10">10%+ (California, Washington)</option>
                            </select>
                        </div>
                        <button onclick="calculateSavings()" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-bold transition">
                            Calculate Savings
                        </button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6">
                    <h4 class="text-lg font-bold text-gray-900 mb-4">Your Potential Savings</h4>
                    <div id="savings-results" class="space-y-4">
                        <div class="text-center text-gray-500">
                            Enter your purchase amount to see potential savings
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>