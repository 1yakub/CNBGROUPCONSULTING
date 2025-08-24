# FAQ System Conversion Plan

## Current State
- 28 files with FAQ code
- 95 onclick handlers
- 11 duplicate toggleFAQ() functions
- No schema markup
- ~1,500 lines of FAQ code

## Target State
- 5 files total
- 0 onclick handlers
- 1 Alpine.js component
- Full schema markup
- ~500 lines total

## Phase 1: Foundation

### Create Core Files
- [ ] Create `inc/functions/content/faq-data.php`
  - Extract all FAQ content from existing files
  - Structure: `['category' => ['items' => [['question' => '', 'answer' => '']]]]`
  - Categories: homepage, general, formation, compliance, legal, pricing, amazon-seller, walmart-seller, boi-filing, company-dissolution, company-formation, ecommerce-registration, resale-certificate, ein-service, itin-service, lease-agreement, contact

- [ ] Create `inc/functions/faq-schema.php`
  ```php
  function cnb_output_faq_schema($items) {
      // Returns <script type="application/ld+json">
  }
  ```

- [ ] Create `inc/functions/faq-helpers.php`
  ```php
  function cnb_get_faqs($category)
  function cnb_get_all_faqs()
  function cnb_render_faq_item($q, $a, $id)
  ```

- [ ] Create `template-parts/components/faq-accordion.php`
  - Accept via `$args`: faqs, id, show_categories
  - Use Alpine.js x-data="faqSystem"

### Update JavaScript
- [ ] Add to `src/main.js`:
  ```javascript
  Alpine.data('faqSystem', () => ({
      activeCategory: 'all',
      activeItems: {},
      toggleItem(id) {},
      setCategory(cat) {},
      isOpen(id) {},
      isActiveCategory(cat) {}
  }))
  ```

- [ ] Build: `npm run build:dev`

## Phase 2: Migration

### Test Component
- [ ] Convert `homepage/faq-section.php` (already done ✓)
- [ ] Test schema output
- [ ] Verify Alpine.js functionality

### Convert Service Pages (11 files)
Replace each with:
```php
get_template_part('template-parts/components/faq-accordion', null, [
    'faqs' => cnb_get_faqs('category-name'),
    'id' => 'unique-id'
]);
```

Files to convert:
- [ ] amazon-seller/faq.php
- [ ] walmart-seller/faq.php
- [ ] boi-filing/faq.php
- [ ] company-dissolution/faq.php
- [ ] company-formation/faq.php
- [ ] ecommerce-registration/faq.php
- [ ] resale-certificate/faq.php
- [ ] ein-service/faq.php
- [ ] itin-service/faq.php
- [ ] lease-agreement/faq.php
- [ ] contact/faq.php

### Convert FAQ Page Components
- [ ] Delete `faq/general.php`
- [ ] Delete `faq/formation.php`
- [ ] Delete `faq/compliance.php`
- [ ] Delete `faq/legal.php`
- [ ] Delete `faq/pricing.php`
- [ ] Delete `faq/navigation.php`
- [ ] Delete `faq/questions.php`
- [ ] Update `faq/cta.php` - remove `<script>` block (lines 27-65)

### Update FAQ Page
- [ ] Update `page-faq.php` to use component with categories

## Phase 3: Cleanup

### Remove JavaScript
- [ ] Remove toggleFAQ() from all CTA files:
  - amazon-seller/cta.php
  - walmart-seller/cta.php
  - boi-filing/cta.php
  - company-dissolution/cta.php
  - company-formation/cta.php
  - ecommerce-registration/cta.php
  - resale-certificate/cta.php
  - ein-service/cta.php
  - itin-service/cta.php
  - lease-agreement/cta.php

### Final Tasks
- [ ] Test all FAQ pages
- [ ] Verify schema with Google Rich Results Test
- [ ] Check Alpine.js in browser console
- [ ] Build final: `npm run build:dev`
- [ ] Delete old FAQ template files (after 30 days)

## Verification Checklist
- [ ] No onclick attributes in HTML
- [ ] No inline `<script>` tags
- [ ] Schema markup present on all FAQ pages
- [ ] Alpine.js handling all interactions
- [ ] All FAQ content preserved
- [ ] Mobile responsive
- [ ] Keyboard navigable

## Rollback Plan
- Keep original files in backup folder
- Can revert individual pages if issues
- Original toggleFAQ() still works if needed