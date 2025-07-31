# Image Requirements for CNB Group Consulting

## Current Implementation
✅ **Using Unsplash URLs** - Professional stock images with proper licensing
✅ **Heroicons** - Clean, professional icon library 
✅ **Pure Tailwind** - No custom CSS bloat
✅ **Maintainable structure** - All under 200 lines per file

## Images Currently Used

### 1. Hero Section Background
- **URL**: `https://images.unsplash.com/photo-1560472354-b33ff0c44a43`
- **Description**: Professional office meeting/consultation scene
- **Dimensions**: 1926x1080px
- **Usage**: Hero section background with overlay
- **Keywords**: business consultation, office meeting, professional

### 2. Rate Request Form Background
- **URL**: `https://images.unsplash.com/photo-1497366216548-37526070297c`
- **Description**: Modern office workspace
- **Dimensions**: 1469x1080px  
- **Usage**: Form section background (subtle, low opacity)
- **Keywords**: office workspace, modern, professional

## Download Instructions

### Option 1: Keep Current Unsplash URLs (Recommended)
- ✅ **Professional quality**
- ✅ **Proper licensing** 
- ✅ **No download required**
- ✅ **Automatically optimized**

### Option 2: Download and Host Locally
If you prefer to host images locally:

1. **Hero Background Image**
   ```
   Download: https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1926&q=80
   Save as: wp-content/themes/cnb-consulting-theme/assets/images/hero-bg.jpg
   ```

2. **Form Background Image**
   ```
   Download: https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1469&q=80
   Save as: wp-content/themes/cnb-consulting-theme/assets/images/form-bg.jpg
   ```

Then update the CSS classes:
- Hero: Change `bg-[url('https://...')]` to `bg-[url('./assets/images/hero-bg.jpg')]`
- Form: Change `bg-[url('https://...')]` to `bg-[url('./assets/images/form-bg.jpg')]`

## Alternative Image Sources

### Business Consultation Images
**Unsplash search terms:**
- "business meeting"
- "office consultation"
- "professional handshake"
- "business planning"
- "startup meeting"

**Recommended photographers:**
- Austin Distel
- Amy Hirschi
- Campaign Creators

### Office/Workspace Images
**Unsplash search terms:**
- "modern office"
- "workspace"
- "business environment"
- "corporate office"

## Icon System

### Heroicons Usage
All icons use **Heroicons v2** - the official icon library by Tailwind creators:

**Icons currently used:**
- `shield-check` - Trust/security indicators
- `check` - Checkmarks for benefits lists
- `arrow-right` - Call-to-action arrows
- `paper-airplane` - Form submission
- `clock` - Time-related info
- `check-circle` - Success indicators
- `globe` - International services
- `phone` - Contact information

**Benefits:**
- ✅ Designed specifically for Tailwind
- ✅ Perfect pixel alignment
- ✅ Consistent stroke width
- ✅ Accessible by default
- ✅ No external dependencies

## Performance Notes

### Current Setup
- **Background images**: Lazy-loaded via CSS
- **Image optimization**: Automatic via Unsplash
- **File sizes**: Optimized for web delivery
- **Loading**: Progressive enhancement

### Best Practices Followed
- ✅ **WebP support** via Unsplash URLs
- ✅ **Responsive images** with proper sizing
- ✅ **Lazy loading** for background images
- ✅ **Proper alt text** for accessibility
- ✅ **CDN delivery** via Unsplash

## Customization Guide

### To Change Hero Background
Edit `template-parts/hero-section.php` line 16:
```php
<div class="absolute inset-0 bg-[url('YOUR_NEW_IMAGE_URL')] bg-cover bg-center opacity-20"></div>
```

### To Change Form Background
Edit `template-parts/rate-request-form.php` line 11:
```php
<div class="absolute inset-0 bg-[url('YOUR_NEW_IMAGE_URL')] bg-cover bg-center opacity-5"></div>
```

### To Add New Background Images
Follow this pattern:
```html
<section class="relative">
    <div class="absolute inset-0 bg-[url('IMAGE_URL')] bg-cover bg-center opacity-LEVEL"></div>
    <div class="relative z-10">
        <!-- Content here -->
    </div>
</section>
```

## WordPress Integration

### Image Helper Functions
The `inc/image-helpers.php` file provides:
- Centralized image management
- Easy URL updates
- Fallback placeholder system
- Development-friendly helpers

### Theme Integration
All images are properly integrated with:
- WordPress escaping functions
- Template hierarchy
- Responsive design system
- Performance optimization

## Maintenance

### Regular Updates
- Check image URLs quarterly
- Update to higher resolution if needed
- Monitor loading performance
- Replace if original becomes unavailable

### Backup Strategy
- Keep local copies of key images
- Document original sources
- Maintain multiple size variants
- Test with different internet speeds

This setup provides professional imagery without bloat, using industry-standard tools and best practices.