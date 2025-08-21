<?php
/**
 * Registered Agent Pricing Section
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Pricing Section -->
<section id="pricing" class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Professional registered agent service at an affordable annual rate</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Basic Service -->
            <div class="bg-gray-50 rounded-lg p-8 text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Basic Service</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-cnb-primary">$99</span>
                    <span class="text-gray-500 text-lg">/year</span>
                </div>
                <p class="text-gray-600 mb-6">Essential registered agent service for one state</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Professional registered agent address</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Legal document receipt & forwarding</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Email notifications</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Online account access</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Compliance calendar</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('choose-basic')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Choose Basic
                </a>
            </div>

            <!-- Premium Service (Most Popular) -->
            <div class="bg-white rounded-lg p-8 text-center shadow-lg border-2 border-cnb-secondary transform scale-105">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <div class="bg-cnb-secondary text-gray-900 px-6 py-2 rounded-full text-sm font-bold">
                        ⭐ MOST POPULAR
                    </div>
                </div>
                
                <h3 class="text-xl font-bold text-gray-900 mb-4">Premium Service</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-cnb-primary">$149</span>
                    <span class="text-gray-500 text-lg">/year</span>
                </div>
                <p class="text-gray-600 mb-6">Complete service with mail scanning and priority support</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Everything in Basic Service</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Mail scanning & digital delivery</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Priority mail forwarding</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Phone & email support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Compliance monitoring alerts</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('choose-premium')); ?>" target="_blank" rel="noopener" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition">
                    Choose Premium
                </a>
            </div>

            <!-- Enterprise Service -->
            <div class="bg-gray-50 rounded-lg p-8 text-center">
                <h3 class="text-xl font-bold text-gray-900 mb-4">Enterprise Service</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold text-cnb-primary">$249</span>
                    <span class="text-gray-500 text-lg">/year</span>
                </div>
                <p class="text-gray-600 mb-6">Multi-state service with dedicated support</p>
                
                <ul class="text-left space-y-3 mb-8">
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Everything in Premium Service</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Service in up to 3 states</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Dedicated account manager</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Priority customer support</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-green-500 mt-0.5">✅</span>
                        <span class="text-gray-700">Custom compliance reporting</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(cnb_get_cta_link('choose-enterprise')); ?>" target="_blank" rel="noopener" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-semibold hover:bg-cnb-primary hover:text-white transition">
                    Choose Enterprise
                </a>
            </div>
        </div>

        <div class="text-center">
            <div class="inline-flex items-center space-x-3 bg-green-50 border border-green-200 rounded-lg p-6">
                <span class="text-3xl">💰</span>
                <div class="text-left">
                    <div class="font-bold text-gray-900">No Setup Fees • No Hidden Costs</div>
                    <div class="text-gray-600">One simple annual fee covers everything. Cancel anytime.</div>
                </div>
            </div>
        </div>
    </div>
</section>