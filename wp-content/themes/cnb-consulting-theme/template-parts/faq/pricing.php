<?php
/**
 * FAQ Pricing & Payments Questions Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing -->
<div id="pricing" class="faq-category hidden">
    <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">Pricing & Payments</h2>
    
    <div class="space-y-4">
        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('pricing-1')">
                <h3 class="font-semibold text-gray-900">What payment methods do you accept?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-pricing-1">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="pricing-1">
                <p class="text-gray-600 leading-relaxed">We accept all major credit cards (Visa, MasterCard, American Express, Discover), bank transfers, and ACH payments. Payment is typically required before we begin work, and we use secure payment processing to protect your financial information.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('pricing-2')">
                <h3 class="font-semibold text-gray-900">Are state filing fees included in your prices?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-pricing-2">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="pricing-2">
                <p class="text-gray-600 leading-relaxed">Our service fees are separate from state filing fees. State fees vary by state and business type ($50-$500+ typically). We'll provide a complete breakdown of all costs upfront, including our service fee and applicable state fees, so there are no surprises.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('pricing-3')">
                <h3 class="font-semibold text-gray-900">Do you offer package deals?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-pricing-3">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="pricing-3">
                <p class="text-gray-600 leading-relaxed">Yes, we offer bundled packages that combine multiple services at discounted rates. For example, business formation + registered agent + EIN + Operating Agreement packages. Contact us for custom package pricing based on your specific needs.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('pricing-4')">
                <h3 class="font-semibold text-gray-900">Is there a setup fee for ongoing services?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-pricing-4">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="pricing-4">
                <p class="text-gray-600 leading-relaxed">No, we don't charge setup fees for ongoing services like registered agent service. Our annual registered agent fee of $99/year includes everything - no hidden fees, setup costs, or additional charges for basic services.</p>
            </div>
        </div>

        <div class="bg-gray-50 rounded-lg">
            <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('pricing-5')">
                <h3 class="font-semibold text-gray-900">What's included in your service fees?</h3>
                <span class="text-cnb-primary text-xl font-bold" id="toggle-pricing-5">+</span>
            </button>
            <div class="hidden px-6 pb-6" id="pricing-5">
                <p class="text-gray-600 leading-relaxed">Our service fees include professional consultation, document preparation, filing with appropriate agencies, status updates, and customer support. We also provide guides and resources to help you understand your new business structure and ongoing requirements.</p>
            </div>
        </div>
    </div>
</div>