<?php
/**
 * Registered Agent Hero Content Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div class="space-y-8 text-center">
    <div>
        <div class="inline-block bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold mb-4">
            📬 Required by Law in All 50 States
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
            Professional Registered Agent Service
        </h1>
        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-8">
            Protect your privacy and ensure compliance with our reliable registered agent service. Mail forwarding, compliance alerts, and professional representation.
        </p>
    </div>
    
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="<?php echo esc_url(cnb_get_cta_link('start-service')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105 text-center">
            Start Service - $99/Year
        </a>
        <a href="#features" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition text-center">
            See All Features
        </a>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">🏢</div>
            <div class="font-bold text-lg">1000+</div>
            <div class="text-blue-200 text-sm">Business Served</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">📍</div>
            <div class="font-bold text-lg">All 50</div>
            <div class="text-blue-200 text-sm">States Covered</div>
        </div>
        <div class="bg-white bg-opacity-10 rounded-lg p-4">
            <div class="text-2xl mb-2">⚡</div>
            <div class="font-bold text-lg">Same Day</div>
            <div class="text-blue-200 text-sm">Setup Available</div>
        </div>
    </div>
</div>