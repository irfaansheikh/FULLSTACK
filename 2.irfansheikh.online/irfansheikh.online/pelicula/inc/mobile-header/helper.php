<?php

if ( ! function_exists( 'pelicula_load_page_mobile_header' ) ) {
	/**
	 * Function which loads page template module
	 */
	function pelicula_load_page_mobile_header() {
		// Include mobile header template
		echo apply_filters( 'pelicula_filter_mobile_header_template', pelicula_get_template_part( 'mobile-header', 'templates/mobile-header' ) );
	}
	
	add_action( 'pelicula_action_page_header_template', 'pelicula_load_page_mobile_header' );
}

if ( ! function_exists( 'pelicula_register_mobile_navigation_menus' ) ) {
	/**
	 * Function which registers navigation menus
	 */
	function pelicula_register_mobile_navigation_menus() {
		$navigation_menus = apply_filters( 'pelicula_filter_register_mobile_navigation_menus', array( 'mobile-navigation' => esc_html__( 'Mobile Navigation', 'pelicula' ) ) );
		
		if ( ! empty( $navigation_menus ) ) {
			register_nav_menus( $navigation_menus );
		}
	}
	
	add_action( 'pelicula_action_after_include_modules', 'pelicula_register_mobile_navigation_menus' );
}