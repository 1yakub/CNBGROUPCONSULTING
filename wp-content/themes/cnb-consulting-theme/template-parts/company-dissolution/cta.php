<!-- CTA Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-cnb-primary to-blue-900 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Close Your Business Properly</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Don't leave yourself exposed to future liabilities. Professional dissolution provides complete legal protection and peace of mind.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <a href="tel:+1-555-CNB-GROUP" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-bold transition transform hover:scale-105">
                Call Now: (555) CNB-GROUP
            </a>
            <a href="mailto:dissolution@cnbgroupconsulting.com" class="bg-white bg-opacity-10 text-white border-2 border-white border-opacity-30 px-8 py-4 rounded-lg text-lg font-semibold hover:bg-opacity-20 transition">
                Email: dissolution@cnbgroupconsulting.com
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">🛡️</div>
                <div class="font-semibold text-sm">Asset Protection</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">⚖️</div>
                <div class="font-semibold text-sm">Legal Compliance</div>
            </div>
            <div class="bg-white bg-opacity-10 rounded-lg p-4">
                <div class="text-2xl mb-2">💰</div>
                <div class="font-semibold text-sm">Tax Closure</div>
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
document.getElementById('dissolution-assessment-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('Thank you! Our business dissolution specialist will contact you within 2 hours to discuss your closure plan.');
});
</script>