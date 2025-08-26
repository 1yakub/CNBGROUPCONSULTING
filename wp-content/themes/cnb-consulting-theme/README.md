# CNB Consulting Theme

Custom WordPress theme for CNB Group Consulting business services website.

## Theme Information

- **Theme Name**: CNB Consulting Theme
- **Version**: 1.0.0
- **Requires WordPress**: 5.0+
- **Requires PHP**: 7.4+
- **License**: GPL v2 or later

## Features

### 🎨 Modern Design Stack
- Tailwind CSS 3.3.3 for utility-first styling
- Alpine.js 3.12.1 for lightweight interactivity
- Vite 4.4.5 for fast builds and HMR

### 📄 Page Templates (17)
Service pages for:
- Company Formation
- Tax Filing
- Amazon/Walmart Seller
- BOI Filing
- EIN/ITIN Services
- And more...

### 🧩 Components
- Responsive FAQ accordion
- Contact forms
- Service cards
- Pricing tables
- Hero sections with CTAs

### ⚡ Performance
- Optimized build: 52KB CSS + 44KB JS
- 7-second build time
- No jQuery dependency
- Lazy-loaded images

## Quick Start

```bash
# Install dependencies
npm install

# Development (with hot reload)
npm run dev

# Production build
npm run build:dev
```

## Template Structure

Each service page follows this pattern:

```
page-[service].php
    └── Loads template-parts/[service]/
        ├── hero.php          # Hero section
        ├── services.php      # Service details
        ├── packages.php      # Pricing options
        ├── benefits.php      # Key benefits
        └── cta.php          # Call-to-action
```

## Customization

### Colors (Tailwind Config)
- Primary: `#1a365d` (cnb-primary)
- Secondary: `#fbbf24` (cnb-secondary)
- Dark: `#111827` (cnb-dark)

### Fonts
Using system font stack for optimal performance.

### Components
All components use Tailwind utilities - no custom CSS needed.

## Development Notes

- See `CLAUDE.md` in this directory for AI assistant context
- Parent project docs in root `/README.md`
- All styling via Tailwind utilities
- Contact forms need security improvements (nonce/sanitization)

## Support

For theme-specific issues, check:
1. Console for JavaScript errors
2. `npm run build:dev` output for build issues
3. Tailwind docs for utility classes
4. Alpine.js docs for x-data components