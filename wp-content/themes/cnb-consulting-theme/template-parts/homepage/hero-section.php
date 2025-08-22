<?php
/**
 * Hero Section Template Part
 * Clean, maintainable hero with Heroicons and pure Tailwind
 * 
 * @package CNB_Consulting_Theme
 */
?>

<section class="relative bg-gradient-to-br from-cnb-primary via-blue-800 to-blue-900 text-white py-20 lg:py-32 overflow-hidden">
    
    <?php include get_template_directory() . '/template-parts/homepage/hero-components/background-elements.php'; ?>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <?php include get_template_directory() . '/template-parts/homepage/hero-components/hero-content.php'; ?>
            
            <?php include get_template_directory() . '/template-parts/homepage/hero-components/stats-grid.php'; ?>
            
        </div>
    </div>
    
</section>