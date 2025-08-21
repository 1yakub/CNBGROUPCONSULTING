# ULTRA-MICRO REFACTORING TEMPLATE
## Complete Generic Prompt System for WordPress Theme Organization

---

## 🎯 PROJECT SCOPE

**Total Templates to Organize:** 21
- 1 Homepage (front-page.php)
- 2 Main templates (index.php, single-cnb_service.php)
- 18 Page templates (page-*.php)

**Current Template Parts:** 14 files in template-parts/
**Estimated Total Prompts:** 63-147 (3-7 phases per page)

---

## 📋 ULTRA-MICRO PHASE TEMPLATES

### **PHASE 0: INVENTORY TEMPLATE**
```
PHASE 0: Scan and analyze [TARGET] without making any changes.

Target: [TARGET_NAME] (e.g., "homepage", "services", "about")

Analyze and report:
1. What files are involved in [TARGET]
2. What sections/components exist in each file
3. What dependencies exist (get_template_part calls, CSS classes, JS functions)
4. What WordPress functions are used (hooks, custom functions)
5. File sizes and complexity levels
6. What could potentially break if moved

Output: Complete inventory and dependency map for [TARGET].
IMPORTANT: Do NOT make any changes - only analyze and report.
```

### **PHASE 1: FOLDER PREPARATION TEMPLATE**
```
PHASE 1: Create folder structure for [TARGET] without moving any files.

Target: [TARGET_NAME]

Steps:
1. Create main folder: pages/[TARGET_NAME]/
2. Create subfolders based on Phase 0 analysis (if needed)
3. Verify folders are created correctly with proper permissions
4. Document folder structure created

Test: Verify website still works (nothing should change since no files moved).
Result: Empty folder structure ready for [TARGET].
```

### **PHASE 2: ATOMIC FILE COPY TEMPLATE**
```
PHASE 2: Copy [SINGLE_FILE] to new location without changing original.

Target File: [SPECIFIC_FILE_NAME]
Source: [CURRENT_PATH]
Destination: [NEW_PATH]

Steps:
1. Copy [SPECIFIC_FILE_NAME] from [CURRENT_PATH] to [NEW_PATH]
2. Verify file copied correctly (compare file sizes)
3. Ensure proper file permissions
4. Do NOT delete original file yet
5. Do NOT update any references yet

Test: Website should work exactly the same (using original files).
Result: [SPECIFIC_FILE_NAME] exists in both old and new locations.
```

### **PHASE 3: ATOMIC REFERENCE UPDATE TEMPLATE**
```
PHASE 3: Update single reference from [OLD_PATH] to [NEW_PATH].

Target Reference: [SPECIFIC_REFERENCE] in [REFERENCING_FILE]
Change: [OLD_PATH] → [NEW_PATH]

Steps:
1. Open [REFERENCING_FILE]
2. Find the exact line with [OLD_PATH]
3. Change it to [NEW_PATH]
4. Save file
5. Test immediately

Test: Verify [SPECIFIC_FUNCTIONALITY] still works exactly as before.
Result: One reference now points to new location.
Rollback: If broken, change [NEW_PATH] back to [OLD_PATH].
```

### **PHASE 4: ATOMIC CLEANUP TEMPLATE**
```
PHASE 4: Remove [SINGLE_OLD_FILE] after verifying new location works.

Target: [SPECIFIC_OLD_FILE]
Verification: [NEW_FILE_LOCATION] is working correctly

Steps:
1. Verify [NEW_FILE_LOCATION] displays correctly
2. Verify all references point to new location
3. Delete [SPECIFIC_OLD_FILE]
4. Clear any caches

Test: Verify [SPECIFIC_FUNCTIONALITY] still works with old file removed.
Result: [SPECIFIC_OLD_FILE] removed, only new location remains.
```

### **PHASE 5: ATOMIC SECTION EXTRACTION TEMPLATE**
```
PHASE 5: Extract [SINGLE_SECTION] from [SOURCE_FILE] into separate file.

Target Section: [SECTION_NAME] (e.g., "hero section", "pricing table")
Source: [SOURCE_FILE]
Destination: [NEW_SECTION_FILE]
Line Range: Lines [START_LINE] to [END_LINE] (if known)

Steps:
1. Identify exact content for [SECTION_NAME]
2. Copy section content to [NEW_SECTION_FILE]
3. Add proper PHP opening tags: <?php
4. Add proper closing tags if needed
5. Replace section in [SOURCE_FILE] with: get_template_part('path/to/[NEW_SECTION_FILE]');
6. Remove .php extension in get_template_part call

Test: Verify [SECTION_NAME] displays exactly the same as before.
Result: [SECTION_NAME] is now in separate file, included via get_template_part.
```

### **PHASE 6: ATOMIC COMPONENT SPLIT TEMPLATE**
```
PHASE 6: Split [SINGLE_COMPONENT] from [SECTION_FILE] into separate file.

Target Component: [COMPONENT_NAME] (e.g., "CTA button", "pricing card", "testimonial item")
Source: [SECTION_FILE]
Destination: [COMPONENT_FILE]

Steps:
1. Identify exact HTML/PHP for [COMPONENT_NAME] 
2. Extract to [COMPONENT_FILE]
3. Add proper PHP tags
4. Replace in [SECTION_FILE] with: include '[COMPONENT_FILE]';
5. Ensure no broken HTML structure

Test: Verify [COMPONENT_NAME] displays exactly the same.
Result: [COMPONENT_NAME] is isolated in its own file.
Scope: ONE logical component only (single card, single button, single text block).
```

### **PHASE 7: ATOMIC ELEMENT SPLIT TEMPLATE**
```
PHASE 7: Split [SINGLE_ELEMENT] from [COMPONENT_FILE] - final micro level.

Target Element: [ELEMENT_NAME] (e.g., "button text", "headline", "image", "icon")
Source: [COMPONENT_FILE]
Destination: [ELEMENT_FILE]

Steps:
1. Extract ONE atomic element that cannot be split further
2. Create [ELEMENT_FILE]
3. Update [COMPONENT_FILE] to include element
4. Ensure element works in context

Test: Verify [ELEMENT_NAME] displays exactly the same.
Result: Atomic level achieved - [ELEMENT_NAME] cannot be split further.
Scope: This is the smallest possible unit (single piece of content).
```

---

## 🔄 EXECUTION WORKFLOW

### **Standard Process Per Page:**
1. **PHASE 0**: Scan [PAGE_NAME]
2. **PHASE 1**: Create folder for [PAGE_NAME]
3. **PHASE 2**: Copy files for [PAGE_NAME]
4. **PHASE 3**: Update references for [PAGE_NAME]
5. **PHASE 4**: Cleanup old files for [PAGE_NAME]
6. **PHASE 5**: Extract sections from [PAGE_NAME]
7. **PHASE 6**: Split components in [PAGE_NAME]
8. **PHASE 7**: Split elements in [PAGE_NAME] (if needed)

### **Per Phase Checklist:**
- [ ] **READ PROMPT**: Understand exactly what to do
- [ ] **EXECUTE**: Follow steps precisely
- [ ] **TEST**: Verify functionality unchanged
- [ ] **VERIFY**: Check specific element mentioned
- [ ] **REPORT**: Confirm completion or report issues
- [ ] **PROCEED**: Ready for next phase

### **Testing Protocol:**
1. **Visual Test**: Page displays correctly
2. **Functional Test**: Buttons, forms, links work
3. **Mobile Test**: Responsive design intact
4. **Console Test**: No JavaScript errors
5. **Performance Test**: Page loads at same speed

### **Safety Protocol:**
- **NEVER skip testing** after any phase
- **STOP immediately** if anything breaks
- **REVERT changes** if test fails
- **REPORT problem** and ask for guidance
- **ONE CHANGE PER PHASE** - never combine steps

---

## 📁 PRIORITY ORDER

### **PHASE ORDER RECOMMENDATION:**

**Tier 1 - Critical Pages (Start Here):**
1. homepage
2. services  
3. about
4. contact

**Tier 2 - High-Traffic Service Pages:**
5. company-formation
6. registered-agent
7. ein-service
8. boi-filing

**Tier 3 - Other Service Pages:**
9. amazon-seller
10. walmart-seller
11. ecommerce-registration
12. tax-filing
13. duns-number
14. itin-service
15. lease-agreement
16. resale-certificate
17. company-dissolution

**Tier 4 - Utility Pages:**
18. faq
19. privacy-policy

**Tier 5 - Special Templates:**
20. index (blog template)
21. single-cnb_service (custom post template)

---

## 🎯 EXAMPLE USAGE

### **Complete Homepage Example:**
1. "PHASE 0: Scan homepage"
2. "PHASE 1: Create folder for homepage" 
3. "PHASE 2: Copy hero-section.php for homepage"
4. "PHASE 3: Update front-page.php hero reference"
5. "PHASE 4: Cleanup old hero-section.php"
6. "PHASE 5: Extract hero headline from hero section"
7. "PHASE 6: Split CTA button from hero headline"
8. "PHASE 7: Split button text from CTA button"

### **Complete Services Page Example:**
1. "PHASE 0: Scan services"
2. "PHASE 1: Create folder for services"
3. "PHASE 2: Copy page-services.php content to services folder"
4. "PHASE 5: Extract hero section from services"
5. "PHASE 5: Extract categories section from services"
6. "PHASE 6: Split LLC card from categories section"
7. "PHASE 6: Split corporation card from categories section"
8. "PHASE 7: Split pricing from LLC card"

---

## 📊 SUCCESS METRICS

### **Per Phase Success:**
- [ ] No functionality broken
- [ ] No visual changes
- [ ] No performance degradation
- [ ] All links/forms still work
- [ ] Mobile responsive maintained

### **Per Page Success:**
- [ ] All sections properly organized
- [ ] Clear file structure
- [ ] Easy to find components
- [ ] Maintainable code structure
- [ ] No duplicated code

### **Overall Project Success:**
- [ ] All 21 templates organized
- [ ] Ultra-micro folder structure achieved
- [ ] Zero functionality lost
- [ ] Significant maintainability improvement
- [ ] Clear development workflow established

---

## 💡 TIPS FOR SUCCESS

1. **BE PATIENT**: Micro-steps take time but guarantee success
2. **NEVER RUSH**: Each phase is designed to be safe
3. **TEST EVERYTHING**: Every phase includes mandatory testing
4. **ONE THING ONLY**: Never combine multiple changes
5. **ASK FOR HELP**: If any phase breaks something, stop and ask
6. **DOCUMENT PROGRESS**: Keep track of completed phases
7. **CELEBRATE WINS**: Each successful phase is progress!

---

## 🚨 EMERGENCY PROCEDURES

### **If Something Breaks:**
1. **STOP immediately** - don't continue
2. **IDENTIFY** what broke (specific error/issue)
3. **REVERT** the last change made
4. **TEST** that revert fixes the issue
5. **REPORT** what went wrong
6. **ASK** for guidance on how to proceed

### **Common Issues:**
- **File not found**: Check file paths and extensions
- **White screen**: Check PHP syntax errors
- **Missing section**: Verify get_template_part paths
- **CSS broken**: Ensure no HTML structure changes
- **JS errors**: Check for missing elements/IDs

---

## 🏁 GETTING STARTED

**Your first prompt should be:**
```
PHASE 0: Scan homepage
```

**This will analyze your homepage and provide the roadmap for all subsequent phases.**

**Ready to begin the ultra-micro refactoring journey!** 🚀