<?php
/**
 * BOI Filing - Pricing Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">BOI Filing Service</h2>
            <p class="text-xl text-gray-600">Professional compliance service vs. DIY filing</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- DIY Option -->
            <div class="bg-white rounded-lg p-8 text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">DIY FinCEN Filing</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-600">FREE</span>
                </div>
                <p class="text-gray-600 mb-6">File directly on FinCEN website</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Complex federal forms</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Risk of filing errors</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Penalties for mistakes</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">No ongoing compliance help</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Confusing requirements</span>
                    </li>
                </ul>
                
                <a href="https://www.fincen.gov/boi" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Try DIY Filing
                </a>
            </div>

            <!-- Professional Service -->
            <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                        ⭐ RECOMMENDED
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-4">Professional BOI Filing</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-cnb-primary">$99</span>
                </div>
                <p class="text-gray-600 mb-6">Expert compliance service</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Expert form preparation</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Accuracy guarantee</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Penalty protection</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Update reminders</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Ongoing compliance support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">1-year support included</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('file-boi-now')); ?>" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                    File BOI Now
                </a>
            </div>
        </div>

        <div class="text-center mt-12">
            <div class="inline-flex items-center space-x-3 bg-red-50 border border-red-200 rounded-lg p-6">
                <span class="text-3xl">⚠️</span>
                <div class="text-left">
                    <div class="font-bold text-gray-900">Don't Risk $10,000 Penalties</div>
                    <div class="text-gray-600">Professional filing is cheaper than one penalty</div>
                </div>
            </div>
        </div>
    </div>
</section>