<?php
/**
 * Premium Service Pricing Card (Most Popular)
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Premium Service (Most Popular) -->
<div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
            ⭐ MOST POPULAR
        </div>
    </div>
    
    <h3 class="text-xl font-bold text-gray-900 mb-4">Premium Service</h3>
    <div class="mb-6">
        <span class="text-4xl font-bold text-cnb-primary">$149</span>
        <span class="text-gray-500 text-lg">/year</span>
    </div>
    <p class="text-gray-600 mb-6">Complete service with mail scanning and priority support</p>
    
    <ul class="text-left space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Everything in Basic Service</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Mail scanning & digital delivery</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Priority mail forwarding</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Phone & email support</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Compliance monitoring alerts</span>
        </li>
    </ul>
    
    <a href="<?php echo esc_url(cnb_get_cta_link('choose-premium')); ?>" target="_blank" rel="noopener" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
        Choose Premium
    </a>
</div>