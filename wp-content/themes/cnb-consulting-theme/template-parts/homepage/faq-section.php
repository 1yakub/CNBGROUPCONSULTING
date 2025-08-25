<?php
/**
 * FAQ Section Template Part
 * 
 * Displays frequently asked questions with Alpine.js accordion functionality
 * 
 * @package CNB_Consulting_Theme
 */


?>

<section class="py-16 lg:py-24 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        <header class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                <?php _e('Frequently Asked Questions', 'cnb-consulting-theme'); ?>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <?php _e('Get answers to common questions about US business formation and our services', 'cnb-consulting-theme'); ?>
            </p>
        </header>

        <?php

        get_template_part('template-parts/components/faq-accordion', null, array(
            'faqs' => cnb_get_faqs('homepage'),
            'id' => 'homepage-faq',
            'show_schema' => false,
            'show_categories' => false
        ));
        ?>

        <div class="bg-gray-50 rounded-lg p-8 text-center">
            <div class="">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    <?php _e('Still Have Questions?', 'cnb-consulting-theme'); ?>
                </h3>
                <p class="text-gray-600 mb-8">
                    <?php _e('Our expert team is here to help. Get personalized answers to your specific business formation needs.', 'cnb-consulting-theme'); ?>
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="<?php echo esc_url(cnb_get_cta_link('contact-experts')); ?>" target="_blank" rel="noopener"
                        class="bg-cnb-primary text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition">
                        <?php _e('Contact Our Experts', 'cnb-consulting-theme'); ?>
                    </a>
                    <a href="<?php
                    $contact = cnb_get_contact_info();
                    echo esc_url(cnb_get_whatsapp_link($contact['whatsapp']));
                    ?>" target="_blank" rel="noopener"
                        class="inline-flex items-center justify-center border-2 border-cnb-primary text-cnb-primary px-6 py-3 rounded-lg font-medium hover:bg-cnb-primary hover:text-white transition">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <?php _e('WhatsApp Us', 'cnb-consulting-theme'); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>