<?php

if ( ! function_exists( 'pelicula_set_404_page_inner_classes' ) ) {
	/**
	 * Function that return classes for the page inner div from header.php
	 *
	 * @param $classes string
	 *
	 * @return string
	 */
	function pelicula_set_404_page_inner_classes( $classes ) {
		
		if ( is_404() ) {
			$classes = 'qodef-content-full-width';
		}
		
		return $classes;
	}
	
	add_filter( 'pelicula_filter_page_inner_classes', 'pelicula_set_404_page_inner_classes' );
}

if ( ! function_exists( 'pelicula_get_404_page_parameters' ) ) {
	/**
	 * Function that set 404 page area content parameters
	 */
	function pelicula_get_404_page_parameters() {
		
		$params = array(
			'title'       => esc_html__( '404', 'pelicula' ),
			'text'        => esc_html__( 'Page you\'re looking for doesn\'t exist.', 'pelicula' ),
			'button_text' => esc_html__( 'Go Back', 'pelicula' )
		);
		
		return apply_filters( 'pelicula_filter_404_page_template_params', $params );
	}
}
