<?php
/**
 * Resale Certificate CTA Section
 * 
 * @package CNB_Consulting_Theme
 */

// Get contact information
$contact_info = cnb_get_contact_info();
?>

<!-- CTA Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Start Saving on Taxes Today</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Get your resale certificate and begin purchasing inventory tax-free. Professional service with same-day processing available.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                Email Us
            </a>
            <a href="<?php echo esc_url(cnb_get_cta_link('email')); ?>" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                Email: <?php echo esc_html($contact_info['email']); ?>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">💰</div>
                <div class="font-semibold text-sm">Tax Savings</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">⚡</div>
                <div class="font-semibold text-sm">Same Day</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🛡️</div>
                <div class="font-semibold text-sm">Compliance</div>
            </div>
        </div>
    </div>
</section>

<script>
function calculateSavings() {
    const monthlyPurchases = parseFloat(document.getElementById('monthly-purchases').value) || 0;
    const taxRate = parseFloat(document.getElementById('tax-rate').value) || 0.08;
    
    if (monthlyPurchases <= 0) {
        document.getElementById('savings-results').innerHTML = '<div class="text-center text-red-500">Please enter a valid purchase amount</div>';
        return;
    }
    
    const monthlySavings = monthlyPurchases * taxRate;
    const annualSavings = monthlySavings * 12;
    const serviceFee = 79;
    const roi = ((annualSavings - serviceFee) / serviceFee * 100).toFixed(0);
    
    document.getElementById('savings-results').innerHTML = `
        <div class="text-center space-y-3">
            <div class="text-2xl font-bold text-green-600">$${monthlySavings.toLocaleString()}</div>
            <div class="text-sm text-gray-600">Monthly Savings</div>
            <div class="text-3xl font-bold text-cnb-primary">$${annualSavings.toLocaleString()}</div>
            <div class="text-sm text-gray-600">Annual Savings</div>
            <div class="text-lg font-semibold text-gray-900">${roi}% ROI</div>
            <div class="text-xs text-gray-500">Return on $79 investment</div>
        </div>
    `;
}

// Form handling
document.getElementById('resale-application-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our tax specialist will contact you within 1 hour with your savings estimate and certificate details.');
});
</script>