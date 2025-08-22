<?php
/**
 * Tax Filing Service - Calculator Form Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<div>
    <h3 class="text-xl font-bold text-gray-900 mb-6">Enter Your Information</h3>
    <div class="space-y-4">
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Annual Income</label>
            <input type="number" id="annual-income" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent" placeholder="75000">
        </div>
        
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Filing Status</label>
            <select id="filing-status" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                <option value="single">Single</option>
                <option value="married-joint">Married Filing Jointly</option>
                <option value="married-separate">Married Filing Separately</option>
                <option value="head-household">Head of Household</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Owner?</label>
            <select id="business-owner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Homeowner?</label>
            <select id="homeowner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cnb-primary focus:border-transparent">
                <option value="no">No</option>
                <option value="yes">Yes</option>
            </select>
        </div>
        
        <button onclick="calculateSavings()" class="w-full bg-cnb-primary hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold transition">
            Calculate My Savings
        </button>
    </div>
</div>