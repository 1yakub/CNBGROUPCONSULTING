<?php
/**
 * Timeline and Details Component
 * Timeline selection and additional details fields for rate request form
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Timeline -->
<div>
    <label for="timeline" class="block text-sm font-medium text-gray-700 mb-2">
        When do you need this completed? *
    </label>
    <select id="timeline" name="timeline" required 
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
        <option value="">Select Timeline</option>
        <option value="asap">As soon as possible</option>
        <option value="1-2weeks">1-2 weeks</option>
        <option value="1month">Within 1 month</option>
        <option value="3months">Within 3 months</option>
        <option value="planning">Just planning ahead</option>
    </select>
</div>

<!-- Additional Details -->
<div>
    <label for="details" class="block text-sm font-medium text-gray-700 mb-2">
        Additional Details
    </label>
    <textarea id="details" name="details" rows="4" 
              placeholder="Tell us more about your business goals, specific requirements, or any questions you have..."
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors resize-none"></textarea>
</div>