# CLAUDE.md

This file provides guidance to Claude Code when working with this repository.

## Project Overview

WordPress site for CNB Group Consulting with custom theme using Vite, Tailwind CSS, and Alpine.js.

## Environment

- **Platform**: WAMP64 (Windows)
- **Database**: MySQL (cnbgroupconsulting / root / no password)
- **URL**: http://localhost/CNBGROUPCONSULTING
- **Active Theme**: cnb-consulting-theme

## Technical Stack

- **Build Tool**: Vite 4.4.5
- **CSS**: Tailwind CSS 3.3.3
- **JavaScript**: Alpine.js 3.12.1
- **Source CSS**: 215 lines of Tailwind components (using @apply)
- **Built Output**: ~52KB CSS, ~44KB JS
- **Pages**: 18 published

## Build Commands

```bash
# Install dependencies
pushd "wp-content\themes\cnb-consulting-theme" && npm install && popd

# Development build
pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd

# Development server
pushd "wp-content\themes\cnb-consulting-theme" && npm run dev && popd
```

## Key Features

- **Responsive Design**: Tailwind breakpoints (sm:, md:, lg:, xl:) used throughout
- **FAQ Accordion**: Alpine.js x-data system with collapse animations
- **SEO Implementation**: Schema markup via schema-seo.php
- **Mobile-First**: Tailwind CSS mobile-first approach
- **Contact Forms**: HTML forms (TODO: Add WordPress nonce/sanitization for security)

## Development Guidelines

1. Use Tailwind utilities exclusively
2. Use Alpine.js for interactivity
3. Use standard WordPress functions only
4. Keep solutions simple and functional
5. Use established packages, never reinvent

## File Structure

```
wp-content/themes/cnb-consulting-theme/
├── dist/          # Built assets
├── src/           # Source files
│   ├── css/
│   │   └── main.css    # 106 lines Tailwind components
│   └── style.css       # 109 lines Tailwind components
├── inc/           # PHP includes
├── template-parts # Reusable components
└── page-*.php     # Page templates
```

## Important Notes

- Windows: Use `pushd/popd` instead of `cd`
- Theme uses local Tailwind (not CDN)
- All styling uses Tailwind utilities
- FAQ uses Alpine.js x-data system