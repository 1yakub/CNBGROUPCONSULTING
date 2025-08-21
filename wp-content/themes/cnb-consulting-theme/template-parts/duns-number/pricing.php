<?php
/**
 * Pricing Section for DUNS Number Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">DUNS Number Service Pricing</h2>
            <p class="text-xl text-gray-600">Professional service vs. DIY application</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <!-- DIY Option -->
            <div class="bg-white rounded-lg p-8 text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">DIY D&B Application</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-gray-600">FREE</span>
                </div>
                <p class="text-gray-600 mb-6">Apply directly through D&B website</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">2-4 week processing time</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Complex application process</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">No error checking</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">Risk of delays or rejection</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-red-500 mt-0.5">❌</span>
                        <span class="text-gray-700">No ongoing support</span>
                    </li>
                </ul>
                
                <a href="https://www.dnb.com" target="_blank" class="block w-full bg-white border-2 border-gray-300 text-gray-600 py-3 px-6 rounded-lg font-semibold hover:bg-gray-100 transition">
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
                    <span class="text-4xl font-bold text-cnb-primary">$149</span>
                </div>
                <p class="text-gray-600 mb-6">Expert DUNS application service</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">48-hour expedited processing</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Expert application preparation</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Complete accuracy verification</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Direct submission to D&B</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Business credit consultation</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">90-day support included</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('get-started')); ?>" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Get Started Now
                </a>
            </div>
        </div>

        <div class="text-center mt-12">
            <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                <span class="text-3xl">💰</span>
                <div class="text-left">
                    <div class="font-bold text-gray-900">Time is Money</div>
                    <div class="text-gray-600">Get your DUNS Number 10x faster with professional service</div>
                </div>
            </div>
        </div>
    </div>
</section>