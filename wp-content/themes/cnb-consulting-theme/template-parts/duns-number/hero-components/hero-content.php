<?php
/**
 * Hero Content - DUNS Number Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8">
    <div>
        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
            🏢 Business Credit Specialists
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            Get Your DUNS Number Fast
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
            Establish business credit and qualify for government contracts with your official DUNS Number. Professional application service with expedited processing.
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row gap-4">
        <a href="<?php echo esc_url(cnb_get_cta_link('pricing')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
            Get DUNS - $149
        </a>
        <a href="#benefits" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
            See Benefits
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">⚡</div>
            <div class="font-bold text-lg">48 Hour</div>
            <div class="text-blue-200 text-sm">Processing</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">💰</div>
            <div class="font-bold text-lg">Business</div>
            <div class="text-blue-200 text-sm">Credit Ready</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">🏛️</div>
            <div class="font-bold text-lg">Gov Contract</div>
            <div class="text-blue-200 text-sm">Eligible</div>
        </div>
    </div>
</div>