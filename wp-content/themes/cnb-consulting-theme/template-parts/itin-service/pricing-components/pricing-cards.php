<?php
/**
 * ITIN Service Pricing Cards
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
    <!-- Basic ITIN Service -->
    <div class="bg-gray-50 rounded-lg p-8 text-center">
        <h3 class="text-xl font-bold text-gray-900 mb-4">Basic ITIN Service</h3>
        <div class="mb-6">
            <span class="text-4xl font-bold text-cnb-primary">$199</span>
        </div>
        <p class="text-gray-600 mb-6">Standard ITIN application service</p>
        
        <ul class="text-left space-y-3 mb-8">
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Form W-7 preparation</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Document authentication</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">IRS submission</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Status tracking</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Email support</span>
            </li>
        </ul>
        
        <a href="<?php echo esc_url(cnb_get_cta_link('choose-basic')); ?>" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
            Choose Basic
        </a>
    </div>

    <!-- Complete ITIN Package -->
    <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
            <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                ⭐ RECOMMENDED
            </div>
        </div>
        
        <h3 class="text-xl font-bold text-gray-900 mb-4">Complete ITIN Package</h3>
        <div class="mb-6">
            <span class="text-4xl font-bold text-cnb-primary">$299</span>
        </div>
        <p class="text-gray-600 mb-6">ITIN application plus tax return preparation</p>
        
        <ul class="text-left space-y-3 mb-8">
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Everything in Basic Service</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Tax return preparation (Form 1040)</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Deduction optimization</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Phone consultation</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">Priority processing</span>
            </li>
            <li class="flex items-start space-x-3">
                <span class="text-green-500 mt-0.5">✅</span>
                <span class="text-gray-700">1-year support</span>
            </li>
        </ul>
        
        <a href="<?php echo esc_url(cnb_get_cta_link('choose-complete')); ?>" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
            Choose Complete
        </a>
    </div>
</div>