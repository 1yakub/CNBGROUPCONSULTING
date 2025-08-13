# CNB Group Consulting - WordPress Website

A modern WordPress website for CNB Group Consulting built with a custom theme using Vite, Tailwind CSS, and Alpine.js.

## Project Overview

This is a professional WordPress installation for CNB Group Consulting, featuring a custom theme with modern build tools and responsive design. The site runs on a WAMP64 development environment with comprehensive business services pages.

## Technology Stack

- **CMS**: WordPress (latest version)
- **Theme**: Custom `cnb-consulting-theme`
- **CSS Framework**: Tailwind CSS 3.3.3
- **JavaScript**: Alpine.js 3.12.1
- **Build Tool**: Vite 4.4.5
- **Development Environment**: WAMP64 (Windows, Apache, MySQL, PHP)

## Quick Start

### Prerequisites
- WAMP64 server running (Apache + MySQL)
- Node.js and npm installed

### Development Setup

1. **Start WAMP Services**
   ```
   Ensure Apache and MySQL are running in WAMP64
   ```

2. **Install Theme Dependencies**
   ```bash
   pushd "wp-content\themes\cnb-consulting-theme" && npm install && popd
   ```

3. **Build Assets**
   ```bash
   pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd
   ```

4. **Access Site**
   - Website: `http://localhost/CNBGROUPCONSULTING`
   - Admin: `http://localhost/CNBGROUPCONSULTING/wp-admin`

## Theme Development

The custom theme includes:
- ✅ Premium button hover effects
- ✅ Responsive FAQ accordion
- ✅ Mobile-first design
- ✅ Modern build system
- ✅ Tailwind CSS utilities
- ✅ Alpine.js components

### Build Commands

```bash
# Install dependencies
pushd "wp-content\themes\cnb-consulting-theme" && npm install && popd

# Development build
pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd

# CSS compilation
pushd "wp-content\themes\cnb-consulting-theme" && npm run css:build && popd

# Development server with hot reload
pushd "wp-content\themes\cnb-consulting-theme" && npm run dev && popd
```

## Site Architecture

### Pages Structure
- **Homepage**: Modern business landing page
- **Services Pages**: 13 specialized business services
- **Business Pages**: About, Contact, FAQ, Privacy Policy
- **Legal Pages**: Terms, Privacy, Compliance information

### Key Features
- Responsive design across all devices
- Modern UI with Tailwind CSS
- Interactive components with Alpine.js
- Fast loading times with Vite optimization
- SEO-friendly structure

## Database Configuration

- **Database Name**: cnbgroupconsulting
- **Database User**: root  
- **Database Password**: (empty)
- **Database Host**: localhost
- **Table Prefix**: cnb_

## Development Guidelines

- Use Tailwind CSS classes exclusively (no custom CSS except brand colors)
- Follow WordPress coding standards
- Test all templates for mobile responsiveness
- Keep solutions simple and functional
- Use proven libraries over custom implementations

## File Structure

```
CNBGROUPCONSULTING/
├── wp-content/
│   └── themes/
│       └── cnb-consulting-theme/        # Active custom theme
│           ├── assets/                  # Static assets
│           ├── dist/                    # Built assets
│           ├── inc/                     # PHP includes
│           ├── src/                     # Source files
│           ├── template-parts/          # Reusable components
│           ├── package.json             # Build configuration
│           ├── tailwind.config.js       # Tailwind setup
│           └── CLAUDE.md                # Theme documentation
├── CLAUDE.md                           # Project documentation
└── [WordPress core files]
```

## Build Output

- **CSS**: ~72KB minified (~11KB gzipped)
- **JavaScript**: ~44KB minified (~16KB gzipped)  
- **Build Time**: ~13 seconds

## Contributing

1. Follow WordPress coding standards
2. Use Tailwind CSS for all styling
3. Test changes in local WAMP environment
4. Ensure mobile responsiveness
5. Keep code simple and maintainable

## License

GPL-2.0-or-later (WordPress compatible)