<?php
/**
 * FAQ Section for Company Formation Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Everything you need to know about business formation</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-1')">
                    <h3 class="font-semibold text-gray-900">How long does it take to form my business?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="formation-faq-1">
                    <p class="text-gray-600">Most business formations are completed within 24-48 hours. We offer expedited same-day processing for urgent needs. The exact timeframe depends on the state where you're forming your business.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-2')">
                    <h3 class="font-semibold text-gray-900">What's the difference between LLC and Corporation?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="formation-faq-2">
                    <p class="text-gray-600">LLCs offer simplicity, flexibility, and pass-through taxation, making them ideal for most small businesses. Corporations provide more structure and are better for businesses seeking investment or with multiple shareholders. We'll help you choose the right structure during your consultation.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-3')">
                    <h3 class="font-semibold text-gray-900">Do I need a registered agent?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="formation-faq-3">
                    <p class="text-gray-600">Yes, all businesses are required to have a registered agent in their state of formation. We include registered agent service for the first year FREE with all packages, providing privacy protection and ensuring you receive all legal documents.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-4')">
                    <h3 class="font-semibold text-gray-900">What state should I form my business in?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-4">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="formation-faq-4">
                    <p class="text-gray-600">Most businesses should form in the state where they operate. Delaware, Nevada, and Wyoming offer business-friendly laws for certain situations. Our experts will help you choose the best state based on your specific business needs and goals.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('formation-faq-5')">
                    <h3 class="font-semibold text-gray-900">What ongoing requirements will my business have?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-formation-faq-5">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="formation-faq-5">
                    <p class="text-gray-600">Most businesses need to file annual reports, maintain good standing, and comply with tax obligations. We provide a compliance calendar and ongoing support to ensure you meet all requirements and deadlines.</p>
                </div>
            </div>
        </div>
    </div>
</section>