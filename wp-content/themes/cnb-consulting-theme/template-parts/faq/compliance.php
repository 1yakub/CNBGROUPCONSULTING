<?php
/**
 * FAQ Compliance & Ongoing Services Questions Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Compliance -->
<div id="compliance" class="faq-category hidden">
    <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">Compliance & Ongoing Services</h2>
    
    <div class="space-y-4">
        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('compliance-1')">
                <h3 class="font-semibold text-gray-900">What ongoing compliance is required?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-compliance-1">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="compliance-1">
                <p class="text-gray-600 leading-relaxed">Most businesses need to file annual reports, maintain good standing with the state, keep corporate records updated, and comply with tax obligations. Requirements vary by state and business type. We provide ongoing monitoring and filing services to keep you compliant.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('compliance-2')">
                <h3 class="font-semibold text-gray-900">When are annual reports due?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-compliance-2">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="compliance-2">
                <p class="text-gray-600 leading-relaxed">Annual report due dates vary by state. Some are due on specific dates (like April 1st), others are due on the anniversary of formation, and some states use the birth month of the registered agent. We track all deadlines and send reminders to our clients.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('compliance-3')">
                <h3 class="font-semibold text-gray-900">What happens if I miss compliance deadlines?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-compliance-3">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="compliance-3">
                <p class="text-gray-600 leading-relaxed">Missing compliance deadlines can result in late fees, penalties, loss of good standing, and potentially business dissolution. The consequences vary by state. If you've missed deadlines, we can help reinstate your business and get you back in compliance.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('compliance-4')">
                <h3 class="font-semibold text-gray-900">Do I need an EIN number?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-compliance-4">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="compliance-4">
                <p class="text-gray-600 leading-relaxed">Most businesses need an EIN (Employer Identification Number) for tax purposes, opening bank accounts, and hiring employees. Single-member LLCs without employees may use their SSN, but an EIN is often preferred for privacy and banking purposes. We offer EIN application services for $99.</p>
            </div>
        </div>
    </div>
</div>