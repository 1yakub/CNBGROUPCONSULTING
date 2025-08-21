<?php
/**
 * FAQ CTA Section with JavaScript Functionality
 * 
 * @package CNB_Consulting_Theme
 */
?>

<!-- CTA Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Still Have Questions?</h2>
        <p class="text-xl text-gray-600 mb-8">
            Our business experts are here to help with personalized answers and recommendations.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="<?php echo esc_url(cnb_get_cta_link('contact-us')); ?>" class="bg-cnb-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                Contact Us Today
            </a>
            <a href="mailto:cnbgroupconsultingllc@gmail.com" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-4 rounded-lg text-lg font-semibold transition transform hover:scale-105">
                Email Us
            </a>
        </div>
    </div>
</section>

<script>
function showCategory(category) {
    // Hide all categories
    const categories = document.querySelectorAll('.faq-category');
    categories.forEach(cat => cat.classList.add('hidden'));
    
    // Show selected category
    document.getElementById(category).classList.remove('hidden');
    
    // Update navigation buttons
    const navBtns = document.querySelectorAll('.faq-nav-btn');
    navBtns.forEach(btn => {
        btn.classList.remove('bg-cnb-primary', 'text-white');
        btn.classList.add('bg-white', 'text-cnb-primary', 'border-2', 'border-cnb-primary');
    });
    
    // Highlight active button
    event.target.classList.remove('bg-white', 'text-cnb-primary', 'border-2', 'border-cnb-primary');
    event.target.classList.add('bg-cnb-primary', 'text-white');
}

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

// Initialize with general category selected
document.addEventListener('DOMContentLoaded', function() {
    showCategory('general');
});
</script>