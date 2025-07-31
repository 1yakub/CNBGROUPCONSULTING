import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

// Import CSS
import './style.css';

// Register Alpine plugins
Alpine.plugin(collapse);

// Alpine.js Components
Alpine.data('navigation', () => ({
    mobileMenuOpen: false,
    toggleMobileMenu() {
        this.mobileMenuOpen = !this.mobileMenuOpen;
    },
    closeMobileMenu() {
        this.mobileMenuOpen = false;
    }
}));

Alpine.data('faqAccordion', () => ({
    activeItem: null,
    toggle(index) {
        this.activeItem = this.activeItem === index ? null : index;
    },
    isOpen(index) {
        return this.activeItem === index;
    }
}));

Alpine.data('contactForm', () => ({
    formData: {
        name: '',
        email: '',
        phone: '',
        service: '',
        message: ''
    },
    isSubmitting: false,
    showSuccess: false,
    showError: false,
    
    async submitForm() {
        this.isSubmitting = true;
        this.showSuccess = false;
        this.showError = false;
        
        try {
            const formData = new FormData();
            Object.keys(this.formData).forEach(key => {
                formData.append(key, this.formData[key]);
            });
            formData.append('action', 'cnb_contact_form');
            formData.append('nonce', window.cnb_ajax?.nonce || '');
            
            const response = await fetch(window.cnb_ajax?.ajax_url || '/wp-admin/admin-ajax.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            if (result.success) {
                this.showSuccess = true;
                this.resetForm();
            } else {
                this.showError = true;
            }
        } catch (error) {
            console.error('Form submission error:', error);
            this.showError = true;
        } finally {
            this.isSubmitting = false;
        }
    },
    
    resetForm() {
        this.formData = {
            name: '',
            email: '',
            phone: '',
            service: '',
            message: ''
        };
    }
}));

Alpine.data('pricingCalculator', () => ({
    selectedPackage: 'standard',
    addOns: {
        expedited: false,
        registeredAgent: false,
        bankAccount: false
    },
    
    get basePrice() {
        const prices = {
            basic: 199,
            standard: 399,
            premium: 699
        };
        return prices[this.selectedPackage] || 0;
    },
    
    get addOnTotal() {
        let total = 0;
        if (this.addOns.expedited) total += 100;
        if (this.addOns.registeredAgent) total += 150;
        if (this.addOns.bankAccount) total += 50;
        return total;
    },
    
    get totalPrice() {
        return this.basePrice + this.addOnTotal;
    },
    
    selectPackage(packageName) {
        this.selectedPackage = packageName;
    }
}));

Alpine.data('testimonialSlider', () => ({
    currentSlide: 0,
    testimonials: [],
    
    init() {
        // Auto-advance slides every 5 seconds
        setInterval(() => {
            this.nextSlide();
        }, 5000);
    },
    
    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
    },
    
    prevSlide() {
        this.currentSlide = this.currentSlide === 0 ? this.testimonials.length - 1 : this.currentSlide - 1;
    },
    
    goToSlide(index) {
        this.currentSlide = index;
    }
}));

Alpine.data('scrollSpy', () => ({
    activeSection: '',
    
    init() {
        this.updateActiveSection();
        window.addEventListener('scroll', () => this.updateActiveSection());
    },
    
    updateActiveSection() {
        const sections = document.querySelectorAll('[data-section]');
        const scrollPos = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                this.activeSection = section.getAttribute('data-section');
            }
        });
    }
}));

Alpine.data('animateOnScroll', () => ({
    init() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        // Observe all elements with data-animate attribute
        document.querySelectorAll('[data-animate]').forEach(el => {
            observer.observe(el);
        });
    }
}));

// Initialize Alpine
window.Alpine = Alpine;
Alpine.start();

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Initialize scroll animations
    Alpine.data('animateOnScroll')().init();
});