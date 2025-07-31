# Phase 3: Services Architecture - Detailed Planning Document

**Date:** January 20, 2025  
**Project:** CNB Group Consulting WordPress Theme  
**Phase:** Services Architecture Planning  
**Status:** PLANNING (Pre-Development)

---

## 1. DETAILED PHASE 3 PLAN

### Custom Post Type Structure

#### Services Post Type Registration
```php
// Post Type: 'cnb_service'
$args = array(
    'label' => 'Services',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'services'),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
);
```

#### Service Categories Taxonomy
```php
// Taxonomy: 'service_category'
$categories = array(
    'Company Formation' => ['US Company Formation', 'EIN Service', 'ITIN Service', 'US Registered Agent'],
    'Compliance & Tax' => ['US Tax Filing Return', 'BOI Filing', 'USA Company Dissolution'],
    'Business Registration' => ['DUNS Number', 'US E-commerce Business Registration', 'US Lease Agreement'],
    'Marketplace Setup' => ['Amazon Seller Account', 'Walmart Seller Account', 'US Resale Certificate']
);
```

### Meta Box Fields for Each Service

#### 1. Service Details Meta Box
- **Service Price Basic** (text field)
- **Service Price Standard** (text field) 
- **Service Price Premium** (text field)
- **Processing Time** (text field)
- **Success Rate** (text field)
- **Guarantee Period** (text field)

#### 2. Pricing Packages Meta Box
- **Package 1 Name** (text field)
- **Package 1 Price** (text field)
- **Package 1 Features** (textarea - repeatable field)
- **Package 2 Name** (text field)
- **Package 2 Price** (text field)
- **Package 2 Features** (textarea - repeatable field)
- **Package 3 Name** (text field)
- **Package 3 Price** (text field)
- **Package 3 Features** (textarea - repeatable field)

#### 3. Process Steps Meta Box
- **Step Number** (number field)
- **Step Title** (text field)
- **Step Description** (textarea)
- **Step Duration** (text field)
- **Step Icon** (media upload field)
*(Repeatable group for up to 6 steps)*

#### 4. Service FAQ Meta Box
- **FAQ Question** (text field)
- **FAQ Answer** (textarea with TinyMCE)
*(Repeatable group for up to 8 FAQs)*

#### 5. Service Benefits Meta Box
- **Benefit Title** (text field)
- **Benefit Description** (textarea)
- **Benefit Icon** (media upload field)
*(Repeatable group for up to 6 benefits)*

#### 6. Call-to-Action Meta Box
- **Primary CTA Text** (text field)
- **Primary CTA Link** (URL field)
- **Secondary CTA Text** (text field)
- **Secondary CTA Link** (URL field)
- **Contact Phone** (text field)
- **WhatsApp Number** (text field)

### Template Files to Create

#### 1. single-service.php
- Hero section with service title and value proposition
- Pricing packages display (3-column layout)
- Process steps with visual timeline
- Benefits grid (2x3 layout)
- FAQ accordion section
- Testimonials (service-specific if available)
- Final CTA section with guarantee

#### 2. archive-service.php (Services Overview Page)
- Hero section for services overview
- Service category navigation
- Service cards grid (4x3 layout for 13 services)
- Filter/search functionality
- Contact section

#### 3. taxonomy-service_category.php
- Category-specific service listings
- Category description
- Related services within category
- Category-specific testimonials

#### 4. Template Parts to Create
- `template-parts/service-pricing.php` - Pricing table component
- `template-parts/service-process.php` - Process steps timeline
- `template-parts/service-benefits.php` - Benefits grid
- `template-parts/service-faq.php` - FAQ accordion
- `template-parts/service-cta.php` - Service-specific CTA

### Admin Interface Design

#### Services Management Screen
- **List View:** Title, Category, Price Range, Status, Date
- **Quick Edit:** Price, Category, Status
- **Bulk Actions:** Change category, update status
- **Filters:** By category, by status, by date

#### Service Edit Screen Layout
```
┌─────────────────────────────────────────────────────────────┐
│ Service Title: [U.S. Company Formation                    ] │
│ ┌─────────────────┐ ┌─────────────────┐ ┌─────────────────┐ │
│ │ Service Details │ │ Pricing Packages│ │ Process Steps   │ │
│ │ Meta Box        │ │ Meta Box        │ │ Meta Box        │ │
│ └─────────────────┘ └─────────────────┘ └─────────────────┘ │
│ ┌─────────────────┐ ┌─────────────────┐ ┌─────────────────┐ │
│ │ Service FAQ     │ │ Service Benefits│ │ Call-to-Action  │ │
│ │ Meta Box        │ │ Meta Box        │ │ Meta Box        │ │
│ └─────────────────┘ └─────────────────┘ └─────────────────┘ │
│ Content Editor (Main Description)                           │
│ ┌─────────────────────────────────────────────────────────┐ │
│ │ [Rich text editor for service description]              │ │
│ └─────────────────────────────────────────────────────────┘ │
└─────────────────────────────────────────────────────────────┘
```

---

## 2. TECHNICAL APPROACH

### 13 Services Data Structure

#### Service Data Organization
Each service will be stored as a custom post with:
- **Post Content:** Main service description (rich text)
- **Meta Fields:** Structured data (pricing, process, FAQ, etc.)
- **Taxonomy:** Service category for grouping
- **Featured Image:** Service hero image
- **Excerpt:** Short description for cards

#### Services List (13 Total):
1. **U.S. Company Formation** (Company Formation)
2. **EIN Service** (Company Formation)
3. **ITIN Service** (Company Formation)
4. **US Registered Agent** (Company Formation)
5. **US Tax Filing Return** (Compliance & Tax)
6. **DUNS Number** (Business Registration)
7. **BOI Filing** (Compliance & Tax)
8. **USA Company Dissolution** (Compliance & Tax)
9. **Amazon Seller Account** (Marketplace Setup)
10. **Walmart Seller Account** (Marketplace Setup)
11. **US Resale Certificate** (Marketplace Setup)
12. **US E-commerce Business Registration** (Business Registration)
13. **US Lease Agreement** (Business Registration)

### Pricing Table System

#### Three-Tier Pricing Structure
```php
// Pricing data structure for each service
$pricing_structure = array(
    'basic' => array(
        'name' => 'Basic Package',
        'price' => '$299',
        'features' => array(
            'Company formation documents',
            'Basic compliance review',
            '30-day email support'
        ),
        'processing_time' => '5-7 business days',
        'popular' => false
    ),
    'standard' => array(
        'name' => 'Standard Package', 
        'price' => '$499',
        'features' => array(
            'Complete company formation',
            'EIN acquisition included',
            'Compliance documentation',
            '60-day priority support',
            'Free registered agent (1 year)'
        ),
        'processing_time' => '3-5 business days',
        'popular' => true
    ),
    'premium' => array(
        'name' => 'Premium Package',
        'price' => '$799',
        'features' => array(
            'Full-service formation',
            'All compliance documents',
            'Priority processing',
            '90-day dedicated support',
            'Free registered agent (2 years)',
            'Business bank account setup',
            'Tax optimization consultation'
        ),
        'processing_time' => '1-3 business days',
        'popular' => false
    )
);
```

### FAQ System for Each Service

#### FAQ Data Structure
```php
// FAQ structure per service
$faq_structure = array(
    array(
        'question' => 'How long does the formation process take?',
        'answer' => 'The standard processing time is 3-5 business days...',
        'order' => 1
    ),
    array(
        'question' => 'What documents will I receive?',
        'answer' => 'You will receive all official formation documents...',
        'order' => 2
    )
    // Up to 8 FAQs per service
);
```

#### FAQ Display Features
- Accordion-style display (matching homepage FAQ)
- Search functionality within FAQs
- Related questions suggestions
- Easy admin management with TinyMCE editor

### Process Steps for Each Service

#### Process Timeline Structure
```php
// Process steps data structure
$process_steps = array(
    array(
        'step_number' => 1,
        'title' => 'Information Collection',
        'description' => 'We gather all required information...',
        'duration' => '1 day',
        'icon' => 'icon-document.svg'
    ),
    array(
        'step_number' => 2,
        'title' => 'Document Preparation',
        'description' => 'Our experts prepare all formation documents...',
        'duration' => '1-2 days',
        'icon' => 'icon-preparation.svg'
    )
    // Up to 6 steps per service
);
```

#### Visual Timeline Features
- Horizontal timeline with connecting lines
- Step icons and progress indicators
- Responsive design for mobile
- Duration estimates for each step

---

## 3. TIMELINE ESTIMATE

### Based on 90% Efficiency Gains from Phases 1-2

**Original Estimate:** 3-4 days (24-32 hours)  
**Revised Estimate:** 8-12 hours (1-1.5 days)  
**Confidence Level:** High (based on established component architecture)

### Detailed Task Breakdown

#### Day 1 (6-8 hours):
1. **Custom Post Type Setup** (2 hours)
   - Register services post type
   - Create service categories taxonomy
   - Test registration and basic functionality

2. **Meta Boxes Development** (3-4 hours)
   - Service details meta box
   - Pricing packages meta box (repeatable fields)
   - Process steps meta box (repeatable fields)
   - Basic save/retrieve functionality

3. **Single Service Template** (2 hours)
   - Create single-service.php
   - Basic layout with meta field integration
   - Hero section and pricing display

#### Day 2 (2-4 hours):
1. **Advanced Meta Boxes** (1-2 hours)
   - FAQ meta box (repeatable fields)
   - Benefits meta box
   - CTA meta box

2. **Template Completion** (1-2 hours)
   - Complete single-service.php styling
   - Create archive-service.php
   - Template parts creation

### Risk Assessment: LOW
- Foundation architecture already established
- Component library ready for reuse
- No database migration issues (new post type)
- CSS framework supports all needed components

---

## 4. QUESTIONS/CLARIFICATIONS NEEDED

### Technical Clarifications

#### 1. Service Content Strategy
**Question:** Should we populate all 13 services with real content during Phase 3, or create the structure with placeholder content first?

**Options:**
- **A)** Create structure + populate 2-3 services as examples
- **B)** Create structure only with comprehensive placeholders  
- **C)** Populate all 13 services immediately

**Recommendation:** Option A - Structure + 2-3 examples for immediate testing

#### 2. Pricing Consistency
**Question:** Should all services follow the same 3-tier pricing structure, or allow flexible pricing models?

**Current Assumption:** All services use Basic/Standard/Premium structure  
**Alternative:** Flexible pricing (some services might have different tiers)

#### 3. Admin User Experience
**Question:** How technical will the admin users be? This affects meta box complexity.

**Options:**
- **Simple:** Basic text fields with clear labels
- **Advanced:** Rich meta boxes with conditional fields
- **Flexible:** Both simple and advanced interfaces

**Recommendation:** Simple approach with rich preview

#### 4. Service Categories Display
**Question:** Should service categories be displayed as:
- **A)** Separate archive pages (taxonomy-service_category.php)
- **B)** Filtered main services page
- **C)** Both options available

**Recommendation:** Option C for maximum flexibility

### Design Decisions Needing Approval

#### 1. Service Page Layout Priority
Based on businessglobalizer.com analysis, which sections are most important?

**Proposed Priority Order:**
1. Hero with value proposition
2. Pricing packages (most important for conversion)
3. Process steps (builds trust)
4. Benefits grid
5. FAQ section
6. Final CTA

**Question:** Does this priority order match your conversion goals?

#### 2. Mobile Responsiveness for Service Pages
**Question:** How should complex pricing tables display on mobile?

**Options:**
- **A)** Horizontal scroll tables
- **B)** Stacked card layout
- **C)** Accordion-style pricing

**Recommendation:** Option B (stacked cards) for better mobile UX

#### 3. Service Interconnections
**Question:** Should services link to related services?

**Example:** US Company Formation → EIN Service → US Tax Filing Return

**Options:**
- **A)** Related services widget in sidebar
- **B)** "Next recommended service" section
- **C)** Service bundles/packages
- **D)** No interconnections

**Recommendation:** Option B for improved user journey

### Content Strategy Questions

#### 1. FAQ Standardization
**Question:** Should there be:
- **A)** Global FAQs that appear on all service pages
- **B)** Service-specific FAQs only
- **C)** Combination of both

**Recommendation:** Option C - Core global FAQs + service-specific ones

#### 2. Testimonials Integration
**Question:** Should testimonials be:
- **A)** Service-specific testimonials
- **B)** General company testimonials on all pages
- **C)** Mixed approach

**Current Status:** Homepage has general testimonials  
**Recommendation:** Service-specific testimonials for better relevance

#### 3. Service Images/Icons
**Question:** What visual approach for service representation?
- **A)** Professional stock photos
- **B)** Custom icons/illustrations
- **C)** Combination approach

**Current Status:** Homepage uses emoji icons (working well)  
**Recommendation:** Consistent icon system with optional hero images

---

## NEXT STEPS

### Immediate Actions Required:
1. **Review and approve this Phase 3 plan**
2. **Answer clarification questions above**
3. **Confirm timeline and approach**
4. **Approve proceeding with development**

### Upon Approval:
1. Begin with custom post type registration
2. Create meta boxes with test data
3. Build single-service.php template
4. Test with 2-3 example services
5. Refine based on initial results

---

**Planning Complete - Awaiting Approval to Proceed** 🚀