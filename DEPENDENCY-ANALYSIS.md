# DEPENDENCY-ANALYSIS.md - Template Dependencies & Conversion Strategy

**Date:** Emergency Rollback Analysis  
**Purpose:** Analyze ALL dependencies before any removal to prevent site breakage

---

## 🔍 CSS DEPENDENCY MAPPING

### **Critical CSS Classes Analysis:**

#### **FOUNDATION CLASSES (Used Everywhere)**
```css
/* PRIORITY 1 - MUST CONVERT FIRST */
.container          → Used in: header.php, footer.php, front-page.php, all template-parts
.site               → Used in: header.php (root container)
.site-header        → Used in: header.php (main header structure)
.site-footer        → Used in: footer.php (main footer structure)
.btn                → Used everywhere (buttons, CTAs, navigation)
.btn-primary        → Used in: all CTA sections, forms, primary actions
.btn-secondary      → Used in: header CTA, newsletter, secondary actions
.sr-only            → Used in: header.php (accessibility)
```

#### **NAVIGATION CLASSES (Critical for UX)**
```css
/* PRIORITY 2 - NAVIGATION FUNCTIONALITY */
.main-navigation    → Used in: header.php (main nav structure)
.primary-menu       → Used in: header.php (menu items)
.menu-toggle        → Used in: header.php (mobile hamburger)
.hamburger          → Used in: header.php (hamburger icon)
.header-inner       → Used in: header.php (header layout)
.header-main        → Used in: header.php (main header section)
.site-branding      → Used in: header.php (logo area)
```

#### **CONTENT SECTION CLASSES**
```css
/* PRIORITY 3 - CONTENT STRUCTURE */
.hero-section       → Used in: front-page.php, service templates
.services-section   → Used in: front-page.php
.stats-section      → Used in: front-page.php  
.testimonials-section → Used in: front-page.php
.process-section    → Used in: front-page.php, service templates
.faq-section        → Used in: front-page.php, service templates
.cta-section        → Used in: front-page.php, service templates
```

#### **COMPONENT-SPECIFIC CLASSES**
```css
/* PRIORITY 4 - INDIVIDUAL COMPONENTS */
.service-card       → Used in: services-overview.php template-part
.pricing-card       → Used in: service-pricing.php template-part
.faq-item           → Used in: faq-section.php, service-faq.php
.process-step       → Used in: process-steps.php, service-process.php
.testimonial-item   → Used in: testimonials-section.php
.newsletter-form    → Used in: footer.php
```

---

## 📊 FILE-BY-FILE DEPENDENCY BREAKDOWN

### **header.php - 25 Critical Classes**
```
Dependencies: container, site, site-header, header-inner, header-top, 
contact-info, contact-items, contact-item, btn, btn-secondary, btn-sm, 
header-main, site-branding, site-logo-text, site-logo, site-tagline, 
main-navigation, menu-toggle, hamburger, hamburger-line, primary-menu, 
header-actions, search-toggle, whatsapp-link, btn-outline
```
**Risk Level:** 🚨 HIGH - Header will be completely unstyled

### **footer.php - 50+ Critical Classes**  
```
Dependencies: site-footer, container, footer-main, footer-widgets, 
footer-widget, footer-company, footer-logo, footer-description, 
footer-stats, stat-item, stat-number, stat-label, widget-title, 
footer-contact, contact-items, contact-details, newsletter-form, 
form-group, form-input, btn-secondary, footer-bottom, footer-copyright, 
trust-badges, trust-item
```
**Risk Level:** 🚨 HIGH - Footer will break completely

### **front-page.php - 75+ Classes**
```
Dependencies: site-main, page-content, hero-section, services-section, 
stats-section, testimonials-section, process-section, faq-section, 
cta-section, plus ALL template-part dependencies
```
**Risk Level:** 🚨 CRITICAL - Homepage will be completely broken

### **Template Parts Dependencies:**

#### **service-hero.php**
```css
Dependencies: service-hero, hero-container, hero-content, hero-breadcrumbs, 
hero-title, hero-subtitle, hero-description, hero-stats, hero-buttons, 
trust-indicators, trust-item
```

#### **service-pricing.php**  
```css
Dependencies: service-pricing, pricing-grid, pricing-card, pricing-header, 
plan-badge, price, price-currency, price-amount, pricing-features, 
feature, pricing-cta, btn-full-width, plan-guarantee
```

#### **service-faq.php**
```css
Dependencies: service-faq, faq-container, faq-item, faq-question, 
faq-answer, faq-toggle, faq-contact (+ JavaScript animations)
```

---

## ⚠️ JAVASCRIPT DEPENDENCIES ON CSS

### **FAQ Accordion Functionality**
```javascript
// CRITICAL: These CSS classes are required for JavaScript to work
.faq-item.active .faq-answer {
    max-height: 200px;  // Animation depends on this
}
.faq-answer {
    max-height: 0;      // Initial state required
    overflow: hidden;   // Required for animation
}
```
**Risk:** FAQ accordions will break without proper CSS conversion

### **Mobile Navigation**
```javascript
// Mobile menu toggle depends on CSS classes
.menu-toggle        // Button functionality
.hamburger          // Icon animation
.primary-menu       // Show/hide behavior
```

---

## 🎯 SYSTEMATIC CONVERSION STRATEGY

### **Phase 1: Foundation Conversion (EMERGENCY CRITICAL)**
**Order:** Must be done together as one unit
1. **Container System**
   - `.container` → `max-w-7xl mx-auto px-4`
   - `.site` → `min-h-screen flex flex-col`

2. **Basic Button System**  
   - `.btn` → `px-4 py-2 rounded font-medium transition`
   - `.btn-primary` → `bg-cnb-primary text-white hover:bg-blue-700`
   - `.btn-secondary` → `bg-cnb-secondary text-gray-900 hover:bg-yellow-600`

3. **Header/Footer Foundation**
   - `.site-header` → `bg-white border-b border-gray-200`
   - `.site-footer` → `bg-gray-900 text-white`

**Test After:** Basic site structure should be intact

### **Phase 2: Navigation Conversion**
**Order:** Header navigation must work for site usability
1. **Navigation Structure**
   - `.main-navigation` → `flex items-center space-x-6`
   - `.primary-menu` → `flex space-x-4`
   - `.menu-toggle` → `md:hidden flex items-center`

**Test After:** Navigation should be functional on desktop and mobile

### **Phase 3: Homepage Sections (One at a time)**
**Order:** Convert sections individually and test each
1. **Hero Section** 
   - Convert hero-related classes
   - Test hero section appearance
2. **Services Section**
   - Convert services-related classes  
   - Test services grid display
3. **Stats Section**
   - Convert stats-related classes
   - Test company statistics display
4. **Continue with remaining sections...**

### **Phase 4: Template Parts (Individual Conversion)**
**Order:** Convert and test each template part separately
1. **service-hero.php** → Convert and test
2. **service-pricing.php** → Convert and test  
3. **service-faq.php** → Convert and test (preserve JavaScript)
4. **Continue with remaining parts...**

---

## 🛡️ SAFETY MEASURES

### **Conversion Requirements:**
1. **Never remove CSS until replacement is ready**
2. **Convert classes in-place, don't delete then recreate**
3. **Test each section immediately after conversion**
4. **Keep FAQ JavaScript CSS intact during conversion**
5. **Maintain one working version at all times**

### **Testing Checkpoints:**
- After Foundation: Test basic site structure
- After Navigation: Test menu functionality 
- After Each Section: Test individual section display
- After Each Template Part: Test component functionality
- Full Mobile Test: After each major conversion

### **Rollback Points:**
- Backup before each conversion phase
- Document exactly what was changed
- Keep detailed conversion log
- Ability to revert any single change

---

## 📋 CONVERSION APPROACH: ONE FILE AT A TIME

### **Recommended Order:**

#### **Step 1: Foundation Classes (Critical First)**
- Convert only `.container`, `.site`, `.btn` classes
- Test basic structure works
- Do NOT touch template-specific classes yet

#### **Step 2: Header Only**
- Convert header.php classes to Tailwind
- Leave footer.php and content sections unchanged
- Test header functionality

#### **Step 3: Footer Only**  
- Convert footer.php classes to Tailwind
- Leave content sections unchanged
- Test footer functionality

#### **Step 4: Homepage Sections (One by One)**
- Convert hero section classes
- Test hero section
- Convert services section classes  
- Test services section
- Continue section by section...

#### **Step 5: Template Parts (Individual)**
- Convert one template-part file at a time
- Test each template part individually
- Ensure JavaScript still works (FAQ)

---

## 🚨 CRITICAL SUCCESS FACTORS

### **Must Maintain During Conversion:**
1. ✅ **Site always functional** - never completely broken
2. ✅ **Navigation always works** - users can navigate site
3. ✅ **FAQ JavaScript preserved** - accordion functionality intact
4. ✅ **Mobile responsiveness** - test at each step
5. ✅ **CTA buttons functional** - conversion paths working

### **Testing Requirements:**
- Test after each file conversion
- Test mobile responsiveness at each step
- Test JavaScript functionality (FAQ accordions)
- Test form functionality
- Test navigation on desktop and mobile

---

**Status:** ✅ ANALYSIS COMPLETE - Ready for systematic conversion plan  
**Next Step:** Create detailed conversion plan for Phase 1 Foundation Classes  
**Risk Mitigation:** Convert incrementally, test continuously, maintain functionality