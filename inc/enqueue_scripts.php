<?php

/**
 * Enqueue scripts and styles.
 */
function difa_scripts() {
	wp_deregister_style( 'contact-form-7-css' );

	wp_enqueue_style( 'difa-swipper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'difa-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0.1' );
	wp_enqueue_style( 'difa-style', get_stylesheet_uri(), array('difa-main'), '1.1.41' );

	 
  wp_enqueue_script( 'js-swipper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), _S_VERSION, true );
  wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );
  wp_enqueue_script( 'difa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'difa_scripts' );