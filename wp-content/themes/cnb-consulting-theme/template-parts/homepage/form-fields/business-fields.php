<?php
/**
 * Business Fields Component
 * Business type and country selection fields for rate request form
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Business Information -->
<div class="grid md:grid-cols-2 gap-6">
    <div>
        <label for="business_type" class="block text-sm font-medium text-gray-700 mb-2">
            Business Type *
        </label>
        <select id="business_type" name="business_type" required 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
            <option value="">Select Business Type</option>
            <option value="llc">LLC</option>
            <option value="corporation">Corporation</option>
            <option value="partnership">Partnership</option>
            <option value="existing">Existing Business</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div>
        <label for="country" class="block text-sm font-medium text-gray-700 mb-2">
            Formation Country *
        </label>
        <select id="country" name="country" required 
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
            <option value="">Select Country</option>
            <option value="usa">United States</option>
            <option value="uk">United Kingdom</option>
            <option value="uae">United Arab Emirates</option>
        </select>
    </div>
</div>