<?php
/**
 * Pricing Section for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
            <p class="text-xl text-gray-600">Professional EIN service at an affordable fixed rate</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- DIY Option -->
            <div class="bg-gray-50 rounded-lg p-8 text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">DIY IRS Website</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-600">FREE</span>
                </div>
                <p class="text-gray-600 mb-6">Apply directly through IRS website</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Complex IRS forms and process</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">2-4 week processing time</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">No error checking or support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Risk of delays or rejection</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Business hours only (limited)</span>
                    </li>
                </ul>
                
                <a href="https://www.irs.gov/businesses/small-businesses-self-employed/apply-for-an-employer-identification-number-ein-online" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Try DIY Route
                </a>
            </div>

            <!-- Professional Service -->
            <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                        ⭐ RECOMMENDED
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-4">Professional Service</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-cnb-primary">$99</span>
                </div>
                <p class="text-gray-600 mb-6">Expert EIN application service</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Same day processing (4-6 hours)</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">IRS-certified professionals</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Complete error checking</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Direct phone & email support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">100% accuracy guarantee</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Official IRS confirmation letter</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('get-ein-now')); ?>" target="_blank" rel="noopener" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Get Started Now
                </a>
            </div>
        </div>

        <div class="text-center mt-12">
            <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                <span class="text-3xl">💰</span>
                <div class="text-left">
                    <div class="font-bold text-gray-900">Save Time & Avoid Errors</div>
                    <div class="text-gray-600">Professional service pays for itself in time saved</div>
                </div>
            </div>
        </div>
    </div>
</section>