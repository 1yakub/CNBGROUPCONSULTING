<?php
/**
 * FAQ Business Formation Questions Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Business Formation -->
<div id="formation" class="faq-category hidden">
    <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">Business Formation</h2>
    
    <div class="space-y-4">
        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-1')">
                <h3 class="font-semibold text-gray-900">Should I choose an LLC or Corporation?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-1">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="formation-1">
                <p class="text-gray-600 leading-relaxed">The choice depends on your business goals. LLCs offer simplicity, flexibility, and pass-through taxation. Corporations provide more structure, easier investment opportunities, and potential tax advantages. Our free consultation can help you determine the best option for your specific situation.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-2')">
                <h3 class="font-semibold text-gray-900">How long does business formation take?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-2">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="formation-2">
                <p class="text-gray-600 leading-relaxed">Most business formations are completed within 24-48 hours. Some states offer same-day processing for an additional fee. The exact timeframe depends on the state where you're forming your business and their current processing times.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-3')">
                <h3 class="font-semibold text-gray-900">What information do I need to provide?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-3">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="formation-3">
                <p class="text-gray-600 leading-relaxed">You'll need your desired business name, business address, information about owners/members, and your registered agent details. We'll guide you through gathering all necessary information during our consultation process.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-4')">
                <h3 class="font-semibold text-gray-900">Can I change my business structure later?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-4">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="formation-4">
                <p class="text-gray-600 leading-relaxed">Yes, business structures can be changed, but it involves additional paperwork, potential tax implications, and costs. It's best to choose the right structure from the beginning, which is why we offer free consultations to help you make the best initial choice.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-5')">
                <h3 class="font-semibold text-gray-900">Do I need a registered agent?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-5">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="formation-5">
                <p class="text-gray-600 leading-relaxed">Yes, all businesses are required to have a registered agent in the state where they're formed. The registered agent receives legal documents and official correspondence. We offer registered agent services for $99/year to protect your privacy and ensure compliance.</p>
            </div>
        </div>
    </div>
</div>