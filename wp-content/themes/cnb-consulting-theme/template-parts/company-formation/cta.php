<?php
/**
 * CTA Section for Company Formation Page
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- Final CTA Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Business?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Join 500+ successful entrepreneurs who chose CNB Group for their business formation. Get started today with our proven process.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                Call Now: (555) CNB-GROUP
            </a>
            <a href="mailto:info@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                Email: info@cnbgroupconsulting.com
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">⚡</div>
                <div class="font-semibold">24-Hour Filing</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🛡️</div>
                <div class="font-semibold">100% Guarantee</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">📞</div>
                <div class="font-semibold">Expert Support</div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFAQ(targetId) {
    const answer = document.getElementById(targetId);
    const toggle = document.getElementById('toggle-' + targetId);
    
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        toggle.textContent = '−';
    } else {
        answer.classList.add('hidden');
        toggle.textContent = '+';
    }
}

// Form handling
document.getElementById('formation-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! We\'ll contact you within 1 hour with your custom quote.');
});
</script>