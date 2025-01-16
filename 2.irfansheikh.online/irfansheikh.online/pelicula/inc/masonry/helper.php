<?php

if ( ! function_exists( 'pelicula_include_masonry_scripts' ) ) {
	/**
	 * Function that include modules 3rd party scripts
	 */
	function pelicula_include_masonry_scripts() {
		wp_enqueue_script( 'isotope', PELICULA_INC_ROOT . '/masonry/assets/js/plugins/isotope.pkgd.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'packery', PELICULA_INC_ROOT . '/masonry/assets/js/plugins/packery-mode.pkgd.min.js', array( 'jquery' ), false, true );
	}
}

if ( ! function_exists( 'pelicula_enqueue_masonry_scripts_for_templates' ) ) {
	/**
	 * Function that enqueue modules 3rd party scripts for templates
	 */
	function pelicula_enqueue_masonry_scripts_for_templates() {
		$post_type = apply_filters( 'pelicula_filter_allowed_post_type_to_enqueue_masonry_scripts', '' );
		
		if ( ! empty( $post_type ) && is_singular( $post_type ) ) {
			pelicula_include_masonry_scripts();
		}
	}
	
	add_action( 'pelicula_action_before_main_js', 'pelicula_enqueue_masonry_scripts_for_templates' );
}

if ( ! function_exists( 'pelicula_enqueue_masonry_scripts_for_shortcodes' ) ) {
	/**
	 * Function that enqueue modules 3rd party scripts for shortcodes
	 *
	 * @param $atts array
	 */
	function pelicula_enqueue_masonry_scripts_for_shortcodes( $atts ) {
		
		if ( isset( $atts['behavior'] ) && $atts['behavior'] == 'masonry' ) {
			pelicula_include_masonry_scripts();
		}
	}
	
	add_action( 'pelicula_core_action_list_shortcodes_load_assets', 'pelicula_enqueue_masonry_scripts_for_shortcodes' );
}

if ( ! function_exists( 'pelicula_register_masonry_scripts_for_list_shortcodes' ) ) {
	/**
	 * Function that set module 3rd party scripts for list shortcodes
	 *
	 * @param array $scripts
	 *
	 * @return array
	 */
	function pelicula_register_masonry_scripts_for_list_shortcodes( $scripts ) {

		$scripts['isotope'] = array(
			'registered' => true
		);
		$scripts['packery'] = array(
			'registered' => true
		);

		return $scripts;
	}

	add_filter( 'pelicula_core_filter_register_list_shortcode_scripts', 'pelicula_register_masonry_scripts_for_list_shortcodes' );
}