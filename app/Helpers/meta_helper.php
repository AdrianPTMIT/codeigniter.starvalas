<?php


if (!function_exists('get_dynamic_meta')) {
    function get_dynamic_meta($page_type, $page_id = null) {
        if (!function_exists('get_instance')) {
            throw new Exception('get_instance() function is not available. Make sure this helper is loaded within the CodeIgniter application context.');
        }
        
        $CI =& get_instance();
        $CI->load->database();
        
        // Get meta from seo_metadata table
        $CI->db->where('page_type', $page_type);
        if ($page_id !== null) {
            $CI->db->where('page_id', $page_id);
        }
        $query = $CI->db->get('seo_metadata');
        
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        
        // Return default meta if none found
        return get_default_meta($page_type);
    }
}

if (!function_exists('get_default_meta')) {
    function get_default_meta($page_type) {
        $defaults = [
            'meta_title' => 'News Portal - Latest Updates',
            'meta_description' => 'Get the latest news and updates',
            'meta_keywords' => 'news, updates, portal',
            'canonical_url' => base_url(),
            'robots_meta' => 'index, follow',
            'og_title' => 'News Portal',
            'og_description' => 'Latest news and updates',
            'og_image_url' => base_url('assets/images/default-og.jpg'),
            'twitter_card_type' => 'summary_large_image',
            'twitter_title' => 'News Portal',
            'twitter_description' => 'Latest news and updates',
            'twitter_image_url' => base_url('assets/images/default-twitter.jpg')
        ];
        
        // Type-specific defaults
        if ($page_type === 'article') {
            $defaults['meta_title'] = 'Article - News Portal';
            $defaults['meta_description'] = 'Read this interesting article';
        } elseif ($page_type === 'category') {
            $defaults['meta_title'] = 'Category - News Portal';
            $defaults['meta_description'] = 'Browse all articles in this category';
        }
        
        return $defaults;
    }
}