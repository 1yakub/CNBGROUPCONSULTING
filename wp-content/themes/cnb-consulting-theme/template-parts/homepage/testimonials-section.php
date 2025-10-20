<?php
/**
 * Testimonials Section Template Part
 * 
 * Displays client testimonials in a 3-column layout
 * 
 * @package CNB_Consulting_Theme
 */

$testimonials = cnb_get_placeholder_testimonials();
?>

<!-- <section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php _e('What Our Clients Say', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php _e('Join hundreds of successful international entrepreneurs who trust CNB Group Consulting', 'cnb-consulting-theme'); ?>
            </p>
        </header>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($testimonials as $testimonial) : ?>
                <div class="bg-gray-50 rounded-lg p-6 h-full flex flex-col">
                    
                    <div class="flex mb-4">
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <span class="text-yellow-400 text-lg">⭐</span>
                        <?php endfor; ?>
                    </div>
                    
                    <blockquote class="text-gray-700 italic mb-6 flex-grow leading-relaxed">
                        "<?php echo esc_html($testimonial['content']); ?>"
                    </blockquote>
                    
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full mr-4 overflow-hidden bg-gray-300 flex items-center justify-center">
                            <img src="<?php echo esc_url($testimonial['avatar']); ?>" 
                                 alt="<?php echo esc_attr($testimonial['author']); ?>"
                                 class="w-full h-full object-cover"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="avatar-fallback text-gray-500 text-lg" style="display:none;">
                                👤
                            </div>
                        </div>
                        <div class="">
                            <h4 class="font-semibold text-gray-900"><?php echo esc_html($testimonial['author']); ?></h4>
                            <p class="text-sm text-gray-600"><?php echo esc_html($testimonial['company']); ?></p>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-600">
                <?php _e('Ready to join our success stories?', 'cnb-consulting-theme'); ?>
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="text-cnb-primary font-medium hover:text-blue-700 transition ml-2">
                    <?php _e('Start Your Journey Today →', 'cnb-consulting-theme'); ?>
                </a>
            </p>
        </div>
        
    </div>
</section> -->