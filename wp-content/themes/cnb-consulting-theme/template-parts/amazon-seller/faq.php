<?php
/**
 * Amazon Seller Service - FAQ Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Amazon Seller FAQ</h2>
            <p class="text-xl text-gray-600">Common questions about starting and scaling your Amazon business</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-1')">
                    <h3 class="font-semibold text-gray-900">Do I need an LLC to sell on Amazon?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="amazon-faq-1">
                    <p class="text-gray-600">While not required, an LLC provides liability protection, tax benefits, and professional credibility. Most successful Amazon sellers operate as LLCs to protect personal assets and optimize taxes.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-2')">
                    <h3 class="font-semibold text-gray-900">How much can I save on taxes as an Amazon seller?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="amazon-faq-2">
                    <p class="text-gray-600">Amazon sellers can typically save 20-30% on taxes through proper business structure, expense tracking, inventory deductions, and strategic planning. Our clients average $8,000-$15,000 in annual tax savings.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-3')">
                    <h3 class="font-semibold text-gray-900">What's included in Amazon Brand Registry setup?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="amazon-faq-3">
                    <p class="text-gray-600">We handle trademark research and filing, brand registry application, enhanced brand content setup, and anti-counterfeiting protection. This typically increases sales by 15-25% and provides better control over your listings.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-4')">
                    <h3 class="font-semibold text-gray-900">How long does it take to set up everything?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-4">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="amazon-faq-4">
                    <p class="text-gray-600">Basic setup (LLC, EIN, Amazon account) takes 7-10 business days. Complete setup with brand protection and advanced optimization takes 2-4 weeks. We handle everything while you focus on product sourcing.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('amazon-faq-5')">
                    <h3 class="font-semibold text-gray-900">Do you help with ongoing Amazon management?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-amazon-faq-5">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="amazon-faq-5">
                    <p class="text-gray-600">Yes! We offer ongoing bookkeeping, tax planning, account health monitoring, and business consulting. Our goal is to be your long-term partner for Amazon success, not just a one-time setup service.</p>
                </div>
            </div>
        </div>
    </div>
</section>