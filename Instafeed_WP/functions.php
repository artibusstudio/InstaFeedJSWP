<?php
// WP Templates Front-End Includes
include( get_template_directory() . '/inc/front/enqueue.php');
add_action( 'wp_enqueue_scripts', 'kmEnqueueStyle' );

include( get_template_directory() . '/inc/template/front-page-template.php');

include( get_template_directory() . '/inc/template/information.php');

include( get_template_directory() . '/inc/back/enqueue.php');

add_action( 'after_setup_theme', 'artsmart_enqueue_setup' );