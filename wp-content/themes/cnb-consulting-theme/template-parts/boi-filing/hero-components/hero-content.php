<?php
/**
 * BOI Filing - Hero Content Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8">
    <div>
        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
            ⚠️ NEW 2024 Requirement
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            BOI Filing Service - Avoid $10,000 Penalties
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
            New federal requirement: All businesses must file Beneficial Ownership Information with FinCEN. Don't risk massive penalties - we handle your compliance.
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="<?php echo esc_url(cnb_get_cta_link('pricing')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
            File BOI Now - $99
        </a>
        <a href="#requirements" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
            Check Requirements
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">⚠️</div>
            <div class="font-bold text-lg">$10,000</div>
            <div class="text-blue-200 text-sm">Penalty Risk</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">📅</div>
            <div class="font-bold text-lg">Jan 1, 2024</div>
            <div class="text-blue-200 text-sm">Effective Date</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">🛡️</div>
            <div class="font-bold text-lg">Compliant</div>
            <div class="text-blue-200 text-sm">Filing Service</div>
        </div>
    </div>
</div>