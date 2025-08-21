<?php
/**
 * Contact Fields Component
 * Name and contact information fields for rate request form
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- Contact Information -->
<div class="grid md:grid-cols-2 gap-6">
    <div>
        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">
            First Name *
        </label>
        <input type="text" id="first_name" name="first_name" required 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
    </div>
    <div>
        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">
            Last Name *
        </label>
        <input type="text" id="last_name" name="last_name" required 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
    </div>
</div>

<div class="grid md:grid-cols-2 gap-6">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
            Email Address *
        </label>
        <input type="email" id="email" name="email" required 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
    </div>
    <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
            Phone Number
        </label>
        <input type="tel" id="phone" name="phone" 
               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-cnb-primary transition-colors">
    </div>
</div>