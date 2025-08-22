<?php
/**
 * Premium Package Card Component
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Premium Package -->
<div class="bg-white rounded-lg shadow-lg p-8 relative">
    <div class="text-center mb-8">
        <div class="inline-block bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-3 py-1 rounded-full text-sm font-medium mb-4">Premium</div>
        <h3 class="text-2xl font-bold text-gray-900 mb-4">LLC Premium</h3>
        <div class="mb-4">
            <span class="text-4xl font-bold text-cnb-primary">$799</span>
            <span class="text-gray-500 text-lg"> + state fees</span>
        </div>
        <p class="text-gray-600">Full-service business launch package</p>
    </div>

    <ul class="space-y-3 mb-8">
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Everything in Complete Package</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Business License Research</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">DBA Registration</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Business Credit Report</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">Expedited 24-Hour Filing</span>
        </li>
        <li class="flex items-start space-x-3">
            <span class="text-green-500 mt-0.5">✅</span>
            <span class="text-gray-700">1-Hour Business Consultation</span>
        </li>
    </ul>

    <a href="<?php echo esc_url(cnb_get_cta_link('choose-premium')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-semibold hover:bg-purple-500 hover:text-white transition text-center">
        Choose Premium
    </a>
</div>