<?php
/**
 * Hero Section Template Part
 * Clean, maintainable hero with Heroicons and pure Tailwind
 * 
 * @package CNB_Consulting_Theme
 */

$hero_content = cnb_get_hero_content();
$company_stats = cnb_get_company_info();
?>

<section class="relative bg-gradient-to-br from-cnb-primary via-blue-800 to-blue-900 text-white py-20 lg:py-32 overflow-hidden">
    
    <!-- Background Image -->
    <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1926&q=80')] bg-cover bg-center opacity-20"></div>
    
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-10 w-32 h-32 bg-cnb-secondary/10 rounded-full animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-24 h-24 bg-blue-400/10 rounded-full animate-bounce"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Hero Content -->
            <div class="space-y-8">
                
                <!-- Trust Badge -->
                <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-medium">
                    <!-- Heroicon: shield-check -->
                    <svg class="w-5 h-5 text-cnb-secondary" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Trusted by <?php echo esc_html($company_stats['clients_served']); ?> Entrepreneurs</span>
                </div>
                
                <!-- Main Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">
                    <?php echo esc_html($hero_content['headline']); ?>
                    <span class="text-cnb-secondary">Globally</span>
                </h1>
                
                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-blue-100 leading-relaxed">
                    <?php echo esc_html($hero_content['subtitle']); ?>
                </p>
                
                <!-- Key Benefits -->
                <div class="grid md:grid-cols-2 gap-4 text-blue-100">
                    <div class="flex items-center space-x-3">
                        <!-- Heroicon: check -->
                        <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>US, UK & UAE Formation</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Heroicon: check -->
                        <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Banking & Payments</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Heroicon: check -->
                        <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>E-Commerce Setup</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <!-- Heroicon: check -->
                        <svg class="w-5 h-5 text-cnb-secondary shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span>Tax & Compliance</span>
                    </div>
                </div>
                
                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#rate-form" class="bg-gradient-to-r from-cnb-secondary to-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold hover:scale-105 transition-transform shadow-xl">
                        Get My Custom Quote
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="border-2 border-white text-white px-8 py-4 rounded-lg text-lg font-semibold hover:bg-white hover:text-cnb-primary hover:scale-105 transition-all">
                        Free Consultation
                    </a>
                </div>
                
            </div>
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-1">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-center">
                        <!-- Heroicon: trophy -->
                        <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 1C4.477 1 0 5.477 0 11s4.477 10 10 10 10-4.477 10-10S15.523 1 10 1zM8 11a1 1 0 112 0v2a1 1 0 11-2 0v-2zM8 7a1 1 0 112 0v1a1 1 0 11-2 0V7z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['clients_served']); ?></div>
                        <div class="text-blue-200">Happy Clients</div>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-center">
                        <!-- Heroicon: check-circle -->
                        <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['success_rate']); ?></div>
                        <div class="text-blue-200">Success Rate</div>
                    </div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="text-center">
                        <!-- Heroicon: globe -->
                        <svg class="w-12 h-12 text-cnb-secondary mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd"></path>
                        </svg>
                        <div class="text-3xl font-bold text-cnb-secondary mb-1"><?php echo esc_html($company_stats['countries_served']); ?></div>
                        <div class="text-blue-200">Countries</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2">
        <div class="animate-bounce">
            <!-- Heroicon: chevron-down -->
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
    
</section>