<?php

if ( ! function_exists( 'pelicula_include_justified_gallery_scripts' ) ) {
	/**
	 * Function that enqueue modules 3rd party scripts
	 *
	 * @param $atts
	 */
	function pelicula_include_justified_gallery_scripts( $atts ) {
		
		if ( isset( $atts['behavior'] ) && $atts['behavior'] == 'justified-gallery' ) {
			wp_enqueue_script( 'justified-gallery', PELICULA_INC_ROOT . '/justified-gallery/assets/js/plugins/jquery.justifiedGallery.min.js', array( 'jquery' ), true );
		}
	}
	
	add_action( 'pelicula_core_action_list_shortcodes_load_assets', 'pelicula_include_justified_gallery_scripts' );
}

if ( ! function_exists( 'pelicula_register_justified_gallery_scripts_for_list_shortcodes' ) ) {
	/**
	 * Function that set module 3rd party scripts for list shortcodes
	 *
	 * @param array $scripts
	 *
	 * @return array
	 */
	function pelicula_register_justified_gallery_scripts_for_list_shortcodes( $scripts ) {

		$scripts['justified-gallery'] = array(
			'registered' => true
		);

		return $scripts;
	}

	add_filter( 'pelicula_core_filter_register_list_shortcode_scripts', 'pelicula_register_justified_gallery_scripts_for_list_shortcodes' );
}
