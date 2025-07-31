<?php
/**
 * Service FAQ Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$faq_items = get_post_meta(get_the_ID(), '_cnb_faq_items', true);

if (!empty($faq_items) && is_array($faq_items)) :
?>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-600">Common questions about our <?php echo strtolower(get_the_title()); ?> service</p>
        </div>
        
        <div class="space-y-4 mb-16">
            <?php foreach ($faq_items as $index => $faq) : 
                if (empty($faq['question'])) continue;
                $faq_id = 'faq-' . $index;
                $is_first = ($index === 0);
            ?>
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow <?php echo $is_first ? 'border-2 border-cnb-secondary' : ''; ?>">
                    <div class="cursor-pointer transition-colors hover:bg-gray-50" data-target="<?php echo $faq_id; ?>" onclick="toggleFAQ('<?php echo $faq_id; ?>')">
                        <div class="flex items-center justify-between p-6">
                            <div class="flex items-center space-x-4 flex-1">
                                <div class="w-10 h-10 bg-cnb-primary text-white rounded-full flex items-center justify-center font-bold text-lg flex-shrink-0">
                                    <span>?</span>
                                </div>
                                <h3 class="font-semibold text-gray-900 text-lg"><?php echo esc_html($faq['question']); ?></h3>
                            </div>
                            <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center transition-all duration-300 flex-shrink-0">
                                <span class="text-gray-600 font-bold text-xl faq-toggle" id="toggle-<?php echo $faq_id; ?>">+</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hidden border-t border-gray-200" id="<?php echo $faq_id; ?>">
                        <?php if (!empty($faq['answer'])) : ?>
                            <div class="flex items-start space-x-4 p-6">
                                <div class="w-10 h-10 bg-cnb-secondary rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-xl">💡</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-gray-700 leading-relaxed"><?php echo esc_html($faq['answer']); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center p-8 bg-gray-50 rounded-lg">
            <p class="text-gray-600 mb-4 text-lg">Still have questions?</p>
            <a href="#contact" class="bg-cnb-secondary hover:bg-yellow-400 text-gray-900 px-8 py-3 rounded-lg font-semibold transition transform hover:scale-105">
                Contact Us
            </a>
        </div>
    </div>
</section>

<script>
function toggleFAQ(targetId) {
    const answer = document.getElementById(targetId);
    const toggle = document.getElementById('toggle-' + targetId);
    const toggleWrapper = toggle.parentElement;
    
    // Close all other FAQ items
    const allAnswers = document.querySelectorAll('[id^="faq-"]');
    const allToggles = document.querySelectorAll('[id^="toggle-faq-"]');
    
    allAnswers.forEach((otherAnswer, index) => {
        if (otherAnswer.id !== targetId) {
            otherAnswer.classList.add('hidden');
            const otherToggle = allToggles[index];
            if (otherToggle) {
                otherToggle.textContent = '+';
                otherToggle.parentElement.classList.remove('bg-cnb-primary', 'text-white');
                otherToggle.parentElement.classList.add('bg-gray-100');
            }
        }
    });
    
    // Toggle current FAQ item
    if (answer.classList.contains('hidden')) {
        answer.classList.remove('hidden');
        toggle.textContent = '−';
        toggleWrapper.classList.remove('bg-gray-100');
        toggleWrapper.classList.add('bg-cnb-primary', 'text-white');
    } else {
        answer.classList.add('hidden');
        toggle.textContent = '+';
        toggleWrapper.classList.remove('bg-cnb-primary', 'text-white');
        toggleWrapper.classList.add('bg-gray-100');
    }
}
</script>

<?php endif; ?>