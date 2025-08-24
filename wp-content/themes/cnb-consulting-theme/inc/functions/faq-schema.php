<?php
/**
 * FAQ Schema Markup Generator
 * Generates JSON-LD structured data for FAQ pages
 * 
 * @package CNB_Consulting_Theme
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output FAQ schema markup
 * 
 * @param array $items Array of FAQ items with 'question' and 'answer' keys
 * @return string JSON-LD script tag with FAQ schema
 */
function cnb_output_faq_schema($items) {
    if (empty($items)) {
        return '';
    }
    
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array()
    );
    
    foreach ($items as $item) {
        if (isset($item['question']) && isset($item['answer'])) {
            $schema['mainEntity'][] = array(
                '@type' => 'Question',
                'name' => esc_html($item['question']),
                'acceptedAnswer' => array(
                    '@type' => 'Answer',
                    'text' => esc_html($item['answer'])
                )
            );
        }
    }
    
    if (empty($schema['mainEntity'])) {
        return '';
    }
    
    return '<script type="application/ld+json">' 
           . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) 
           . '</script>' . PHP_EOL;
}