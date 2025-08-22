<?php
/**
 * Basic Package Card Component
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Basic Package -->
<div class="bg-white rounded-lg shadow-lg p-8 relative">
    <div class="text-center mb-8">
        <div class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium mb-4">Basic</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Starter</h3>
        <div class="mb-4">
            <span class="text-4xl font-bold text-cnb-primary">$299</span>
            <span class="text-gray-500 text-lg"> + state fees</span>
        </div>
        <p class="text-gray-600">Perfect for simple business structures</p>
    </div>

    <ul class="space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">LLC Formation & State Filing</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Registered Agent (1st Year FREE)</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Articles of Organization</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Email & Phone Support</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Lifetime Customer Dashboard</span>
        </li>
    </ul>

    <a href="<?php echo esc_url(cnb_get_cta_link('choose-basic')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition text-center">
        Choose Basic
    </a>
</div>