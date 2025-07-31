<?php
/**
 * Service Pricing Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

// Get pricing data
$basic_name = get_post_meta(get_the_ID(), '_cnb_basic_name', true) ?: 'Basic Package';
$basic_price = get_post_meta(get_the_ID(), '_cnb_basic_price', true);
$basic_features = get_post_meta(get_the_ID(), '_cnb_basic_features', true);

$standard_name = get_post_meta(get_the_ID(), '_cnb_standard_name', true) ?: 'Standard Package';
$standard_price = get_post_meta(get_the_ID(), '_cnb_standard_price', true);
$standard_features = get_post_meta(get_the_ID(), '_cnb_standard_features', true);
$standard_popular = get_post_meta(get_the_ID(), '_cnb_standard_popular', true);

$premium_name = get_post_meta(get_the_ID(), '_cnb_premium_name', true) ?: 'Premium Package';
$premium_price = get_post_meta(get_the_ID(), '_cnb_premium_price', true);
$premium_features = get_post_meta(get_the_ID(), '_cnb_premium_features', true);

// Check if we have any pricing data
$has_pricing = $basic_price || $standard_price || $premium_price;

if ($has_pricing) :
?>

<section id="pricing" class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Choose Your Package</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Select the perfect package for your <?php echo strtolower(get_the_title()); ?> needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Basic Package -->
            <?php if ($basic_price) : ?>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow border border-gray-200">
                    <div class="bg-gray-50 p-6 rounded-t-lg text-center">
                        <div class="inline-block bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium mb-4">Starter</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4"><?php echo esc_html($basic_name); ?></h3>
                        <div class="mb-4">
                            <span class="text-lg text-gray-600">$</span>
                            <span class="text-4xl font-bold text-cnb-primary"><?php echo esc_html(str_replace('$', '', $basic_price)); ?></span>
                            <span class="text-sm text-gray-500 ml-1">one-time</span>
                        </div>
                        <p class="text-gray-600 text-sm">Perfect for getting started with your business formation</p>
                    </div>
                    
                    <div class="p-6 flex-grow">
                        <?php if ($basic_features) : 
                            $features = explode("\n", $basic_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="flex items-start space-x-3 mb-3">
                                <span class="text-green-500 mt-0.5">✅</span>
                                <span class="text-gray-700"><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="p-6 border-t border-gray-100">
                        <a href="#contact" class="block w-full bg-white border-2 border-cnb-primary text-cnb-primary py-3 px-6 rounded-lg font-medium hover:bg-cnb-primary hover:text-white transition text-center mb-4">
                            <span>Choose Basic</span>
                            <span class="ml-2">→</span>
                        </a>
                        <div class="flex items-center justify-center text-sm text-gray-500">
                            <span class="mr-2">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Standard Package -->
            <?php if ($standard_price) : ?>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow border-2 border-cnb-secondary relative <?php echo $standard_popular ? 'transform scale-105' : ''; ?>">
                    <?php if ($standard_popular) : ?>
                        <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                            <div class="bg-cnb-secondary text-gray-900 px-4 py-2 rounded-full text-sm font-bold flex items-center">
                                <span class="mr-1">⭐</span>
                                <span>Most Popular</span>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <div class="bg-cnb-secondary p-6 rounded-t-lg text-center">
                        <div class="inline-block bg-gray-900 text-cnb-secondary px-3 py-1 rounded-full text-sm font-medium mb-4">Recommended</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4"><?php echo esc_html($standard_name); ?></h3>
                        <div class="mb-4">
                            <span class="text-lg text-gray-600">$</span>
                            <span class="text-4xl font-bold text-gray-900"><?php echo esc_html(str_replace('$', '', $standard_price)); ?></span>
                            <span class="text-sm text-gray-500 ml-1">one-time</span>
                        </div>
                        <p class="text-gray-700 text-sm">Most comprehensive package with priority support</p>
                    </div>
                    
                    <div class="p-6 flex-grow">
                        <?php if ($standard_features) : 
                            $features = explode("\n", $standard_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="flex items-start space-x-3 mb-3">
                                <span class="text-green-500 mt-0.5">✅</span>
                                <span class="text-gray-700"><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="p-6 border-t border-gray-100">
                        <a href="#contact" class="block w-full bg-cnb-primary text-white py-3 px-6 rounded-lg font-medium hover:bg-blue-700 transition text-center mb-4">
                            <span>Choose Standard</span>
                            <span class="ml-2">→</span>
                        </a>
                        <div class="flex items-center justify-center text-sm text-gray-500">
                            <span class="mr-2">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Premium Package -->
            <?php if ($premium_price) : ?>
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow border border-gray-200">
                    <div class="bg-gradient-to-r from-purple-500 to-indigo-600 p-6 rounded-t-lg text-center text-white">
                        <div class="inline-block bg-white text-purple-600 px-3 py-1 rounded-full text-sm font-medium mb-4">Premium</div>
                        <h3 class="text-xl font-bold mb-4"><?php echo esc_html($premium_name); ?></h3>
                        <div class="mb-4">
                            <span class="text-lg text-gray-600">$</span>
                            <span class="text-4xl font-bold"><?php echo esc_html(str_replace('$', '', $premium_price)); ?></span>
                            <span class="text-sm text-gray-500 ml-1">one-time</span>
                        </div>
                        <p class="text-purple-100 text-sm">Complete white-glove service with dedicated support</p>
                    </div>
                    
                    <div class="p-6 flex-grow">
                        <?php if ($premium_features) : 
                            $features = explode("\n", $premium_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="flex items-start space-x-3 mb-3">
                                <span class="text-green-500 mt-0.5">✅</span>
                                <span class="text-gray-700"><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="p-6 border-t border-gray-100">
                        <a href="#contact" class="block w-full bg-white border-2 border-purple-500 text-purple-500 py-3 px-6 rounded-lg font-medium hover:bg-purple-500 hover:text-white transition text-center mb-4">
                            <span>Choose Premium</span>
                            <span class="ml-2">→</span>
                        </a>
                        <div class="flex items-center justify-center text-sm text-gray-500">
                            <span class="mr-2">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="flex justify-center">
            <div class="bg-white rounded-lg shadow-lg p-6 flex items-center max-w-md">
                <span class="text-3xl mr-4">🛡️</span>
                <div class="text-left">
                    <div class="font-bold text-gray-900 mb-1">Money-Back Guarantee</div>
                    <p class="text-gray-600 text-sm">100% satisfaction guaranteed or your money back</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>