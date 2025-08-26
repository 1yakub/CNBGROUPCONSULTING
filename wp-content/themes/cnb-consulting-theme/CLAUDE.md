# CNB Theme - Context for Claude

This file provides theme-specific context when working in the theme directory.
For WordPress/project setup, see root CLAUDE.md.

## Theme Build Commands

When working in this directory, use these commands directly:

```bash
npm install           # Install dependencies
npm run dev          # Dev server with hot reload
npm run build:dev    # Production build
npm run css:build    # Rebuild CSS only
```

## Theme File Structure

```
├── src/             # Source files
│   ├── css/
│   │   └── main.css     # Tailwind components (106 lines)
│   ├── style.css        # More Tailwind components (109 lines)
│   └── main.js          # Alpine.js initialization
├── dist/            # Built assets (52KB CSS, 44KB JS)
├── inc/             # PHP functionality
│   ├── core/            # Theme setup, assets, security
│   ├── functions/       # Helper functions
│   ├── admin/           # Admin functionality
│   └── customizer/      # Customizer options
├── template-parts/  # Reusable components
│   └── [service]/       # Service-specific partials
└── page-*.php       # Page templates (17 files)
```

## Component Patterns

### Alpine.js Components
- FAQ accordion: `x-data="faqSystem"`
- Mobile menu: `x-data="{ mobileMenuOpen: false }"`
- Dropdowns: `x-show` with `x-collapse`

### Tailwind Patterns
- Responsive: `sm:`, `md:`, `lg:`, `xl:` breakpoints
- Forms: Focus states with `focus:ring-2 focus:ring-cnb-primary`
- Cards: `bg-white rounded-lg shadow-lg hover:shadow-xl`

## Template Hierarchy

```
page-[service].php → template-parts/[service]/
                     ├── hero.php
                     ├── services.php
                     ├── packages.php
                     ├── benefits.php
                     └── cta.php
```

## PHP Helpers Available

```php
cnb_get_company_name()     # Returns company name
cnb_get_company_phone()    # Returns phone number
cnb_get_faqs($category)    # Get FAQs by category
cnb_output_faq_schema()    # Output FAQ schema markup
```

## Important Notes

- All CSS uses Tailwind utilities (no custom CSS)
- Contact forms need WordPress nonce/sanitization (TODO)
- Image helpers in `inc/image-helpers/`
- Schema markup via `inc/functions/schema-seo.php`