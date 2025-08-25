<?php
/**
 * Contact Form Script Component
 * 
 * @package CNB_Consulting_Theme
 */
?>

<script>
    // Contact form handling
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);

        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Sending...</span>';
        submitBtn.disabled = true;


        setTimeout(() => {
            alert('Thank you for your message! We\'ll get back to you within 24 hours.');
            this.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
</script>