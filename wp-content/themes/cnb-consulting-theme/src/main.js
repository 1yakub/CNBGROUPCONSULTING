import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

// Import CSS
import "./style.css";

// Register Alpine plugins
Alpine.plugin(collapse);

// Alpine.js Components
Alpine.data("navigation", () => ({
  mobileMenuOpen: false,
  toggleMobileMenu() {
    this.mobileMenuOpen = !this.mobileMenuOpen;
  },
  closeMobileMenu() {
    this.mobileMenuOpen = false;
  },
}));

Alpine.data("faqSystem", () => ({
  activeCategory: "general",
  activeItems: {},
  items: {},
  searchTerm: "",

  init() {
    this.$watch("activeCategory", () => {
      this.scrollToTop();
    });
  },

  init() {
    this.$watch("activeCategory", () => {
      this.scrollToTop();
    });
  },

  registerItem(category, id, searchText = "") {
    if (!this.items[category]) {
      this.items[category] = [];
    }

    const exists = this.items[category].some((item) => item.id === id);
    if (!exists) {
      this.items[category].push({ id, search: searchText.toLowerCase() });
    }
  },

  toggleItem(id) {
    this.activeItems[id] = !this.activeItems[id];
  },

  setCategory(category) {
    if (this.activeCategory === category) return;
    this.activeCategory = category;
    this.activeItems = {};
  },

  isOpen(id) {
    return !!this.activeItems[id];
  },

  isActiveCategory(category) {
    return this.activeCategory === category;
  },

  matchesSearch(searchText) {
    if (!this.searchTerm) return true;
    return searchText.includes(this.searchTerm.toLowerCase());
  },

  shouldShowItem(category, id) {
    if (!this.searchTerm) return true;
    const list = this.items[category] || [];
    const match = list.find((item) => item.id === id);
    if (!match) return true;
    return this.matchesSearch(match.search);
  },

  visibleCount(category) {
    const list = this.items[category] || [];
    if (!this.searchTerm) return list.length;
    return list.filter((item) => this.matchesSearch(item.search)).length;
  },

  expandAll() {
    const list = this.items[this.activeCategory] || [];
    list.forEach((item) => {
      if (this.shouldShowItem(this.activeCategory, item.id)) {
        this.activeItems[item.id] = true;
      }
    });
  },

  collapseAll() {
    const list = this.items[this.activeCategory] || [];
    list.forEach((item) => {
      this.activeItems[item.id] = false;
    });
  },

  clearSearch() {
    this.searchTerm = "";
  },

  scrollToTop() {
    if (typeof window === "undefined") return;
    const container = document.querySelector("[data-faq-root]");
    if (container) {
      container.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  },

  initCategory(category) {
    if (category) {
      this.activeCategory = category;
    } else if (Object.keys(this.items).length > 0) {
      this.activeCategory = Object.keys(this.items)[0];
    }
  },
}));

Alpine.data("contactForm", () => ({
  formData: {
    name: "",
    email: "",
    phone: "",
    service: "",
    message: "",
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
      Object.keys(this.formData).forEach((key) => {
        formData.append(key, this.formData[key]);
      });
      formData.append("action", "cnb_contact_form");
      formData.append("nonce", window.cnb_ajax?.nonce || "");

      const response = await fetch(
        window.cnb_ajax?.ajax_url || "/wp-admin/admin-ajax.php",
        {
          method: "POST",
          body: formData,
        }
      );

      const result = await response.json();

      if (result.success) {
        this.showSuccess = true;
        this.resetForm();
      } else {
        this.showError = true;
      }
    } catch (error) {
      console.error("Form submission error:", error);
      this.showError = true;
    } finally {
      this.isSubmitting = false;
    }
  },

  resetForm() {
    this.formData = {
      name: "",
      email: "",
      phone: "",
      service: "",
      message: "",
    };
  },
}));

Alpine.data("pricingCalculator", () => ({
  selectedPackage: "standard",
  addOns: {
    expedited: false,
    registeredAgent: false,
    bankAccount: false,
  },

  get basePrice() {
    const prices = {
      basic: 199,
      standard: 399,
      premium: 699,
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
  },
}));

Alpine.data("testimonialSlider", () => ({
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
    this.currentSlide =
      this.currentSlide === 0
        ? this.testimonials.length - 1
        : this.currentSlide - 1;
  },

  goToSlide(index) {
    this.currentSlide = index;
  },
}));

Alpine.data("scrollSpy", () => ({
  activeSection: "",

  init() {
    this.updateActiveSection();
    window.addEventListener("scroll", () => this.updateActiveSection());
  },

  updateActiveSection() {
    const sections = document.querySelectorAll("[data-section]");
    const scrollPos = window.scrollY + 100;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;

      if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
        this.activeSection = section.getAttribute("data-section");
      }
    });
  },
}));

// Initialize Alpine
window.Alpine = Alpine;
Alpine.start();

// Smooth scrolling for anchor links
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

});
