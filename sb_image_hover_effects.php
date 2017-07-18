<?php

/*
  Plugin Name: SB Image Hover Effects
  Plugin URI: http://www.oxilab.org/product/sb-image-hover-effects/
  Description: SB Image Hover Effects is Simple and Flexible Image hover effects.Its impressive, lightweight, responsive and fully CSS3. Apply SB Image hover effects on your website without any CSS coding knowledge.
  Author: Biplob Adhikari
  Author URI: http://www.oxilab.org/product/sb-image-hover-effects/
  Version: 6.3
 */

//Loading CSS filefunction
function sihe_hov_style() {
    wp_enqueue_style('sihe_effects_style', plugins_url('/css/sihe_responsive.css', __FILE__));
}

add_action('wp_enqueue_scripts', 'sihe_hov_style');

// added widgets filters
add_filter('widget_text', 'do_shortcode');

// VAF Framework Loading
if (!class_exists('VP_siheAutoLoader')) {
    defined('VP_SIHE_VERSION') or define('VP_SIHE_VERSION', '2.0');
    defined('VP_SIHE_URL') or define('VP_SIHE_URL', plugin_dir_url(__FILE__));
    defined('VP_SIHE_DIR') or define('VP_SIHE_DIR', plugin_dir_path(__FILE__));
    defined('VP_SIHE_FILE') or define('VP_SIHE_FILE', __FILE__);

// Looding Bootstrap framework
    require 'built_in_data/bootstrap.php';
}

// Register Custom Post
function sihe_custom_post_calling() {
    register_post_type('sihe-hov', array(
        'labels' => array(
            'name' => __('SB Hov Effects'),
            'singular_name' => __('Hover Effect'),
            'add_new_item' => __('Add New Item')
        ),
        'public' => true,
        'supports' => array('title'),
        'show_ui' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'hover-effects'),
        'show_in_menu' => 'sihe_custom_post_menus'
    ));
}

add_action('init', 'sihe_custom_post_calling');

add_action('admin_menu', 'sihe_custom_post_menu');
function sihe_custom_post_menu() {
    add_menu_page('Image Effects', 'Image Effects', 'manage_options', 'sihe_custom_post_menus', 'edit.php?post_type=sihe-hov');
    add_submenu_page('sihe_custom_post_menus', 'Add New', 'Add New', 'edit_posts', 'post-new.php?post_type=sihe-hov');
    add_submenu_page('sihe_custom_post_menus', 'Other Plugins', 'Other Plugins', 'manage_options', 'sihe_custom_post_menus-other-plugins', 'sihe_custom_post_menus_other_plugins');
}

function sihe_custom_post_menus_other_plugins() {
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    include_once( plugin_dir_path( __FILE__ ) . 'other-plugins/other-plugins.php' );
}

// Loading Option Framework Main Metaboxes 
new VP_Metabox(array
    (
    'id' => 'sihe_meta',
    'types' => array('sihe-hov'),
    'title' => __('SB Hover Effects ', 'vp_textdomain'),
    'priority' => 'high',
    'template' => VP_SIHE_DIR . '/admin/metabox.php'
        ));
// calling shortcode
require ('admin/shortcode.php');
require ('admin/code-gen.php');

add_action('admin_head', 'add_sihe_custom_hov_menu_icons_styles');
function add_sihe_custom_hov_menu_icons_styles(){
?>
 
<style>
 #adminmenu #toplevel_page_sihe_custom_post_menus div.wp-menu-image:before {
content: "\f128";
}
</style>
 
<?php
}