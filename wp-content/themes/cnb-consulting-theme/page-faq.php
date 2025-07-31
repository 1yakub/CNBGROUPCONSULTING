<?php
/**
 * Template for FAQ Page
 * 
 * @package CNB_Consulting_Theme
 */

get_header(); ?>

<main id="primary" class="site-main">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6">Frequently Asked Questions</h1>
                <p class="text-xl md:text-2xl text-blue-100 max-w-4xl mx-auto leading-relaxed">
                    Find answers to common questions about business formation, compliance, and our services.
                </p>
            </div>
        </div>
    </section>

    <!-- FAQ Categories Navigation -->
    <section class="py-8 bg-gray-50 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap justify-center gap-4">
                <button onclick="showCategory('general')" class="faq-nav-btn bg-cnb-primary text-white px-6 py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                    General
                </button>
                <button onclick="showCategory('formation')" class="faq-nav-btn bg-white text-cnb-primary border-2 border-cnb-primary px-6 py-2 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Business Formation
                </button>
                <button onclick="showCategory('compliance')" class="faq-nav-btn bg-white text-cnb-primary border-2 border-cnb-primary px-6 py-2 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Compliance
                </button>
                <button onclick="showCategory('legal')" class="faq-nav-btn bg-white text-cnb-primary border-2 border-cnb-primary px-6 py-2 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Legal Documents
                </button>
                <button onclick="showCategory('pricing')" class="faq-nav-btn bg-white text-cnb-primary border-2 border-cnb-primary px-6 py-2 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Pricing
                </button>
            </div>
        </div>
    </section>

    <!-- FAQ Content -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- General Questions -->
            <div id="general" class="faq-category">
                <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">General Questions</h2>
                
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('general-1')">
                            <h3 class="font-semibold text-gray-900">What services does CNB Group Consulting offer?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-general-1">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="general-1">
                            <p class="text-gray-600 leading-relaxed">We offer comprehensive business services including business formation (LLC, Corporation, Nonprofit), legal document preparation, registered agent services, compliance management, trademark registration, business licenses, and ongoing business consulting.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('general-2')">
                            <h3 class="font-semibold text-gray-900">How long has CNB Group Consulting been in business?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-general-2">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="general-2">
                            <p class="text-gray-600 leading-relaxed">CNB Group Consulting was founded in 2018 and has been helping entrepreneurs and businesses with formation and compliance services for over 5 years. We have successfully served 500+ clients across all 50 states.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('general-3')">
                            <h3 class="font-semibold text-gray-900">Do you offer free consultations?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-general-3">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="general-3">
                            <p class="text-gray-600 leading-relaxed">Yes! We offer free consultations to discuss your business needs and recommend the best services for your situation. You can schedule a consultation through our contact form, phone, or WhatsApp.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('general-4')">
                            <h3 class="font-semibold text-gray-900">What states do you serve?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-general-4">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="general-4">
                            <p class="text-gray-600 leading-relaxed">We provide business formation and related services in all 50 US states. Our team has expertise in the specific requirements and regulations for each state to ensure proper compliance.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('general-5')">
                            <h3 class="font-semibold text-gray-900">Do you guarantee your work?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-general-5">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="general-5">
                            <p class="text-gray-600 leading-relaxed">Yes, we offer a 100% money-back guarantee on all our services. We stand behind our work and are committed to your complete satisfaction. If you're not satisfied with our service, we'll make it right or refund your money.</p>
                        </div>
                    </div>
                </div>
            </div>

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

            <!-- Legal Documents -->
            <div id="legal" class="faq-category hidden">
                <h2 class="text-2xl md:text-3xl font-bold text-cnb-primary mb-8 text-center">Legal Documents</h2>
                
                <div class="space-y-4">
                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('legal-1')">
                            <h3 class="font-semibold text-gray-900">Do I need an Operating Agreement for my LLC?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-legal-1">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="legal-1">
                            <p class="text-gray-600 leading-relaxed">While not always legally required, an Operating Agreement is highly recommended for all LLCs. It defines ownership percentages, management structure, profit distribution, and member rights. It provides legal protection and clarity for business operations. We prepare custom Operating Agreements for $199.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('legal-2')">
                            <h3 class="font-semibold text-gray-900">What's included in your legal document services?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-legal-2">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="legal-2">
                            <p class="text-gray-600 leading-relaxed">Our legal document services include Operating Agreements, Buy-Sell Agreements, Employment Agreements, Non-Disclosure Agreements, Contract Reviews, and various business forms. All documents are customized to your specific business needs and comply with applicable state laws.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('legal-3')">
                            <h3 class="font-semibold text-gray-900">Can you review existing contracts?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-legal-3">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="legal-3">
                            <p class="text-gray-600 leading-relaxed">Yes, we offer contract review services for $99. Our legal experts will review your existing contracts, identify potential issues, and provide recommendations for improvements or modifications to better protect your interests.</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-lg">
                        <button class="w-full p-6 text-left flex items-center justify-between" onclick="toggleFAQ('legal-4')">
                            <h3 class="font-semibold text-gray-900">How long does document preparation take?</h3>
                            <span class="text-cnb-primary text-xl font-bold" id="toggle-legal-4">+</span>
                        </button>
                        <div class="hidden px-6 pb-6" id="legal-4">
                            <p class="text-gray-600 leading-relaxed">Most legal documents are prepared within 3-5 business days after we receive all necessary information. Complex documents or those requiring extensive customization may take longer. We'll provide a timeline estimate during your consultation.</p>
                        </div>
                    </div>
                </div>
            </div>

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
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Still Have Questions?</h2>
            <p class="text-xl text-gray-600 mb-8">
                Our business experts are here to help with personalized answers and recommendations.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/contact'); ?>" class="bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                    Contact Us Today
                </a>
                <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                    Call Now: (555) CNB-GROUP
                </a>
            </div>
        </div>
    </section>
</main>

<script>
function showCategory(category) {
    // Hide all categories
    const categories = document.querySelectorAll('.faq-category');
    categories.forEach(cat => cat.classList.add('hidden'));
    
    // Show selected category
    document.getElementById(category).classList.remove('hidden');
    
    // Update navigation buttons
    const navBtns = document.querySelectorAll('.faq-nav-btn');
    navBtns.forEach(btn => {
        btn.classList.remove('bg-cnb-primary', 'text-white');
        btn.classList.add('bg-white', 'text-cnb-primary', 'border-2', 'border-cnb-primary');
    });
    
    // Highlight active button
    event.target.classList.remove('bg-white', 'text-cnb-primary', 'border-2', 'border-cnb-primary');
    event.target.classList.add('bg-cnb-primary', 'text-white');
}

function toggleFAQ(targetId) {
    const answer = document.getElementById(targetId);
    const toggle = document.getElementById('toggle-' + targetId);
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        toggle.textContent = '−';
    } else {
        answer.classList.add('hidden');
        toggle.textContent = '+';
    }
}

// Initialize with general category selected
document.addEventListener('DOMContentLoaded', function() {
    showCategory('general');
});
</script>

<?php get_footer(); ?>