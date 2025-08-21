<?php
/**
 * FAQ Section for EIN Service Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Everything you need to know about getting an EIN</p>
        </div>

        <div class="space-y-4">
            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-1')">
                    <h3 class="font-semibold text-gray-900">How long does it take to get my EIN?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="ein-faq-1">
                    <p class="text-gray-600">With our professional service, most EINs are processed within 4-6 hours on the same business day. The IRS DIY website can take 2-4 weeks for processing.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-2')">
                    <h3 class="font-semibold text-gray-900">Do I need an EIN if I'm a sole proprietor?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="ein-faq-2">
                    <p class="text-gray-600">While not always required, getting an EIN as a sole proprietor provides privacy protection for your SSN and is necessary for opening business bank accounts or establishing business credit.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-3')">
                    <h3 class="font-semibold text-gray-900">Can I get an EIN for free from the IRS?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="ein-faq-3">
                    <p class="text-gray-600">Yes, the IRS doesn't charge for EIN applications. However, their process is complex and slow. Our $99 fee covers professional preparation, expedited processing, error checking, and support.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-4')">
                    <h3 class="font-semibold text-gray-900">What if my EIN application is rejected?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-4">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="ein-faq-4">
                    <p class="text-gray-600">With our professional service and error checking, rejections are extremely rare. If it happens, we'll fix any issues and resubmit at no additional charge under our 100% guarantee.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('ein-faq-5')">
                    <h3 class="font-semibold text-gray-900">Do I need business formation before getting an EIN?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-ein-faq-5">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="ein-faq-5">
                    <p class="text-gray-600">For LLCs and Corporations, yes - you need to file with your state first. For sole proprietorships, you can get an EIN without formal business registration. We can help with business formation too!</p>
                </div>
            </div>
        </div>
    </div>
</section>