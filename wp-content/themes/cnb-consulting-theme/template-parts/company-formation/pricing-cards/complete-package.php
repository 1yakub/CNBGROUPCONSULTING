<?php
/**
 * Complete Package Card Component (Most Popular)
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Standard Package (Most Popular) -->
<div class="bg-white rounded-lg shadow-lg p-8 relative border-2 border-cnb-secondary transform scale-105">
    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
        <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
            ⭐ MOST POPULAR
        </div>
    </div>

    <div class="text-center mb-8">
        <div class="inline-block bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-sm font-medium mb-4">Recommended</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Complete</h3>
        <div class="mb-4">
            <span class="text-4xl font-bold text-cnb-primary">$499</span>
            <span class="text-gray-500 text-lg"> + state fees</span>
        </div>
        <p class="text-gray-600">Complete business formation solution</p>
    </div>

    <ul class="space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Everything in Basic Package</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">EIN Tax ID Number</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Custom Operating Agreement</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Banking Resolution</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Priority Processing</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Compliance Calendar</span>
        </li>
    </ul>

    <a href="<?php echo esc_url(cnb_get_cta_link('choose-complete')); ?>" target="_blank" rel="noopener" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition text-center">
        Choose Complete
    </a>
</div>