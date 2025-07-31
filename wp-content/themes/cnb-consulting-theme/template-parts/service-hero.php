<?php
/**
 * Service Hero Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$hero_subtitle = get_post_meta(get_the_ID(), '_cnb_hero_subtitle', true);
$value_proposition = get_post_meta(get_the_ID(), '_cnb_value_proposition', true);
$processing_time = get_post_meta(get_the_ID(), '_cnb_processing_time', true);
$success_rate = get_post_meta(get_the_ID(), '_cnb_success_rate', true);
$guarantee_period = get_post_meta(get_the_ID(), '_cnb_guarantee_period', true);
$primary_cta_text = get_post_meta(get_the_ID(), '_cnb_primary_cta_text', true) ?: 'Get Started Now';
$primary_cta_link = get_post_meta(get_the_ID(), '_cnb_primary_cta_link', true) ?: '#pricing';

// Get service category for breadcrumbs
$categories = wp_get_post_terms(get_the_ID(), 'service_category');
$category_name = !empty($categories) ? $categories[0]->name : '';
?>

<section class="relative bg-gradient-to-br from-cnb-primary to-blue-900 text-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="">
            <div class="flex items-center space-x-2 text-blue-200 text-sm mb-8">
                <a href="<?php echo home_url(); ?>" class="hover:text-white transition">Home</a>
                <span class="text-blue-300">→</span>
                <a href="<?php echo get_post_type_archive_link('cnb_service'); ?>" class="hover:text-white transition">Services</a>
                <?php if ($category_name) : ?>
                    <span class="text-blue-300">→</span>
                    <span><?php echo esc_html($category_name); ?></span>
                <?php endif; ?>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
                <div class="lg:col-span-2 space-y-6">
                    <div class="">
                        <?php if ($category_name) : ?>
                            <span class="inline-block bg-cnb-secondary text-gray-900 px-3 py-1 rounded-full text-sm font-medium"><?php echo esc_html($category_name); ?></span>
                        <?php endif; ?>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight"><?php the_title(); ?></h1>
                    
                    <?php if ($hero_subtitle) : ?>
                        <p class="text-xl md:text-2xl text-blue-100 leading-relaxed"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                    
                    <?php if ($value_proposition) : ?>
                        <div class="bg-white bg-opacity-10 rounded-lg p-6 border-l-4 border-cnb-secondary">
                            <div class="text-2xl mb-2">💡</div>
                            <p class="text-blue-100 font-medium"><?php echo esc_html($value_proposition); ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <?php if ($processing_time) : ?>
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl">⚡</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-blue-200 text-sm">Processing Time</span>
                                    <span class="text-white font-semibold"><?php echo esc_html($processing_time); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($success_rate) : ?>
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl">✅</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-blue-200 text-sm">Success Rate</span>
                                    <span class="text-white font-semibold"><?php echo esc_html($success_rate); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($guarantee_period) : ?>
                            <div class="bg-white bg-opacity-10 rounded-lg p-4 flex items-center space-x-3">
                                <div class="flex-shrink-0">
                                    <span class="text-2xl">🛡️</span>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-blue-200 text-sm">Guarantee</span>
                                    <span class="text-white font-semibold"><?php echo esc_html($guarantee_period); ?></span>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="flex flex-col items-start space-y-4">
                        <a href="<?php echo esc_url($primary_cta_link); ?>" class="bg-cnb-secondary text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:bg-yellow-400 transition transform hover:scale-105 flex items-center space-x-2">
                            <span><?php echo esc_html($primary_cta_text); ?></span>
                            <span>→</span>
                        </a>
                        <div class="flex items-center space-x-2 text-blue-200 text-sm">
                            <span>🔒</span>
                            <span>Secure & confidential process</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg p-6 text-gray-900 shadow-lg">
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-gray-900">Why Choose Us</h3>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="text-center">
                            <div class="mb-2">
                                <span class="text-2xl">⭐</span>
                            </div>
                            <div class="">
                                <span class="block text-lg font-bold text-cnb-primary">4.9/5</span>
                                <span class="text-sm text-gray-600">Customer Rating</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2">
                                <span class="text-2xl">👥</span>
                            </div>
                            <div class="">
                                <span class="block text-lg font-bold text-cnb-primary">500+</span>
                                <span class="text-sm text-gray-600">Clients Served</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2">
                                <span class="text-2xl">🏆</span>
                            </div>
                            <div class="">
                                <span class="block text-lg font-bold text-cnb-primary">Expert</span>
                                <span class="text-sm text-gray-600">Legal Service</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="mb-2">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <div class="">
                                <span class="block text-lg font-bold text-cnb-primary">Fast</span>
                                <span class="text-sm text-gray-600">Processing</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <div class="flex items-center justify-center space-x-2 text-sm text-gray-600">
                            <span class="text-lg">🛡️</span>
                            <span class="font-medium">Money-Back Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>