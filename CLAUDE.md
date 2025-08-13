# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a WordPress installation for CNB Group Consulting, running on a WAMP64 development environment with a local MySQL database. The site uses WordPress core files with standard themes and minimal customization.

## Database Configuration

- **Database Name**: cnbgroupconsulting
- **Database User**: root
- **Database Password**: (empty)
- **Database Host**: localhost
- **Table Prefix**: cnb_

## Development Environment

This is a local development setup using WAMP64 stack:
- Windows development environment
- Apache web server
- MySQL database
- PHP runtime

## WordPress Configuration

- **WordPress Debug Mode**: Disabled (`WP_DEBUG` is set to `false`)
- **Active Theme**: `cnb-consulting-theme` - Custom theme ACTIVE and FUNCTIONAL
- **Custom Theme Status**: PHASE 2 COMPLETED - Homepage fully functional
- **Plugins**: Akismet and Hello Dolly plugins available

## Local Development

To work with this WordPress installation:

1. **Start WAMP Services**: Ensure Apache and MySQL services are running in WAMP64
2. **Access Site**: Navigate to `http://localhost/CNBGROUPCONSULTING` in browser
3. **Admin Access**: Access WordPress admin at `http://localhost/CNBGROUPCONSULTING/wp-admin`

## File Structure

- Standard WordPress core files and directories
- Custom theme directory: `wp-content/themes/cnb-consulting-theme/` - ACTIVE with 12 core files
- Plugins directory: `wp-content/plugins/`
- Uploads directory: `wp-content/uploads/`

## Current Development Status

**Project Phase:** PREMIUM BUTTON IMPLEMENTATION COMPLETED (January 30, 2025)  
**Critical Context:** Successfully implemented premium hover effects after resolving CSS conflicts  
**Site Status:** Fully functional with enhanced button interactions

### Completed Phases:
- ✅ **Phase 1-4 (Previous):** WordPress theme with custom CSS completed
- ✅ **PIVOT-PLAN:** 28-page architecture planned (13 services + 15 business pages)  
- ✅ **Emergency Rollback:** Site restored from backup after CSS deletion failure
- ✅ **Dependency Analysis:** 448+ CSS classes mapped with conversion strategy
- ✅ **Premium Button Effects:** "Incorporate now" button with 5 hover effects implemented

### Critical Lessons Learned:
- ❌ **NEVER bulk delete CSS** without replacement ready - causes complete site breakdown
- ✅ **Systematic conversion required** - one file/section at a time with testing
- ✅ **Site must stay functional** throughout conversion process
- ✅ **JavaScript dependencies** on CSS classes (FAQ accordions) must be preserved
- ✅ **CSS specificity conflicts** - Global resets can override transform variables
- ✅ **Pure Tailwind approach** - Use native utilities over custom CSS when possible

### Current Technical State:
- **Theme:** cnb-consulting-theme ACTIVE and FUNCTIONAL
- **CSS Files:** 3,418 lines across main.css, components.css, responsive.css (restored)
- **Templates:** All working with 448+ custom CSS classes
- **JavaScript:** FAQ accordion functionality intact
- **Button Effects:** Premium hover animations using pure Tailwind utilities

### Recent Implementations:
- ✅ **"Incorporate now" Button:** Premium hover effects with:
  - Gradient flip effect using layered gradients
  - Lift effect with -translate-y-1
  - Scale effect with scale-105
  - Enhanced shadow with custom arbitrary values
  - Smooth 300ms transitions
- ✅ **Clean rebuild approach:** Removed all conflicting code and rebuilt from scratch
- ✅ **No custom CSS required:** Pure Tailwind implementation avoids specificity issues

### Documentation Created:
- ✅ **DEPENDENCY-ANALYSIS.md:** Complete CSS class mapping by priority
- ✅ **SYSTEMATIC-CONVERSION-PLAN.md:** 6-phase safe conversion strategy
- ✅ **CLEANUP-VERIFICATION.md:** Analysis of what broke during failed approach

### Ready for Next Phase:
**Revised Phase 1:** Add Tailwind CDN alongside existing CSS (NO deletion)
- Add Tailwind v3.4 CDN without removing current CSS
- Create custom.css with brand colors only
- Test Tailwind availability without visual changes
- Begin systematic class-by-class conversion

## Security Notes

- This is a local development environment with default database credentials
- Debug mode is disabled
- Standard WordPress security keys are configured in wp-config.php

## Customization Guidelines

When developing custom functionality:
- Create or modify files in the `cnb-consulting-theme` directory for theme customizations
- Add custom plugins to `wp-content/plugins/` directory
- Follow WordPress coding standards and best practices
- Test changes in this local environment before deployment

## CSS Development Guidelines

- Always use Tailwind CSS classes - NEVER write custom CSS
- ALWAYS use Tailwind CSS v3.4 classes - NEVER write custom CSS except brand colors
- Maximum 100 lines total in custom.css file - everything else must be Tailwind utilities

## Development Best Practices

- Use standard WordPress functions only - NO custom complex frameworks
- Keep solutions simple and functional - working code > impressive code
- Use proven libraries and WordPress standards - avoid reinventing wheels
- Reject any solution that creates bloated or complex code

## Template Development Guidelines

- Test each template immediately after creation for mobile responsiveness

## Design and Development Memory

- Focus on businessglobalizer.com patterns - don't add unnecessary features
- All 28 pages must be mobile-first responsive using Tailwind breakpoints

## Form Development Guidelines

- Contact forms use WordPress standard functions - no custom form builders

## Project Quality Standards

- ALWAYS use Tailwind CSS v3.4 classes - NEVER write custom CSS except brand colors
- Maximum 100 lines total in custom.css file - everything else must be Tailwind utilities
- Use standard WordPress functions only - NO custom complex frameworks
- Keep solutions simple and functional - working code > impressive code
- Test each template immediately after creation for mobile responsiveness
- Use proven libraries and WordPress standards - avoid reinventing wheels
- Focus on businessglobalizer.com patterns - don't add unnecessary features
- All 28 pages must be mobile-first responsive using Tailwind breakpoints
- Contact forms use WordPress standard functions - no custom form builders
- Reject any solution that creates bloated or complex code

## Conversion Strategy Memory

### Conversion Rules and Best Practices
- **NEW RULE: NO PARTIAL CONVERSIONS**
- Each component must be 100% complete:
  1. Convert HTML classes ✓
  2. Remove old CSS rules ✓  
  3. Test without old CSS ✓
  4. Verify file size reduction ✓
- ONLY THEN move to next component

## Senior Development Mindset

- Always choose the BEST approach, not the easiest
- Use CLI tools, build processes, and local dependencies over CDN shortcuts
- Think reliability, maintainability, and professional standards
- Avoid overengineering but never compromise on quality
- Plan first, implement properly

## Technology Selection Memory

- Always use established packages and libraries instead of custom code. Use Tailwind utilities, Alpine.js components, Heroicons, and npm packages. Never reinvent wheels - find the proper library solution first.

## Build Commands

### Install Dependencies
```bash
pushd "wp-content\themes\cnb-consulting-theme" && npm install && popd
```

### Build Project (Development)
```bash
pushd "wp-content\themes\cnb-consulting-theme" && npm run build:dev && popd
```

### Build CSS Only
```bash
pushd "wp-content\themes\cnb-consulting-theme" && npm run css:build && popd
```

### Development Server
```bash
pushd "wp-content\themes\cnb-consulting-theme" && npm run dev && popd
```

**Note:** Use `pushd` and `popd` commands on Windows to navigate to theme directory since direct `cd` is restricted. The theme uses Vite for building and Tailwind CSS for styling.