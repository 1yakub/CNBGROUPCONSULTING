<?php
/**
 * Enterprise Service Pricing Card
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Enterprise Service -->
<div class="bg-gray-50 rounded-lg p-8 text-center">
    <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise Service</h3>
    <div class="mb-6">
        <span class="text-4xl font-bold text-cnb-primary">$249</span>
        <span class="text-gray-500 text-lg">/year</span>
    </div>
    <p class="text-gray-600 mb-6">Multi-state service with dedicated support</p>
    
    <ul class="text-left space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Everything in Premium Service</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Service in up to 3 states</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Dedicated account manager</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Priority customer support</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Custom compliance reporting</span>
        </li>
    </ul>
    
    <a href="<?php echo esc_url(cnb_get_cta_link('choose-enterprise')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
        Choose Enterprise
    </a>
</div>