<?php
/**
 * Hero Content Component for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8 text-center">
    <div>
        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
            ⚡ Same Day EIN Processing
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            Get Your EIN Tax ID Number Today
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
            Fast, reliable EIN application service with IRS-certified professionals. Get your Federal Tax ID in hours, not weeks.
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="<?php echo esc_url(cnb_get_cta_link('get-ein-now')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
            Get EIN Now - $99
        </a>
        <a href="#process" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
            How It Works
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">⚡</div>
            <div class="font-bold text-lg">Same Day</div>
            <div class="text-blue-200 text-sm">Processing</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">🏆</div>
            <div class="font-bold text-lg">IRS Certified</div>
            <div class="text-blue-200 text-sm">Professionals</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">🛡️</div>
            <div class="font-bold text-lg">100%</div>
            <div class="text-blue-200 text-sm">Guarantee</div>
        </div>
    </div>
</div>