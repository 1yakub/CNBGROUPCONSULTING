<?php
/**
 * Service Benefits Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$benefits = get_post_meta(get_the_ID(), '_cnb_benefits', true);

if (!empty($benefits) && is_array($benefits)) :
?>

<section class="py-16 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Our <?php the_title(); ?>?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Key benefits that make our service the best choice for your business</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($benefits as $index => $benefit) : 
                if (empty($benefit['title'])) continue;
                $icons = ['🎯', '💼', '🚀', '🔒', '📊', '⚡']; // Icon pool
                $icon = $icons[$index] ?? '✅';
            ?>
                <div class="bg-white rounded-lg p-8 text-center shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                    <div class="text-5xl mb-6">
                        <span><?php echo esc_html($icon); ?></span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold text-cnb-primary mb-4"><?php echo esc_html($benefit['title']); ?></h3>
                        <?php if (!empty($benefit['description'])) : ?>
                            <p class="text-gray-600 leading-relaxed"><?php echo esc_html($benefit['description']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>