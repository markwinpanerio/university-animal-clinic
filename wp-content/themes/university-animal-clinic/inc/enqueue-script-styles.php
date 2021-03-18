<?php

function university_animal_clinic_scripts() {
	wp_enqueue_style( 'university-animal-clinic-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'university-animal-clinic-style', 'rtl', 'replace' );

    //Bootstrap
    wp_enqueue_style( 'university-animal-clinic-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    //owlcarousel
    wp_enqueue_style( 'university-animal-clinic-owl-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'university-animal-clinic-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

    //icomoon
    wp_enqueue_style( 'university-animal-clinic-icomoon', get_template_directory_uri() . '/assets/css/icomoon.css');

    //main styles
    wp_enqueue_style( 'university-animal-clinic-font', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
    wp_enqueue_style( 'university-animal-clinic-main-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style( 'university-animal-clinic-override-style', get_template_directory_uri() . '/assets/css/override.css');
    wp_enqueue_style( 'university-animal-clinic-main-responsive', get_template_directory_uri() . '/assets/css/responsive.css');

    //main scripts
	wp_enqueue_script( 'university-animal-clinic-lib', get_template_directory_uri() . '/assets/js/lib.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'university-animal-clinic-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'university-animal-clinic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'university_animal_clinic_scripts' );