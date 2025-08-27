<?php
/**
 * Tax Filing Service - CTA Section
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information
$contact_info = cnb_get_contact_info();
?>

<!-- CTA Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Maximize Your Tax Savings?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Schedule your free consultation with an IRS certified tax professional today. No obligation, just expert advice.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                Email Us
            </a>
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                Email: <?php echo esc_html($contact_info['email']); ?>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-center">
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🎓</div>
                <div class="font-semibold text-sm">IRS Certified</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">💰</div>
                <div class="font-semibold text-sm">Max Deductions</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🛡️</div>
                <div class="font-semibold text-sm">Audit Protection</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">⚡</div>
                <div class="font-semibold text-sm">48hr Turnaround</div>
            </div>
        </div>
    </div>
</section>

<script>
function calculateSavings() {
    const income = parseFloat(document.getElementById('annual-income').value) || 0;
    const filingStatus = document.getElementById('filing-status').value;
    const businessOwner = document.getElementById('business-owner').value === 'yes';
    const homeowner = document.getElementById('homeowner').value === 'yes';
    
    if (income <= 0) {
        alert('Please enter a valid annual income amount.');
        return;
    }
    
    // Simplified calculation for demonstration
    let diyRefund = income * 0.12; // Basic standard deduction estimate
    let proRefund = diyRefund;
    
    // Add potential savings for professional preparation
    if (businessOwner) proRefund += income * 0.05; // Business deductions
    if (homeowner) proRefund += 2500; // Mortgage interest, property tax
    if (income > 75000) proRefund += 1500; // Complex return optimization
    if (filingStatus === 'married-joint') proRefund += 1000; // Joint filing optimizations
    
    const additionalSavings = proRefund - diyRefund;
    
    // Update display
    document.getElementById('diy-refund').textContent = '$' + Math.round(diyRefund).toLocaleString();
    document.getElementById('pro-refund').textContent = '$' + Math.round(proRefund).toLocaleString();
    document.getElementById('additional-savings').textContent = '$' + Math.round(additionalSavings).toLocaleString();
    
    document.getElementById('calculator-placeholder').classList.add('hidden');
    document.getElementById('calculator-results').classList.remove('hidden');
}
</script>