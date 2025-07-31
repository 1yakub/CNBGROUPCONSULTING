<?php
/**
 * Service Meta Boxes
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add service meta boxes
 */
function cnb_add_service_meta_boxes() {
    add_meta_box(
        'cnb_service_details',
        __('Service Details', 'cnb-consulting-theme'),
        'cnb_service_details_callback',
        'cnb_service',
        'normal',
        'high'
    );
    
    add_meta_box(
        'cnb_service_pricing',
        __('Pricing Packages', 'cnb-consulting-theme'),
        'cnb_service_pricing_callback',
        'cnb_service',
        'normal',
        'high'
    );
    
    add_meta_box(
        'cnb_service_process',
        __('Process Steps', 'cnb-consulting-theme'),
        'cnb_service_process_callback',
        'cnb_service',
        'normal',
        'default'
    );
    
    add_meta_box(
        'cnb_service_faq',
        __('FAQ Section', 'cnb-consulting-theme'),
        'cnb_service_faq_callback',
        'cnb_service',
        'normal',
        'default'
    );
    
    add_meta_box(
        'cnb_service_benefits',
        __('Service Benefits', 'cnb-consulting-theme'),
        'cnb_service_benefits_callback',
        'cnb_service',
        'normal',
        'default'
    );
    
    add_meta_box(
        'cnb_service_cta',
        __('Call-to-Action', 'cnb-consulting-theme'),
        'cnb_service_cta_callback',
        'cnb_service',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'cnb_add_service_meta_boxes');

/**
 * Service Details Meta Box Callback
 */
function cnb_service_details_callback($post) {
    wp_nonce_field('cnb_service_meta_box', 'cnb_service_meta_box_nonce');
    
    $processing_time = get_post_meta($post->ID, '_cnb_processing_time', true);
    $success_rate = get_post_meta($post->ID, '_cnb_success_rate', true);
    $guarantee_period = get_post_meta($post->ID, '_cnb_guarantee_period', true);
    $hero_subtitle = get_post_meta($post->ID, '_cnb_hero_subtitle', true);
    $value_proposition = get_post_meta($post->ID, '_cnb_value_proposition', true);
    ?>
    <table class="form-table">
        <tr>
            <th scope="row"><label for="cnb_hero_subtitle"><?php _e('Hero Subtitle', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_hero_subtitle" name="cnb_hero_subtitle" value="<?php echo esc_attr($hero_subtitle); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_value_proposition"><?php _e('Value Proposition', 'cnb-consulting-theme'); ?></label></th>
            <td><textarea id="cnb_value_proposition" name="cnb_value_proposition" rows="3" class="large-text"><?php echo esc_textarea($value_proposition); ?></textarea></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_processing_time"><?php _e('Processing Time', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_processing_time" name="cnb_processing_time" value="<?php echo esc_attr($processing_time); ?>" placeholder="e.g., 3-5 business days" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_success_rate"><?php _e('Success Rate', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_success_rate" name="cnb_success_rate" value="<?php echo esc_attr($success_rate); ?>" placeholder="e.g., 99%" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_guarantee_period"><?php _e('Guarantee Period', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_guarantee_period" name="cnb_guarantee_period" value="<?php echo esc_attr($guarantee_period); ?>" placeholder="e.g., 30 days" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Service Pricing Meta Box Callback
 */
function cnb_service_pricing_callback($post) {
    $basic_name = get_post_meta($post->ID, '_cnb_basic_name', true) ?: 'Basic Package';
    $basic_price = get_post_meta($post->ID, '_cnb_basic_price', true);
    $basic_features = get_post_meta($post->ID, '_cnb_basic_features', true);
    
    $standard_name = get_post_meta($post->ID, '_cnb_standard_name', true) ?: 'Standard Package';
    $standard_price = get_post_meta($post->ID, '_cnb_standard_price', true);
    $standard_features = get_post_meta($post->ID, '_cnb_standard_features', true);
    $standard_popular = get_post_meta($post->ID, '_cnb_standard_popular', true);
    
    $premium_name = get_post_meta($post->ID, '_cnb_premium_name', true) ?: 'Premium Package';
    $premium_price = get_post_meta($post->ID, '_cnb_premium_price', true);
    $premium_features = get_post_meta($post->ID, '_cnb_premium_features', true);
    ?>
    <div class="cnb-pricing-packages">
        <h4><?php _e('Three-Tier Pricing Structure', 'cnb-consulting-theme'); ?></h4>
        
        <div class="cnb-package-group">
            <h5><?php _e('Basic Package', 'cnb-consulting-theme'); ?></h5>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="cnb_basic_name"><?php _e('Package Name', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_basic_name" name="cnb_basic_name" value="<?php echo esc_attr($basic_name); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_basic_price"><?php _e('Price', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_basic_price" name="cnb_basic_price" value="<?php echo esc_attr($basic_price); ?>" placeholder="$299" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_basic_features"><?php _e('Features (one per line)', 'cnb-consulting-theme'); ?></label></th>
                    <td><textarea id="cnb_basic_features" name="cnb_basic_features" rows="4" class="large-text"><?php echo esc_textarea($basic_features); ?></textarea></td>
                </tr>
            </table>
        </div>

        <div class="cnb-package-group">
            <h5><?php _e('Standard Package', 'cnb-consulting-theme'); ?></h5>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="cnb_standard_name"><?php _e('Package Name', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_standard_name" name="cnb_standard_name" value="<?php echo esc_attr($standard_name); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_standard_price"><?php _e('Price', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_standard_price" name="cnb_standard_price" value="<?php echo esc_attr($standard_price); ?>" placeholder="$499" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_standard_features"><?php _e('Features (one per line)', 'cnb-consulting-theme'); ?></label></th>
                    <td><textarea id="cnb_standard_features" name="cnb_standard_features" rows="5" class="large-text"><?php echo esc_textarea($standard_features); ?></textarea></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_standard_popular"><?php _e('Mark as Popular', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="checkbox" id="cnb_standard_popular" name="cnb_standard_popular" value="1" <?php checked($standard_popular, 1); ?> /></td>
                </tr>
            </table>
        </div>

        <div class="cnb-package-group">
            <h5><?php _e('Premium Package', 'cnb-consulting-theme'); ?></h5>
            <table class="form-table">
                <tr>
                    <th scope="row"><label for="cnb_premium_name"><?php _e('Package Name', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_premium_name" name="cnb_premium_name" value="<?php echo esc_attr($premium_name); ?>" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_premium_price"><?php _e('Price', 'cnb-consulting-theme'); ?></label></th>
                    <td><input type="text" id="cnb_premium_price" name="cnb_premium_price" value="<?php echo esc_attr($premium_price); ?>" placeholder="$799" class="regular-text" /></td>
                </tr>
                <tr>
                    <th scope="row"><label for="cnb_premium_features"><?php _e('Features (one per line)', 'cnb-consulting-theme'); ?></label></th>
                    <td><textarea id="cnb_premium_features" name="cnb_premium_features" rows="6" class="large-text"><?php echo esc_textarea($premium_features); ?></textarea></td>
                </tr>
            </table>
        </div>
    </div>
    
    <style>
    .cnb-package-group { 
        border: 1px solid #ddd; 
        padding: 15px; 
        margin: 10px 0; 
        background: #f9f9f9; 
    }
    .cnb-package-group h5 { 
        margin-top: 0; 
        color: #23282d; 
    }
    </style>
    <?php
}

/**
 * Service Process Meta Box Callback
 */
function cnb_service_process_callback($post) {
    $process_steps = get_post_meta($post->ID, '_cnb_process_steps', true);
    if (!is_array($process_steps)) {
        $process_steps = array();
    }
    ?>
    <div id="cnb-process-steps">
        <p><?php _e('Add up to 6 process steps that explain your service workflow.', 'cnb-consulting-theme'); ?></p>
        <div id="cnb-process-steps-container">
            <?php
            for ($i = 0; $i < 6; $i++) {
                $step = isset($process_steps[$i]) ? $process_steps[$i] : array('title' => '', 'description' => '', 'duration' => '');
                ?>
                <div class="cnb-process-step">
                    <h5><?php printf(__('Step %d', 'cnb-consulting-theme'), $i + 1); ?></h5>
                    <table class="form-table">
                        <tr>
                            <th scope="row"><label for="cnb_step_title_<?php echo $i; ?>"><?php _e('Step Title', 'cnb-consulting-theme'); ?></label></th>
                            <td><input type="text" id="cnb_step_title_<?php echo $i; ?>" name="cnb_process_steps[<?php echo $i; ?>][title]" value="<?php echo esc_attr($step['title']); ?>" class="regular-text" /></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="cnb_step_description_<?php echo $i; ?>"><?php _e('Description', 'cnb-consulting-theme'); ?></label></th>
                            <td><textarea id="cnb_step_description_<?php echo $i; ?>" name="cnb_process_steps[<?php echo $i; ?>][description]" rows="2" class="large-text"><?php echo esc_textarea($step['description']); ?></textarea></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="cnb_step_duration_<?php echo $i; ?>"><?php _e('Duration', 'cnb-consulting-theme'); ?></label></th>
                            <td><input type="text" id="cnb_step_duration_<?php echo $i; ?>" name="cnb_process_steps[<?php echo $i; ?>][duration]" value="<?php echo esc_attr($step['duration']); ?>" placeholder="1 day" class="regular-text" /></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    
    <style>
    .cnb-process-step { 
        border: 1px solid #ddd; 
        padding: 15px; 
        margin: 10px 0; 
        background: #f9f9f9; 
    }
    .cnb-process-step h5 { 
        margin-top: 0; 
        color: #23282d; 
    }
    </style>
    <?php
}

/**
 * Service FAQ Meta Box Callback
 */
function cnb_service_faq_callback($post) {
    $faq_items = get_post_meta($post->ID, '_cnb_faq_items', true);
    if (!is_array($faq_items)) {
        $faq_items = array();
    }
    ?>
    <div id="cnb-faq-items">
        <p><?php _e('Add up to 8 frequently asked questions for this service.', 'cnb-consulting-theme'); ?></p>
        <div id="cnb-faq-items-container">
            <?php
            for ($i = 0; $i < 8; $i++) {
                $faq = isset($faq_items[$i]) ? $faq_items[$i] : array('question' => '', 'answer' => '');
                ?>
                <div class="cnb-faq-item">
                    <h5><?php printf(__('FAQ %d', 'cnb-consulting-theme'), $i + 1); ?></h5>
                    <table class="form-table">
                        <tr>
                            <th scope="row"><label for="cnb_faq_question_<?php echo $i; ?>"><?php _e('Question', 'cnb-consulting-theme'); ?></label></th>
                            <td><input type="text" id="cnb_faq_question_<?php echo $i; ?>" name="cnb_faq_items[<?php echo $i; ?>][question]" value="<?php echo esc_attr($faq['question']); ?>" class="large-text" /></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="cnb_faq_answer_<?php echo $i; ?>"><?php _e('Answer', 'cnb-consulting-theme'); ?></label></th>
                            <td><textarea id="cnb_faq_answer_<?php echo $i; ?>" name="cnb_faq_items[<?php echo $i; ?>][answer]" rows="3" class="large-text"><?php echo esc_textarea($faq['answer']); ?></textarea></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    
    <style>
    .cnb-faq-item { 
        border: 1px solid #ddd; 
        padding: 15px; 
        margin: 10px 0; 
        background: #f9f9f9; 
    }
    .cnb-faq-item h5 { 
        margin-top: 0; 
        color: #23282d; 
    }
    </style>
    <?php
}

/**
 * Service Benefits Meta Box Callback
 */
function cnb_service_benefits_callback($post) {
    $benefits = get_post_meta($post->ID, '_cnb_benefits', true);
    if (!is_array($benefits)) {
        $benefits = array();
    }
    ?>
    <div id="cnb-benefits">
        <p><?php _e('Add up to 6 key benefits of this service.', 'cnb-consulting-theme'); ?></p>
        <div id="cnb-benefits-container">
            <?php
            for ($i = 0; $i < 6; $i++) {
                $benefit = isset($benefits[$i]) ? $benefits[$i] : array('title' => '', 'description' => '');
                ?>
                <div class="cnb-benefit-item">
                    <h5><?php printf(__('Benefit %d', 'cnb-consulting-theme'), $i + 1); ?></h5>
                    <table class="form-table">
                        <tr>
                            <th scope="row"><label for="cnb_benefit_title_<?php echo $i; ?>"><?php _e('Benefit Title', 'cnb-consulting-theme'); ?></label></th>
                            <td><input type="text" id="cnb_benefit_title_<?php echo $i; ?>" name="cnb_benefits[<?php echo $i; ?>][title]" value="<?php echo esc_attr($benefit['title']); ?>" class="regular-text" /></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="cnb_benefit_description_<?php echo $i; ?>"><?php _e('Description', 'cnb-consulting-theme'); ?></label></th>
                            <td><textarea id="cnb_benefit_description_<?php echo $i; ?>" name="cnb_benefits[<?php echo $i; ?>][description]" rows="2" class="large-text"><?php echo esc_textarea($benefit['description']); ?></textarea></td>
                        </tr>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    
    <style>
    .cnb-benefit-item { 
        border: 1px solid #ddd; 
        padding: 15px; 
        margin: 10px 0; 
        background: #f9f9f9; 
    }
    .cnb-benefit-item h5 { 
        margin-top: 0; 
        color: #23282d; 
    }
    </style>
    <?php
}

/**
 * Service CTA Meta Box Callback
 */
function cnb_service_cta_callback($post) {
    $primary_cta_text = get_post_meta($post->ID, '_cnb_primary_cta_text', true) ?: 'Get Started Now';
    $primary_cta_link = get_post_meta($post->ID, '_cnb_primary_cta_link', true);
    $secondary_cta_text = get_post_meta($post->ID, '_cnb_secondary_cta_text', true) ?: 'Free Consultation';
    $secondary_cta_link = get_post_meta($post->ID, '_cnb_secondary_cta_link', true);
    $contact_phone = get_post_meta($post->ID, '_cnb_contact_phone', true);
    $whatsapp_number = get_post_meta($post->ID, '_cnb_whatsapp_number', true);
    ?>
    <table class="form-table">
        <tr>
            <th scope="row"><label for="cnb_primary_cta_text"><?php _e('Primary CTA Text', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_primary_cta_text" name="cnb_primary_cta_text" value="<?php echo esc_attr($primary_cta_text); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_primary_cta_link"><?php _e('Primary CTA Link', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="url" id="cnb_primary_cta_link" name="cnb_primary_cta_link" value="<?php echo esc_url($primary_cta_link); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_secondary_cta_text"><?php _e('Secondary CTA Text', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="text" id="cnb_secondary_cta_text" name="cnb_secondary_cta_text" value="<?php echo esc_attr($secondary_cta_text); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_secondary_cta_link"><?php _e('Secondary CTA Link', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="url" id="cnb_secondary_cta_link" name="cnb_secondary_cta_link" value="<?php echo esc_url($secondary_cta_link); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_contact_phone"><?php _e('Contact Phone', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="tel" id="cnb_contact_phone" name="cnb_contact_phone" value="<?php echo esc_attr($contact_phone); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th scope="row"><label for="cnb_whatsapp_number"><?php _e('WhatsApp Number', 'cnb-consulting-theme'); ?></label></th>
            <td><input type="tel" id="cnb_whatsapp_number" name="cnb_whatsapp_number" value="<?php echo esc_attr($whatsapp_number); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save service meta box data
 */
function cnb_save_service_meta_box_data($post_id) {
    // Check if our nonce is set
    if (!isset($_POST['cnb_service_meta_box_nonce'])) {
        return;
    }

    // Verify that the nonce is valid
    if (!wp_verify_nonce($_POST['cnb_service_meta_box_nonce'], 'cnb_service_meta_box')) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check the user's permissions
    if (isset($_POST['post_type']) && 'cnb_service' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    // Save service details
    $details_fields = array(
        'cnb_hero_subtitle' => '_cnb_hero_subtitle',
        'cnb_value_proposition' => '_cnb_value_proposition',
        'cnb_processing_time' => '_cnb_processing_time',
        'cnb_success_rate' => '_cnb_success_rate',
        'cnb_guarantee_period' => '_cnb_guarantee_period'
    );

    foreach ($details_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
        }
    }

    // Save pricing data
    $pricing_fields = array(
        'cnb_basic_name' => '_cnb_basic_name',
        'cnb_basic_price' => '_cnb_basic_price',
        'cnb_basic_features' => '_cnb_basic_features',
        'cnb_standard_name' => '_cnb_standard_name',
        'cnb_standard_price' => '_cnb_standard_price',
        'cnb_standard_features' => '_cnb_standard_features',
        'cnb_premium_name' => '_cnb_premium_name',
        'cnb_premium_price' => '_cnb_premium_price',
        'cnb_premium_features' => '_cnb_premium_features'
    );

    foreach ($pricing_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            if (strpos($field, 'features') !== false) {
                update_post_meta($post_id, $meta_key, sanitize_textarea_field($_POST[$field]));
            } else {
                update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
            }
        }
    }

    // Save standard popular checkbox
    update_post_meta($post_id, '_cnb_standard_popular', isset($_POST['cnb_standard_popular']) ? 1 : 0);

    // Save process steps
    if (isset($_POST['cnb_process_steps'])) {
        $process_steps = array();
        foreach ($_POST['cnb_process_steps'] as $step) {
            if (!empty($step['title'])) {
                $process_steps[] = array(
                    'title' => sanitize_text_field($step['title']),
                    'description' => sanitize_textarea_field($step['description']),
                    'duration' => sanitize_text_field($step['duration'])
                );
            }
        }
        update_post_meta($post_id, '_cnb_process_steps', $process_steps);
    }

    // Save FAQ items
    if (isset($_POST['cnb_faq_items'])) {
        $faq_items = array();
        foreach ($_POST['cnb_faq_items'] as $faq) {
            if (!empty($faq['question'])) {
                $faq_items[] = array(
                    'question' => sanitize_text_field($faq['question']),
                    'answer' => sanitize_textarea_field($faq['answer'])
                );
            }
        }
        update_post_meta($post_id, '_cnb_faq_items', $faq_items);
    }

    // Save benefits
    if (isset($_POST['cnb_benefits'])) {
        $benefits = array();
        foreach ($_POST['cnb_benefits'] as $benefit) {
            if (!empty($benefit['title'])) {
                $benefits[] = array(
                    'title' => sanitize_text_field($benefit['title']),
                    'description' => sanitize_textarea_field($benefit['description'])
                );
            }
        }
        update_post_meta($post_id, '_cnb_benefits', $benefits);
    }

    // Save CTA data
    $cta_fields = array(
        'cnb_primary_cta_text' => '_cnb_primary_cta_text',
        'cnb_primary_cta_link' => '_cnb_primary_cta_link',
        'cnb_secondary_cta_text' => '_cnb_secondary_cta_text',
        'cnb_secondary_cta_link' => '_cnb_secondary_cta_link',
        'cnb_contact_phone' => '_cnb_contact_phone',
        'cnb_whatsapp_number' => '_cnb_whatsapp_number'
    );

    foreach ($cta_fields as $field => $meta_key) {
        if (isset($_POST[$field])) {
            if (strpos($field, 'link') !== false) {
                update_post_meta($post_id, $meta_key, esc_url_raw($_POST[$field]));
            } else {
                update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$field]));
            }
        }
    }
}
add_action('save_post', 'cnb_save_service_meta_box_data');