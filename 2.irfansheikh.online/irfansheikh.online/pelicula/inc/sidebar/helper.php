<?php

if ( ! function_exists( 'pelicula_get_main_sidebar_config' ) ) {
	/**
	 * Function that return config variables for main sidebar area
	 *
	 * @return array
	 */
	function pelicula_get_main_sidebar_config() {
		
		// Config variables
		$config = apply_filters( 'pelicula_filter_main_sidebar_config', array(
			'title_tag'   => 'h4',
			'title_class' => 'qodef-widget-title'
		) );
		
		return $config;
	}
	
	add_filter( 'qode_framework_filter_main_sidebar_config', 'pelicula_get_main_sidebar_config' );
}

if ( ! function_exists( 'pelicula_register_main_sidebar' ) ) {
	/**
	 * Function that registers theme's main sidebar area
	 */
	function pelicula_register_main_sidebar() {
		
		// Sidebar config variables
		$config = pelicula_get_main_sidebar_config();
		
		register_sidebar(
			array(
				'id'            => 'main-sidebar',
				'name'          => esc_html__( 'Main Sidebar', 'pelicula' ),
				'description'   => esc_html__( 'In order to display widgets inside this area you need to set sidebar layout option inside general options or meta box options', 'pelicula' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s" data-area="main-sidebar">',
				'after_widget'  => '</div>',
				'before_title'  => '<'. esc_attr( $config['title_tag'] ) .' class="'. esc_attr( $config['title_class'] ) .'">',
				'after_title'   => '</'. esc_attr( $config['title_tag'] ) .'>'
			)
		);
	}
	
	add_action( 'widgets_init', 'pelicula_register_main_sidebar', 1 ); // Permission 1 is set to main sidebar be at the first place
}

if ( ! function_exists( 'pelicula_get_sidebar_name' ) ) {
	/**
	 * Function that return sidebar name
	 *
	 * @return string
	 */
	function pelicula_get_sidebar_name() {
		return apply_filters( 'pelicula_filter_sidebar_name', 'main-sidebar' );
	}
}

if ( ! function_exists( 'pelicula_get_sidebar_layout' ) ) {
	/**
	 * Function that return sidebar layout
	 *
	 * @return string
	 */
	function pelicula_get_sidebar_layout() {
		$sidebar_layout = apply_filters( 'pelicula_filter_sidebar_layout', 'no-sidebar' );
		
		if ( $sidebar_layout !== 'no-sidebar' && ! is_active_sidebar( pelicula_get_sidebar_name() ) ) {
			$sidebar_layout = 'no-sidebar';
		}
		
		return $sidebar_layout;
	}
}

if ( ! function_exists( 'pelicula_get_page_content_sidebar_classes' ) ) {
	/**
	 * Function that return classes for the page content when sidebar is enabled
	 *
	 * @return string
	 */
	function pelicula_get_page_content_sidebar_classes() {
		$layout  = pelicula_get_sidebar_layout();
		$classes = array( 'qodef-page-content-section' );
		
		switch ( $layout ) {
			case 'sidebar-33-right':
				$classes[] = 'qodef-col--8';
				break;
			case 'sidebar-25-right':
				$classes[] = 'qodef-col--9';
				break;
			case 'sidebar-33-left':
				$classes[] = 'qodef-col--8';
				$classes[] = 'qodef-col-push--4';
				break;
			case 'sidebar-25-left':
				$classes[] = 'qodef-col--9';
				$classes[] = 'qodef-col-push--3';
				break;
			default:
				$classes[] = 'qodef-col--12';
				break;
		}

		return implode( ' ', apply_filters( 'pelicula_filter_page_content_sidebar_classes', $classes, $layout ) );
	}
}

if ( ! function_exists( 'pelicula_get_page_sidebar_classes' ) ) {
	/**
	 * Function that return classes for the page sidebar when sidebar is enabled
	 *
	 * @return string
	 */
	function pelicula_get_page_sidebar_classes() {
		$layout  = pelicula_get_sidebar_layout();
		$classes = array( 'qodef-page-sidebar-section' );
		
		switch ( $layout ) {
			case 'sidebar-33-right':
				$classes[] = 'qodef-col--4';
				break;
			case 'sidebar-25-right':
				$classes[] = 'qodef-col--3';
				break;
			case 'sidebar-33-left':
				$classes[] = 'qodef-col--4';
				$classes[] = 'qodef-col-pull--8';
				break;
			case 'sidebar-25-left':
				$classes[] = 'qodef-col--3';
				$classes[] = 'qodef-col-pull--9';
				break;
		}
		
		return implode( ' ', apply_filters( 'pelicula_filter_page_sidebar_classes', $classes, $layout ) );
	}
}