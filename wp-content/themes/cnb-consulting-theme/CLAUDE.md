# CNB Consulting Theme - Development Guide

This file provides guidance for working with the CNB Group Consulting WordPress theme.

## Theme Overview

Custom WordPress theme for CNB Group Consulting with modern build system using Vite, Tailwind CSS, and Alpine.js.

## Build System

- **Bundler**: Vite 4.4.5
- **CSS Framework**: Tailwind CSS 3.3.3
- **JavaScript Framework**: Alpine.js 3.12.1
- **Package Manager**: npm

## Build Commands

### Install Dependencies
```bash
npm install
```

### Development Server (with hot reload)
```bash
npm run dev
```

### Build for Production
```bash
npm run build:dev
```
*Note: Use `build:dev` instead of `build` on Windows to avoid NODE_ENV issues*

### Build CSS Only
```bash
npm run css:build
```

### Watch CSS Changes
```bash
npm run css:watch
```

### Clean Build Directory
```bash
npm run clean
```

## File Structure

```
cnb-consulting-theme/
├── assets/
│   ├── css/           # Compiled CSS files
│   └── js/            # JavaScript files
├── dist/              # Built assets (generated)
│   ├── css/
│   ├── js/
│   └── manifest.json
├── inc/               # PHP includes
├── src/               # Source files
│   ├── css/
│   ├── main.js
│   └── style.css
├── template-parts/    # Reusable template components
├── package.json       # Dependencies and scripts
├── tailwind.config.js # Tailwind configuration
├── vite.config.js     # Vite build configuration
└── *.php             # WordPress template files
```

## Development Guidelines

### CSS Development
- **ALWAYS use Tailwind CSS classes** - NEVER write custom CSS
- Maximum 100 lines total in custom.css file
- Use Tailwind utilities for all styling
- Follow mobile-first responsive design

### JavaScript Development
- Use Alpine.js for interactive components
- Keep JavaScript minimal and functional
- Follow WordPress coding standards

### PHP Development
- Follow WordPress coding standards
- Use standard WordPress functions only
- Test templates immediately after creation
- Ensure mobile responsiveness

## Theme Features

### Completed Features
- ✅ Premium button hover effects with Tailwind utilities
- ✅ FAQ accordion functionality
- ✅ Responsive design across all pages
- ✅ Modern build system with Vite
- ✅ Tailwind CSS integration
- ✅ Alpine.js components

### Build Output
- **CSS**: ~72KB minified (~11KB gzipped)
- **JavaScript**: ~44KB minified (~16KB gzipped)
- **Build time**: ~13 seconds

## Quality Standards

- Working code > impressive code
- Use proven libraries and WordPress standards
- Avoid overengineering
- Focus on businessglobalizer.com patterns
- Reject bloated or complex solutions

## Troubleshooting

### Common Issues
1. **NODE_ENV errors on Windows**: Use `npm run build:dev` instead of `npm run build`
2. **CSS not updating**: Run `npm run css:build` to rebuild Tailwind CSS
3. **JavaScript errors**: Check console and ensure Alpine.js is loaded

### Build Verification
After building, verify these files exist:
- `dist/css/style.css`
- `dist/js/main.js`
- `dist/manifest.json`

## Dependencies

### Production Dependencies
- `alpinejs`: ^3.12.1
- `@heroicons/react`: ^2.2.0

### Development Dependencies
- `vite`: ^4.4.5
- `tailwindcss`: ^3.3.3
- `@tailwindcss/forms`: ^0.5.4
- `@tailwindcss/typography`: ^0.5.16
- `@alpinejs/collapse`: ^3.14.9
- `autoprefixer`: ^10.4.14
- `postcss`: ^8.4.24
- `cssnano`: ^6.0.1
- `tailwind-scrollbar`: ^3.1.0