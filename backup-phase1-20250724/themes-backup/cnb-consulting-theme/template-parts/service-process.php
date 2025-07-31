<?php
/**
 * Service Process Steps Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$process_steps = get_post_meta(get_the_ID(), '_cnb_process_steps', true);

if (!empty($process_steps) && is_array($process_steps)) :
?>

<section class="service-process">
    <div class="container">
        <div class="section-header">
            <h2>Our Simple Process</h2>
            <p>We make <?php echo strtolower(get_the_title()); ?> easy with our proven step-by-step approach</p>
        </div>
        
        <div class="process-timeline">
            <?php foreach ($process_steps as $index => $step) : 
                if (empty($step['title'])) continue;
                $step_number = $index + 1;
                $is_last = ($index === count($process_steps) - 1);
                $step_icons = ['📋', '📝', '🚀', '📦', '✅', '🎉']; // Icon pool
                $step_icon = $step_icons[$index] ?? '📋';
            ?>
                <div class="process-step" data-step="<?php echo $step_number; ?>">
                    <div class="step-visual">
                        <div class="step-number">
                            <span class="step-digit"><?php echo $step_number; ?></span>
                        </div>
                        <div class="step-icon">
                            <span><?php echo $step_icon; ?></span>
                        </div>
                        
                        <?php if (!$is_last) : ?>
                            <div class="step-connector">
                                <div class="connector-line"></div>
                                <div class="connector-arrow">→</div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="step-content">
                        <div class="step-header">
                            <h3><?php echo esc_html($step['title']); ?></h3>
                            <?php if (!empty($step['duration'])) : ?>
                                <div class="step-duration">
                                    <span class="duration-icon">⏱️</span>
                                    <span class="duration-text"><?php echo esc_html($step['duration']); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (!empty($step['description'])) : ?>
                            <div class="step-description">
                                <p><?php echo esc_html($step['description']); ?></p>
                            </div>
                        <?php endif; ?>
                        
                        <div class="step-status">
                            <span class="status-badge">Step <?php echo $step_number; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="process-cta">
            <p>Ready to get started with our proven process?</p>
            <a href="#pricing" class="btn btn-secondary">View Packages</a>
        </div>
    </div>
</section>

<?php endif; ?>