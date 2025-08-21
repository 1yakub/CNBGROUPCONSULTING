<?php
/**
 * ITIN Service FAQ Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- FAQ Section -->
<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ITIN FAQ</h2>
            <p class="text-xl text-gray-600">Common questions about ITIN applications</p>
        </div>

        <div class="space-y-4">
            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-1')">
                    <h3 class="font-semibold text-gray-900">How long does it take to get an ITIN?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-1">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="itin-faq-1">
                    <p class="text-gray-600">The IRS typically processes ITIN applications within 7-11 weeks from the date they receive your complete application. Using our Certified Acceptance Agent service can help ensure faster processing.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-2')">
                    <h3 class="font-semibold text-gray-900">Do I need to file a tax return to get an ITIN?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-2">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="itin-faq-2">
                    <p class="text-gray-600">Yes, you must attach a valid tax return to your ITIN application unless you qualify for one of the five exceptions. Most applicants need to file Form 1040 along with Form W-7.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-3')">
                    <h3 class="font-semibold text-gray-900">Can I mail my original documents to the IRS?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-3">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="itin-faq-3">
                    <p class="text-gray-600">While possible, it's risky as documents can be lost. As IRS Certified Acceptance Agents, we can authenticate your documents in person, eliminating the need to mail originals and reducing processing time.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-4')">
                    <h3 class="font-semibold text-gray-900">Does an ITIN expire?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-4">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="itin-faq-4">
                    <p class="text-gray-600">Yes, ITINs expire if not used on a tax return for three consecutive years. ITINs issued before 2013 have also expired and need renewal. We can help with ITIN renewals too.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-lg">
                <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('itin-faq-5')">
                    <h3 class="font-semibold text-gray-900">Can I use an ITIN to work in the US?</h3>
                    <span class="text-cnb-primary text-xl font-bold" id="toggle-itin-faq-5">+</span>
                </button>
                <div class="hidden px-6 pb-6" id="itin-faq-5">
                    <p class="text-gray-600">No, ITINs are for tax purposes only and do not authorize work in the US. You need proper work authorization from USCIS to legally work in the United States.</p>
                </div>
            </div>
        </div>
    </div>
</section>