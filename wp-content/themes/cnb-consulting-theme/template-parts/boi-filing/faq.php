<?php
/**
 * BOI Filing - FAQ Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">BOI Filing FAQ</h2>
            <p class="text-xl text-gray-600">Common questions about Beneficial Ownership Information filing</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-1')">
                    <h3 class="font-semibold text-gray-900">What happens if I don't file BOI?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="boi-faq-1">
                    <p class="text-gray-600">Failure to file BOI can result in civil penalties up to $500 per day (capped at $10,000) and criminal penalties including fines up to $10,000 and up to 2 years in prison. The government is serious about enforcement.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-2')">
                    <h3 class="font-semibold text-gray-900">When is my BOI filing due?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="boi-faq-2">
                    <p class="text-gray-600">Existing businesses (formed before 2024) must file by January 1, 2025. New businesses formed in 2024 or later have 90 days from formation. Any updates must be filed within 30 days of changes.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-3')">
                    <h3 class="font-semibold text-gray-900">Who is considered a beneficial owner?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="boi-faq-3">
                    <p class="text-gray-600">A beneficial owner is anyone who owns 25% or more of the business OR exercises substantial control (like CEO, CFO, or someone with authority over major decisions). Most small businesses have 1-3 beneficial owners.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-4')">
                    <h3 class="font-semibold text-gray-900">Is my information kept confidential?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-4">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="boi-faq-4">
                    <p class="text-gray-600">Yes, BOI information is confidential and protected by federal law. Only authorized government agencies and financial institutions can access this data under strict conditions. It's not public information.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('boi-faq-5')">
                    <h3 class="font-semibold text-gray-900">Do I need to update my BOI filing?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-boi-faq-5">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="boi-faq-5">
                    <p class="text-gray-600">Yes, you must file updates within 30 days of any changes to beneficial ownership, company information, or beneficial owner details. We provide ongoing support to help you stay compliant.</p>
                </div>
            </div>
        </div>
    </div>
</section>