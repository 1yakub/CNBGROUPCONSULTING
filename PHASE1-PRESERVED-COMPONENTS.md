# PHASE 1: PRESERVED COMPONENTS DOCUMENTATION

**Date:** Phase 1 Clean Slate Preparation  
**Purpose:** Document what functionality to preserve during Tailwind CSS migration

---

## ✅ PRESERVE THESE COMPONENTS

### **PHP Core Files (Keep 100%)**
```
├── functions.php              # WordPress theme setup and enqueuing
├── header.php                 # Site header structure  
├── footer.php                 # Site footer structure
├── front-page.php             # Homepage template
├── index.php                  # Fallback template
├── style.css                  # Theme header information only
└── single-cnb_service.php     # Service template (will be replaced)
```

### **WordPress Integration (Keep 100%)**
```
inc/
├── customizer.php             # WordPress customizer integration
├── template-functions.php     # Helper functions & contact info
├── post-types.php             # Custom post types (may be simplified)
└── meta-boxes.php             # Admin interface (may be simplified)
```

### **Working JavaScript Functionality (Keep & Migrate)**
```
├── FAQ accordion functionality (from service-faq.php)
├── Mobile navigation toggle logic
└── Contact form interactions
```

### **Business Content & Data (Keep 100%)**
```
├── Company contact information
├── Service data structure
├── Navigation menus setup
├── WordPress customizer settings
├── Sample service content
└── Homepage sections content
```

---

## ❌ REMOVE THESE FILES

### **Bloated CSS Files (Delete Completely)**
```
assets/css/
├── main.css                   # 250+ lines - DELETE
├── components.css             # 2000+ lines - DELETE  
└── responsive.css             # 300+ lines - DELETE
```

**Total CSS Reduction:** 2500+ lines → <100 lines (95% reduction)

### **Unused Template Parts (Evaluate for Deletion)**
```
template-parts/
├── hero-section.php           # Replace with Tailwind version
├── services-overview.php      # Replace with Tailwind version
├── stats-section.php          # Replace with Tailwind version
├── testimonials-section.php   # Replace with Tailwind version
├── process-steps.php          # Replace with Tailwind version
├── faq-section.php            # Replace with Tailwind version
├── cta-section.php            # Replace with Tailwind version
├── service-*.php              # Will be integrated into page templates
```

---

## 🔄 FUNCTIONALITY TO MIGRATE

### **FAQ Accordion JavaScript**
**Location:** `template-parts/service-faq.php` lines 62-98
**Status:** ✅ Working functionality - extract and preserve
**Migration Plan:** Move to separate JS file with Tailwind styling

### **Contact Information System**
**Location:** `inc/template-functions.php`
**Functions:** `cnb_get_contact_info()`, `cnb_get_company_info()`
**Status:** ✅ Working functionality - preserve completely

### **WordPress Customizer Integration**
**Location:** `inc/customizer.php`
**Settings:** 15+ company settings
**Status:** ✅ Working functionality - preserve completely

### **Header/Footer Structure**
**Location:** `header.php`, `footer.php`
**Status:** ✅ Working structure - preserve HTML, replace CSS with Tailwind classes

---

## 📋 CONTENT TO PRESERVE

### **Homepage Sections (7 sections)**
1. Hero section with value proposition
2. Services overview with 6 service cards  
3. Company statistics
4. Client testimonials
5. Process steps timeline
6. FAQ accordion
7. Final CTA section

### **Service Template Structure**
- Hero with breadcrumbs and trust indicators
- Benefits grid with hover effects
- Process timeline with visual connectors
- Professional pricing tables with "Popular" badges
- FAQ accordion with JavaScript functionality
- Final CTA section with guarantee and contact options

### **Business Content**
- CNB Group Consulting branding
- Service descriptions and pricing
- Contact information (phone, email, WhatsApp)
- Company statistics and testimonials
- Process explanations and FAQs

---

## 🎯 MIGRATION STRATEGY

### **Phase 1 Approach:**
1. **Backup Complete** ✅ - All current files secured
2. **CSS Deletion** - Remove 2500+ lines of custom CSS
3. **Structure Preservation** - Keep working PHP templates
4. **Content Retention** - Preserve all business content

### **Phase 2 Approach:**
1. **Tailwind Integration** - Replace custom CSS with utility classes
2. **Component Migration** - Convert templates to Tailwind styling
3. **Functionality Testing** - Ensure JavaScript still works
4. **Mobile Responsiveness** - Test Tailwind breakpoints

### **Quality Standards:**
- ✅ Always use Tailwind CSS v3.4 classes - NEVER write custom CSS except brand colors
- ✅ Maximum 100 lines total in custom.css file - everything else must be Tailwind utilities
- ✅ Use standard WordPress functions only - NO custom complex frameworks
- ✅ Keep solutions simple and functional - working code > impressive code

---

## 📊 BEFORE/AFTER COMPARISON

### **Before (Current State):**
- **CSS Files:** 3 files, 2500+ lines
- **Template Structure:** Working but heavy styling
- **Maintenance:** Complex CSS requires expertise
- **Performance:** Large CSS bundle size

### **After (Target State):**
- **CSS Files:** 1 file, <100 lines (brand colors only)
- **Template Structure:** Same functionality, Tailwind styling
- **Maintenance:** Utility-first approach, easy to modify
- **Performance:** 95% smaller CSS bundle via CDN

---

**Status:** Documentation Complete ✅  
**Next Step:** Remove bloated CSS files safely  
**Preserved:** All working functionality and business content