# CNB Group Consulting - Theme Architecture

## PROPOSED FILE STRUCTURE

### Theme Directory Structure:
```
wp-content/themes/cnb-consulting-theme/
├── style.css                    # Theme information and main styles
├── index.php                    # Main template fallback
├── functions.php                # Theme functions and enqueues
├── header.php                   # Site header
├── footer.php                   # Site footer
├── front-page.php              # Homepage template
├── page.php                     # Default page template
├── page-services.php           # Services overview page
├── single-service.php          # Individual service landing pages
├── 404.php                     # Error page
├── search.php                  # Search results
├── searchform.php              # Search form
├── 
├── assets/
│   ├── css/
│   │   ├── main.css            # Main styles
│   │   ├── components.css      # Component styles
│   │   └── responsive.css      # Mobile responsiveness
│   ├── js/
│   │   ├── main.js            # Main JavaScript
│   │   ├── navigation.js      # Navigation interactions
│   │   └── contact-forms.js   # Form handling
│   └── images/
│       ├── logo.png           # Site logo
│       ├── hero-bg.jpg        # Hero background
│       └── icons/             # Service icons
│
├── template-parts/
│   ├── hero-section.php       # Reusable hero component
│   ├── service-card.php       # Service overview cards
│   ├── pricing-table.php     # Pricing display component
│   ├── testimonials.php      # Testimonials section
│   ├── cta-section.php       # Call-to-action sections
│   ├── contact-form.php      # Contact form component
│   └── navigation/
│       ├── main-nav.php      # Main navigation
│       └── mobile-nav.php    # Mobile navigation
│
├── inc/
│   ├── customizer.php         # WordPress Customizer options
│   ├── post-types.php         # Custom post types (services)
│   ├── meta-boxes.php         # Custom fields for services
│   ├── template-functions.php # Helper functions
│   └── enqueue-scripts.php    # Script/style enqueueing
│
└── languages/                 # Translation files
    └── cnb-consulting-theme.pot
```

## COMPONENT-BASED ARCHITECTURE

### Core Components:

**Header Component (header.php)**
- Site logo
- Main navigation
- Contact information
- Mobile menu toggle

**Footer Component (footer.php)**
- Company information
- Service links
- Contact details
- Social media links
- Copyright

**Hero Section (template-parts/hero-section.php)**
- Reusable hero component
- Customizable headlines
- CTA buttons
- Background image support

**Service Card (template-parts/service-card.php)**
- Service overview display
- Consistent styling
- CTA integration
- Icon support

**Pricing Table (template-parts/pricing-table.php)**
- Package comparison
- Feature lists
- Pricing display
- CTA buttons

**Testimonials (template-parts/testimonials.php)**
- Client testimonials
- Star ratings
- Client photos
- Carousel functionality

**CTA Section (template-parts/cta-section.php)**
- Call-to-action blocks
- Newsletter signup
- Contact forms
- Conversion optimization

## CUSTOM POST TYPES

### Services Post Type
**Purpose:** Manage the 13 service landing pages

**Custom Fields (Meta Boxes):**
- Service pricing (multiple packages)
- Process steps (repeatable field)
- Benefits list (repeatable field)
- FAQ content (repeatable Q&A)
- CTA text and links
- Service category
- Featured image
- Gallery images
- Service icon

**Template Hierarchy:**
- single-service.php (individual service pages)
- archive-service.php (services overview)
- taxonomy-service-category.php (service categories)

## WORDPRESS INTEGRATION

### Theme Support Features:
- Post thumbnails
- Custom menus
- Custom logo
- HTML5 markup
- Responsive embeds
- Editor styles
- Custom background
- Custom colors

### Customizer Options:
- Site identity (logo, colors, tagline)
- Header settings
- Footer settings
- Contact information
- Social media links
- Homepage sections

### Navigation Menus:
- Primary navigation (main menu)
- Footer navigation
- Services menu (dropdown)
- Mobile navigation

## RESPONSIVE DESIGN ARCHITECTURE

### Breakpoints:
- Mobile: 320px - 767px
- Tablet: 768px - 1023px
- Desktop: 1024px - 1199px
- Large Desktop: 1200px+

### CSS Architecture:
```
assets/css/
├── main.css           # Variables, reset, base styles
├── components.css     # Component-specific styles
└── responsive.css     # Media queries and responsive adjustments
```

### JavaScript Architecture:
```
assets/js/
├── main.js           # Core functionality, DOM ready
├── navigation.js     # Menu interactions, mobile nav
└── contact-forms.js  # Form validation, AJAX submissions
```

## DEVELOPMENT WORKFLOW

### Phase 1 Files:
- style.css (theme header)
- functions.php (basic setup)
- index.php (fallback template)
- header.php
- footer.php
- assets/css/main.css
- inc/enqueue-scripts.php

### Phase 2 Files:
- front-page.php
- template-parts/hero-section.php
- template-parts/service-card.php
- template-parts/testimonials.php
- template-parts/cta-section.php

### Phase 3 Files:
- inc/post-types.php
- inc/meta-boxes.php
- single-service.php
- page-services.php
- template-parts/pricing-table.php

### Phase 4-6 Files:
- Remaining template parts
- JavaScript functionality
- Advanced customizer options
- Performance optimizations

## BEST PRACTICES IMPLEMENTED

### WordPress Standards:
- Proper template hierarchy
- Security best practices (sanitization, validation)
- Accessibility compliance
- SEO optimization
- Performance optimization

### Code Organization:
- Modular component structure
- Consistent naming conventions
- Comprehensive commenting
- Version control ready
- Translation ready

### Maintenance Considerations:
- Easy content management
- Admin-friendly interfaces
- Documentation included
- Scalable architecture
- Future-proof structure