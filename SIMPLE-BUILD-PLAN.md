# SIMPLE BUILD SYSTEM - 4 Hour Implementation

## GOAL: Fix CDN dependency quickly and reliably

Replace unreliable Tailwind CDN with local CLI build system. Keep existing CSS, add Alpine.js locally, basic npm scripts. **NO OVERENGINEERING.**

---

## PHASE 1: Remove CDN Dependencies (30 minutes)

### Tasks:
1. **Find and remove CDN links**
   ```bash
   # Search for CDN references
   grep -r "cdn.tailwindcss.com" wp-content/themes/cnb-consulting-theme/
   grep -r "unpkg.com" wp-content/themes/cnb-consulting-theme/
   ```

2. **Backup current state**
   ```bash
   git add .
   git commit -m "Pre-build-system backup"
   ```

3. **Remove CDN script tags** from header.php or functions.php

### Validation:
- [ ] Site loads (may look unstyled temporarily)
- [ ] No console errors from missing CDN

---

## PHASE 2: Setup Local Build System (90 minutes)

### 1. Initialize npm (15 minutes)
```bash
cd wp-content/themes/cnb-consulting-theme
npm init -y
```

### 2. Install minimal dependencies (15 minutes)
```bash
npm install --save-dev tailwindcss@3.4.1 @tailwindcss/forms@0.5.7
npm install alpinejs@3.13.3
```

### 3. Create simple package.json scripts (15 minutes)
```json
{
  "scripts": {
    "build": "tailwindcss -i ./src/css/main.css -o ./assets/css/tailwind.css --minify",
    "watch": "tailwindcss -i ./src/css/main.css -o ./assets/css/tailwind.css --watch"
  }
}
```

### 4. Create source CSS file (15 minutes)
```bash
mkdir -p src/css
```

Create `src/css/main.css`:
```css
@tailwind base;
@tailwind components;
@tailwind utilities;

/* CNB Brand Colors */
:root {
  --cnb-primary: #1e40af;
  --cnb-secondary: #fbbf24;
}

.text-cnb-primary { color: var(--cnb-primary); }
.bg-cnb-primary { background-color: var(--cnb-primary); }
.text-cnb-secondary { color: var(--cnb-secondary); }
.bg-cnb-secondary { background-color: var(--cnb-secondary); }
.border-cnb-primary { border-color: var(--cnb-primary); }
.border-cnb-secondary { border-color: var(--cnb-secondary); }
```

### 5. Update tailwind.config.js (15 minutes)
```javascript
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './assets/js/**/*.js'
  ],
  theme: {
    extend: {
      colors: {
        'cnb-primary': '#1e40af',
        'cnb-secondary': '#fbbf24'
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms')
  ]
}
```

### 6. Build initial CSS (15 minutes)
```bash
npm run build
```

### Validation:
- [ ] `assets/css/tailwind.css` file generated
- [ ] File contains CNB brand colors
- [ ] Build completes without errors

---

## PHASE 3: WordPress Integration (60 minutes)

### 1. Update functions.php (30 minutes)
Find the existing CSS enqueue section and replace with:

```php
function cnb_consulting_enqueue_scripts() {
    // Theme stylesheet
    wp_enqueue_style(
        'cnb-consulting-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Keep existing CSS files
    wp_enqueue_style(
        'cnb-consulting-main',
        get_template_directory_uri() . '/assets/css/main.css',
        array('cnb-consulting-style'),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style(
        'cnb-consulting-components',
        get_template_directory_uri() . '/assets/css/components.css',
        array('cnb-consulting-main'),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style(
        'cnb-consulting-responsive',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array('cnb-consulting-components'),
        wp_get_theme()->get('Version')
    );
    
    // NEW: Local Tailwind CSS
    wp_enqueue_style(
        'cnb-tailwind',
        get_template_directory_uri() . '/assets/css/tailwind.css',
        array('cnb-consulting-responsive'),
        wp_get_theme()->get('Version')
    );
    
    // NEW: Local Alpine.js
    wp_enqueue_script(
        'cnb-alpine',
        get_template_directory_uri() . '/node_modules/alpinejs/dist/cdn.min.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Existing JavaScript files
    wp_enqueue_script(
        'cnb-consulting-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('cnb-alpine'),
        wp_get_theme()->get('Version'),
        true
    );
    
    wp_enqueue_script(
        'cnb-consulting-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array('cnb-consulting-main'),
        wp_get_theme()->get('Version'),
        true
    );
    
    wp_enqueue_script(
        'cnb-consulting-contact-forms',
        get_template_directory_uri() . '/assets/js/contact-forms.js',
        array('cnb-consulting-navigation'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'cnb_consulting_enqueue_scripts');
```

### 2. Test all 28 pages (30 minutes)
Systematically check:
- Homepage
- All 13 service pages
- All 15 business pages

### Validation:
- [ ] All pages load correctly
- [ ] Tailwind classes work (colors, spacing, etc.)
- [ ] Existing CSS still functions
- [ ] No console errors
- [ ] Alpine.js works (check FAQ accordions)

---

## PHASE 4: Production Optimization (60 minutes)

### 1. Create build script with purging (30 minutes)
Update `package.json`:
```json
{
  "scripts": {
    "dev": "tailwindcss -i ./src/css/main.css -o ./assets/css/tailwind.css --watch",
    "build": "tailwindcss -i ./src/css/main.css -o ./assets/css/tailwind.css --minify",
    "build-prod": "NODE_ENV=production tailwindcss -i ./src/css/main.css -o ./assets/css/tailwind.css --minify"
  }
}
```

### 2. Copy Alpine.js to assets (15 minutes)
```bash
mkdir -p assets/js
cp node_modules/alpinejs/dist/cdn.min.js assets/js/alpine.min.js
```

Update functions.php to use local copy:
```php
wp_enqueue_script(
    'cnb-alpine',
    get_template_directory_uri() . '/assets/js/alpine.min.js',
    array(),
    wp_get_theme()->get('Version'),
    true
);
```

### 3. Final testing (15 minutes)
- Build production CSS: `npm run build-prod`
- Test site functionality
- Check file sizes

### Validation:
- [ ] Production CSS file < 100KB
- [ ] Alpine.js loads from local file
- [ ] All 28 pages work perfectly
- [ ] No external dependencies

---

## SUCCESS CRITERIA

### Technical Requirements ✅
- [ ] **Zero External Dependencies**: No CDN links
- [ ] **Local Tailwind Build**: CLI-generated CSS file
- [ ] **Alpine.js Local**: Self-hosted JavaScript
- [ ] **Existing CSS Preserved**: All 3,418 lines maintained
- [ ] **All 28 Pages Working**: Complete functionality
- [ ] **Basic Build Scripts**: dev/build commands

### File Structure After Implementation
```
cnb-consulting-theme/
├── assets/
│   ├── css/
│   │   ├── main.css (existing)
│   │   ├── components.css (existing)
│   │   ├── responsive.css (existing)
│   │   └── tailwind.css (NEW - generated)
│   └── js/
│       ├── main.js (existing)
│       ├── navigation.js (existing)
│       ├── contact-forms.js (existing)
│       └── alpine.min.js (NEW - local copy)
├── src/
│   └── css/
│       └── main.css (NEW - Tailwind source)
├── node_modules/ (NEW)
├── package.json (NEW)
├── tailwind.config.js (existing, updated)
└── [all existing PHP files unchanged]
```

### Performance Expectations
- **CSS Bundle**: Tailwind CSS ~80-120KB (purged)
- **JavaScript**: Alpine.js ~15KB
- **Build Time**: <10 seconds
- **Development**: Watch mode for CSS changes

---

## IMPLEMENTATION TIMELINE

**Total: 4 Hours Maximum**

```
Hour 1: CDN Removal + npm Setup (Phase 1-2)
Hour 2: Build System Configuration (Phase 2 completion)
Hour 3: WordPress Integration (Phase 3)
Hour 4: Testing + Production Optimization (Phase 4)
```

---

## ROLLBACK PLAN

If anything breaks:
```bash
git reset --hard HEAD~1  # Return to pre-build-system state
```

---

## FINAL DELIVERABLE

A **simple, reliable build system** that:
✅ Eliminates CDN dependency risk  
✅ Preserves all existing functionality  
✅ Provides local Tailwind CSS generation  
✅ Includes Alpine.js locally  
✅ Maintains current CSS architecture  
✅ Takes only 4 hours to implement  

**No overengineering. Just a working solution.**