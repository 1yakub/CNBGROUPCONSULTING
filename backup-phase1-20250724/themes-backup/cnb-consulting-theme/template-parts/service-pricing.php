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

<section id="pricing" class="service-pricing">
    <div class="container">
        <div class="section-header">
            <h2>Choose Your Package</h2>
            <p>Select the perfect package for your <?php echo strtolower(get_the_title()); ?> needs</p>
        </div>
        
        <div class="pricing-grid">
            <!-- Basic Package -->
            <?php if ($basic_price) : ?>
                <div class="pricing-card basic-plan">
                    <div class="pricing-header">
                        <div class="plan-badge">Starter</div>
                        <h3><?php echo esc_html($basic_name); ?></h3>
                        <div class="price">
                            <span class="price-currency">$</span>
                            <span class="price-amount"><?php echo esc_html(str_replace('$', '', $basic_price)); ?></span>
                            <span class="price-period">one-time</span>
                        </div>
                        <p class="plan-description">Perfect for getting started with your business formation</p>
                    </div>
                    
                    <div class="pricing-features">
                        <?php if ($basic_features) : 
                            $features = explode("\n", $basic_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="feature">
                                <span class="feature-icon">✅</span>
                                <span><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="pricing-cta">
                        <a href="#contact" class="btn btn-outline btn-full-width">
                            <span>Choose Basic</span>
                            <span class="btn-arrow">→</span>
                        </a>
                        <div class="plan-guarantee">
                            <span class="guarantee-icon">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Standard Package -->
            <?php if ($standard_price) : ?>
                <div class="pricing-card standard-plan <?php echo $standard_popular ? 'popular' : ''; ?>">
                    <?php if ($standard_popular) : ?>
                        <div class="popular-badge">
                            <span class="badge-icon">⭐</span>
                            <span>Most Popular</span>
                        </div>
                    <?php endif; ?>
                    
                    <div class="pricing-header">
                        <div class="plan-badge recommended">Recommended</div>
                        <h3><?php echo esc_html($standard_name); ?></h3>
                        <div class="price">
                            <span class="price-currency">$</span>
                            <span class="price-amount"><?php echo esc_html(str_replace('$', '', $standard_price)); ?></span>
                            <span class="price-period">one-time</span>
                        </div>
                        <p class="plan-description">Most comprehensive package with priority support</p>
                    </div>
                    
                    <div class="pricing-features">
                        <?php if ($standard_features) : 
                            $features = explode("\n", $standard_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="feature">
                                <span class="feature-icon">✅</span>
                                <span><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="pricing-cta">
                        <a href="#contact" class="btn btn-primary btn-full-width">
                            <span>Choose Standard</span>
                            <span class="btn-arrow">→</span>
                        </a>
                        <div class="plan-guarantee">
                            <span class="guarantee-icon">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Premium Package -->
            <?php if ($premium_price) : ?>
                <div class="pricing-card premium-plan">
                    <div class="pricing-header">
                        <div class="plan-badge premium">Premium</div>
                        <h3><?php echo esc_html($premium_name); ?></h3>
                        <div class="price">
                            <span class="price-currency">$</span>
                            <span class="price-amount"><?php echo esc_html(str_replace('$', '', $premium_price)); ?></span>
                            <span class="price-period">one-time</span>
                        </div>
                        <p class="plan-description">Complete white-glove service with dedicated support</p>
                    </div>
                    
                    <div class="pricing-features">
                        <?php if ($premium_features) : 
                            $features = explode("\n", $premium_features);
                            foreach ($features as $feature) : 
                                $feature = trim($feature);
                                if (!empty($feature)) :
                        ?>
                            <div class="feature">
                                <span class="feature-icon">✅</span>
                                <span><?php echo esc_html($feature); ?></span>
                            </div>
                        <?php 
                                endif;
                            endforeach; 
                        endif; ?>
                    </div>
                    
                    <div class="pricing-cta">
                        <a href="#contact" class="btn btn-outline btn-full-width">
                            <span>Choose Premium</span>
                            <span class="btn-arrow">→</span>
                        </a>
                        <div class="plan-guarantee">
                            <span class="guarantee-icon">🛡️</span>
                            <span>30-day money-back guarantee</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="pricing-guarantee">
            <div class="guarantee-badge">
                <span class="guarantee-icon">🛡️</span>
                <div class="guarantee-text">
                    <strong>Money-Back Guarantee</strong>
                    <p>100% satisfaction guaranteed or your money back</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>