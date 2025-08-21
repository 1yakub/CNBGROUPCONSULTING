<?php
/**
 * Services Checkboxes Component
 * Service selection checkboxes for rate request form
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Services Needed -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-4">
        Services Needed * (Select all that apply)
    </label>
    <div class="grid md:grid-cols-2 gap-4">
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="company_formation" class="text-cnb-primary focus:ring-cnb-primary">
            <span>Company Formation</span>
        </label>
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="banking" class="text-cnb-primary focus:ring-cnb-primary">
            <span>Business Banking</span>
        </label>
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="ein" class="text-cnb-primary focus:ring-cnb-primary">
            <span>EIN Service</span>
        </label>
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="registered_agent" class="text-cnb-primary focus:ring-cnb-primary">
            <span>Registered Agent</span>
        </label>
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="ecommerce" class="text-cnb-primary focus:ring-cnb-primary">
            <span>E-Commerce Setup</span>
        </label>
        <label class="flex items-center space-x-3 p-3 border border-gray-200 rounded-lg hover:bg-gray-50 cursor-pointer">
            <input type="checkbox" name="services[]" value="tax_filing" class="text-cnb-primary focus:ring-cnb-primary">
            <span>Tax Filing</span>
        </label>
    </div>
</div>