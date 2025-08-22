<?php
/**
 * Tax Filing Service - Calculator Results Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="bg-gray-50 rounded-lg p-6">
    <h3 class="text-xl font-bold text-gray-900 mb-6">Your Potential Savings</h3>
    
    <div id="calculator-results" class="hidden">
        <div class="space-y-4">
            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                <span class="text-gray-600">DIY Tax Software:</span>
                <span class="font-semibold" id="diy-refund">$0</span>
            </div>
            <div class="flex justify-between items-center py-3 border-b border-gray-200">
                <span class="text-gray-600">Professional Preparation:</span>
                <span class="font-semibold text-cnb-primary" id="pro-refund">$0</span>
            </div>
            <div class="flex justify-between items-center py-3 bg-cnb-secondary rounded-lg px-4">
                <span class="font-bold text-gray-900">Additional Savings:</span>
                <span class="font-bold text-2xl text-gray-900" id="additional-savings">$0</span>
            </div>
        </div>
        
        <div class="mt-6 p-4 bg-blue-50 rounded-lg">
            <p class="text-sm text-gray-700">
                <strong>Note:</strong> This is an estimate based on average savings. Actual results may vary. Schedule a consultation for a personalized tax review.
            </p>
        </div>
        
        <div class="mt-6">
            <a href="<?php echo esc_url(cnb_get_cta_link('schedule-consultation')); ?>" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition text-center block">
                Schedule My Consultation
            </a>
        </div>
    </div>
    
    <div id="calculator-placeholder" class="text-center py-12">
        <div class="text-6xl mb-4">📊</div>
        <p class="text-gray-500">Enter your information to see potential tax savings</p>
    </div>
</div>