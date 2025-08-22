<?php
/**
 * Basic Service Pricing Card
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Basic Service -->
<div class="bg-gray-50 rounded-lg p-8 text-center">
    <h3 class="text-xl font-bold text-gray-900 mb-4">Basic Service</h3>
    <div class="mb-6">
        <span class="text-4xl font-bold text-cnb-primary">$99</span>
        <span class="text-gray-500 text-lg">/year</span>
    </div>
    <p class="text-gray-600 mb-6">Essential registered agent service for one state</p>
    
    <ul class="text-left space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Professional registered agent address</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Legal document receipt & forwarding</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Email notifications</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Online account access</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Compliance calendar</span>
        </li>
    </ul>
    
    <a href="<?php echo esc_url(cnb_get_cta_link('choose-basic')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
        Choose Basic
    </a>
</div>