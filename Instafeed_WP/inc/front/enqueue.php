<?php
function kmEnqueueStyle(){

  wp_register_style ( 'km_main_stylesheet' , get_template_directory_uri() . '/style.css' );

  wp_enqueue_script('km_navbar_js', get_theme_file_uri('/assets/js/navbar.js'), NULL, '1.0', true);

  wp_enqueue_script('km_insta_feed_js', get_template_directory_uri() .'/assets/js/insta-feed.js', array('jquery'), null, true);

  wp_enqueue_script('km_custom_insta_feed_js', get_template_directory_uri() .'/assets/js/custom-insta-feed.js', array('jquery'), null, true);

  wp_enqueue_style('km_main_stylesheet');
}