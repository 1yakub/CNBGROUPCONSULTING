<?php
/**
 * Service FAQ Section Template Part
 * 
 * @package CNB_Consulting_Theme
 */

$faq_items = get_post_meta(get_the_ID(), '_cnb_faq_items', true);

if (!empty($faq_items) && is_array($faq_items)) :
?>

<section class="service-faq">
    <div class="container">
        <div class="section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Common questions about our <?php echo strtolower(get_the_title()); ?> service</p>
        </div>
        
        <div class="faq-container">
            <?php foreach ($faq_items as $index => $faq) : 
                if (empty($faq['question'])) continue;
                $faq_id = 'faq-' . $index;
                $is_first = ($index === 0);
            ?>
                <div class="faq-item <?php echo $is_first ? 'faq-featured' : ''; ?>">
                    <div class="faq-question" data-target="<?php echo $faq_id; ?>">
                        <div class="faq-question-content">
                            <div class="faq-icon">
                                <span class="question-mark">?</span>
                            </div>
                            <h3><?php echo esc_html($faq['question']); ?></h3>
                        </div>
                        <div class="faq-toggle-wrapper">
                            <span class="faq-toggle">+</span>
                        </div>
                    </div>
                    
                    <div class="faq-answer" id="<?php echo $faq_id; ?>">
                        <div class="faq-answer-content">
                            <?php if (!empty($faq['answer'])) : ?>
                                <div class="answer-icon">
                                    <span>💡</span>
                                </div>
                                <div class="answer-text">
                                    <p><?php echo esc_html($faq['answer']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
        <div class="faq-contact">
            <p>Still have questions?</p>
            <a href="#contact" class="btn btn-secondary">Contact Us</a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const answer = document.getElementById(targetId);
            const toggle = this.querySelector('.faq-toggle');
            
            // Close all other FAQ items
            faqQuestions.forEach(otherQuestion => {
                if (otherQuestion !== this) {
                    const otherTargetId = otherQuestion.getAttribute('data-target');
                    const otherAnswer = document.getElementById(otherTargetId);
                    const otherToggle = otherQuestion.querySelector('.faq-toggle');
                    
                    otherAnswer.style.display = 'none';
                    otherToggle.textContent = '+';
                    otherQuestion.classList.remove('active');
                }
            });
            
            // Toggle current FAQ item
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
                toggle.textContent = '+';
                this.classList.remove('active');
            } else {
                answer.style.display = 'block';
                toggle.textContent = '−';
                this.classList.add('active');
            }
        });
    });
});
</script>

<?php endif; ?>