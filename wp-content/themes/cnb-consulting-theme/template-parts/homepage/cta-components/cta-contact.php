<?php $contact_info = cnb_get_contact_info(); ?>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
    <div class="flex items-center justify-center lg:justify-start">
        <span class="text-2xl mr-3">📞</span>
        <div class="text-left">
            <div class="text-blue-200 text-sm"><?php _e('Call Us:', 'cnb-consulting-theme'); ?></div>
            <a href="tel:<?php echo esc_attr(cnb_format_phone_href($contact_info['phone'])); ?>" class="text-white hover:text-cnb-secondary transition font-medium">
                <?php echo esc_html($contact_info['phone']); ?>
            </a>
        </div>
    </div>
    
    <div class="flex items-center justify-center lg:justify-start">
        <span class="text-2xl mr-3">💬</span>
        <div class="text-left">
            <div class="text-blue-200 text-sm"><?php _e('WhatsApp:', 'cnb-consulting-theme'); ?></div>
            <a href="<?php echo esc_url(cnb_get_whatsapp_link($contact_info['whatsapp'])); ?>" 
               target="_blank" rel="noopener" class="text-white hover:text-cnb-secondary transition font-medium">
                <?php echo esc_html($contact_info['whatsapp']); ?>
            </a>
        </div>
    </div>
    
    <div class="flex items-center justify-center lg:justify-start">
        <span class="text-2xl mr-3">✉️</span>
        <div class="text-left">
            <div class="text-blue-200 text-sm"><?php _e('Email:', 'cnb-consulting-theme'); ?></div>
            <a href="mailto:<?php echo esc_attr($contact_info['email']); ?>" class="text-white hover:text-cnb-secondary transition font-medium">
                <?php echo esc_html($contact_info['email']); ?>
            </a>
        </div>
    </div>
</div>