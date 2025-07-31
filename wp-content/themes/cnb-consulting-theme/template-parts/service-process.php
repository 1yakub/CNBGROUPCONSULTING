<?php
/**
 * Service Process Steps Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$process_steps = get_post_meta(get_the_ID(), '_cnb_process_steps', true);

if (!empty($process_steps) && is_array($process_steps)) :
?>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Simple Process</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">We make <?php echo strtolower(get_the_title()); ?> easy with our proven step-by-step approach</p>
        </div>
        
        <div class="space-y-12">
            <?php foreach ($process_steps as $index => $step) : 
                if (empty($step['title'])) continue;
                $step_number = $index + 1;
                $is_last = ($index === count($process_steps) - 1);
                $step_icons = ['📋', '📝', '🚀', '📦', '✅', '🎉']; // Icon pool
                $step_icon = $step_icons[$index] ?? '📋';
            ?>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start" data-step="<?php echo $step_number; ?>">
                    <div class="lg:col-span-2 flex flex-col items-center lg:items-start relative">
                        <div class="w-16 h-16 bg-cnb-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-4 shadow-lg">
                            <span><?php echo $step_number; ?></span>
                        </div>
                        <div class="text-4xl mb-4">
                            <span><?php echo $step_icon; ?></span>
                        </div>
                        
                        <?php if (!$is_last) : ?>
                            <div class="hidden lg:block absolute top-20 left-8 w-0.5 h-20 bg-gradient-to-b from-cnb-primary to-gray-300"></div>
                            <div class="lg:hidden w-full flex justify-center mt-4">
                                <div class="text-cnb-primary text-2xl font-bold">↓</div>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="lg:col-span-10 text-center lg:text-left">
                        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2 lg:mb-0"><?php echo esc_html($step['title']); ?></h3>
                            <?php if (!empty($step['duration'])) : ?>
                                <div class="inline-flex items-center space-x-2 bg-gray-100 px-4 py-2 rounded-full text-sm text-gray-600">
                                    <span>⏱️</span>
                                    <span class="font-medium"><?php echo esc_html($step['duration']); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <?php if (!empty($step['description'])) : ?>
                            <div class="mb-4">
                                <p class="text-gray-600 leading-relaxed text-lg"><?php echo esc_html($step['description']); ?></p>
                            </div>
                        <?php endif; ?>
                        
                        <div class="">
                            <span class="inline-block bg-cnb-primary text-white px-4 py-2 rounded-full text-sm font-semibold">Step <?php echo $step_number; ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-16 p-8 bg-gray-50 rounded-lg">
            <p class="text-lg text-gray-600 mb-6">Ready to get started with our proven process?</p>
            <a href="#pricing" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105">
                View Packages
            </a>
        </div>
    </div>
</section>

<?php endif; ?>