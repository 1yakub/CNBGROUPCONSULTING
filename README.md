# CNB Group Consulting - WordPress Website

WordPress website for CNB Group Consulting with custom theme using Vite, Tailwind CSS, and Alpine.js.

## Quick Start

1. **Start WAMP64** (Apache + MySQL)
2. **Install dependencies**
   ```bash
   pushd "wp-content\themes\cnb-consulting-theme" && npm install && popd
   ```
3. **Build assets**
   ```bash
   pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd
   ```
4. **Access site**
   - Website: `http://localhost/CNBGROUPCONSULTING`
   - Admin: `http://localhost/CNBGROUPCONSULTING/wp-admin`

## Technology Stack

- **WordPress**: Latest version
- **Theme**: cnb-consulting-theme
- **CSS**: Tailwind CSS 3.3.3
- **JavaScript**: Alpine.js 3.12.1
- **Build Tool**: Vite 4.4.5
- **Environment**: WAMP64 (Windows)

## Build Commands

```bash
# Development build
pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd

# Development server with hot reload
pushd "wp-content\themes\cnb-consulting-theme" && npm run dev && popd

# CSS only
pushd "wp-content\themes\cnb-consulting-theme" && npm run css:build && popd
```

## Site Structure

- **Homepage**: Business landing page
- **Service Pages** (13): Company formation, tax filing, business registration services
- **Business Pages** (4): About, Contact, FAQ, Services overview
- **Total**: 18 published pages

## Build Output

- **CSS**: 52KB (8.5KB gzipped)
- **JavaScript**: 44KB (16KB gzipped)
- **Build Time**: ~7 seconds

## Database

- **Name**: cnbgroupconsulting
- **User**: root
- **Password**: (empty)
- **Host**: localhost
- **Prefix**: cnb_

## Development Guidelines

- Use Tailwind CSS utilities exclusively
- Follow WordPress standards
- Test for mobile responsiveness
- Keep code simple and functional

## File Structure

```
CNBGROUPCONSULTING/
├── wp-content/
│   └── themes/
│       └── cnb-consulting-theme/
│           ├── dist/             # Built assets
│           ├── src/              # Source files
│           ├── inc/              # PHP includes
│           ├── template-parts/   # Reusable components
│           └── page-*.php        # Page templates
├── CLAUDE.md                     # Development guide
└── README.md                     # This file
```

## License

GPL-2.0-or-later (WordPress compatible)