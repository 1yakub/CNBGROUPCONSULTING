<?php
/**
 * Service Benefits Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$benefits = get_post_meta(get_the_ID(), '_cnb_benefits', true);

if (!empty($benefits) && is_array($benefits)) :
?>

<section class="service-benefits">
    <div class="container">
        <div class="section-header">
            <h2>Why Choose Our <?php the_title(); ?>?</h2>
            <p>Key benefits that make our service the best choice for your business</p>
        </div>
        
        <div class="benefits-grid">
            <?php foreach ($benefits as $index => $benefit) : 
                if (empty($benefit['title'])) continue;
                $icons = ['🎯', '💼', '🚀', '🔒', '📊', '⚡']; // Icon pool
                $icon = $icons[$index] ?? '✅';
            ?>
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <span><?php echo esc_html($icon); ?></span>
                    </div>
                    <div class="benefit-content">
                        <h3><?php echo esc_html($benefit['title']); ?></h3>
                        <?php if (!empty($benefit['description'])) : ?>
                            <p><?php echo esc_html($benefit['description']); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>