<?php

if ( ! function_exists( 'pelicula_is_installed' ) ) {
	/**
	 * Function that checks if forward plugin installed
	 *
	 * @param $plugin string - plugin name
	 *
	 * @return bool
	 */
	function pelicula_is_installed( $plugin ) {
		
		switch ( $plugin ) {
			case 'framework';
				return class_exists( 'QodeFramework' );
				break;
			case 'core';
				return class_exists( 'PeliculaCore' );
				break;
			case 'woocommerce';
				return class_exists( 'WooCommerce' );
				break;
			case 'gutenberg-page';
				$current_screen = function_exists( 'get_current_screen' ) ? get_current_screen() : array();
				
				return method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor();
				break;
			case 'gutenberg-editor':
				return class_exists( 'WP_Block_Type' );
				break;
			default:
				return false;
		}
	}
}

if ( ! function_exists( 'pelicula_include_theme_is_installed' ) ) {
	/**
	 * Function that set case is installed element for framework functionality
	 *
	 * @param $installed bool
	 * @param $plugin string - plugin name
	 *
	 * @return bool
	 */
	function pelicula_include_theme_is_installed( $installed, $plugin ) {
		
		if ( $plugin === 'theme' ) {
			return class_exists( 'PeliculaHandler' );
		}
		
		return $installed;
	}
	
	add_filter( 'qode_framework_filter_is_plugin_installed', 'pelicula_include_theme_is_installed', 10, 2 );
}

if ( ! function_exists( 'pelicula_template_part' ) ) {
	/**
	 * Function that echo module template part.
	 *
	 * @param string $module name of the module from inc folder
	 * @param string $template full path of the template to load
	 * @param string $slug
	 * @param array  $params array of parameters to pass to template
	 */
	function pelicula_template_part( $module, $template, $slug = '', $params = array() ) {
		echo pelicula_get_template_part( $module, $template, $slug, $params );
	}
}

if ( ! function_exists( 'pelicula_get_template_part' ) ) {
	/**
	 * Function that load module template part.
	 *
	 * @param string $module name of the module from inc folder
	 * @param string $template full path of the template to load
	 * @param string $slug
	 * @param array  $params array of parameters to pass to template
	 *
	 * @return string - string containing html of template
	 */
	function pelicula_get_template_part( $module, $template, $slug = '', $params = array() ) {
		//HTML Content from template
		$html          = '';
		$template_path = PELICULA_INC_ROOT_DIR . '/' . $module;

		$temp = $template_path . '/' . $template;
		if ( is_array( $params ) && count( $params ) ) {
			extract( $params );
		}

		$template = '';
		
		if ( ! empty( $temp ) ) {
			if ( ! empty( $slug ) ) {
				$template = "{$temp}-{$slug}.php";
				
				if ( ! file_exists( $template ) ) {
					$template = $temp . '.php';
				}
			} else {
				$template = $temp . '.php';
			}
		}

		if ( $template ) {
			ob_start();
			include( $template );
			$html = ob_get_clean();
		}
		
		return $html;
	}
}

if ( ! function_exists( 'pelicula_get_page_id' ) ) {
	/**
	 * Function that returns current page id
	 * Additional conditional is to check if current page is any wp archive page (archive, category, tag, date etc.) and returns -1
	 *
	 * @return int
	 */
	function pelicula_get_page_id() {
		$page_id = get_queried_object_id();
		
		if ( pelicula_is_wp_template() ) {
			$page_id = -1;
		}
		
		return apply_filters( 'pelicula_filter_page_id', $page_id );
	}
}

if ( ! function_exists( 'pelicula_is_wp_template' ) ) {
	/**
	 * Function that checks if current page default wp page
	 *
	 * @return bool
	 */
	function pelicula_is_wp_template() {
		return is_archive() || is_search() || is_404() || ( is_front_page() && is_home() );
	}
}

if ( ! function_exists( 'pelicula_get_ajax_status' ) ) {
	/**
	 * Function that return status from ajax functions
	 *
	 * @param $status string - success or error
	 * @param $message string - ajax message value
	 * @param $data string|array - returned value
	 * @param $redirect string - url address
	 */
	function pelicula_get_ajax_status( $status, $message, $data = null, $redirect = '' ) {
		$response = array(
			'status'   => esc_attr( $status ),
			'message'  => esc_html( $message ),
			'data'     => $data,
			'redirect' => ! empty( $redirect ) ? esc_url( $redirect ) : ''
		);
		
		$output = json_encode( $response );
		
		exit( $output );
	}
}

if ( ! function_exists( 'pelicula_get_icon' ) ) {
	/**
	 * Function that return icon html
	 *
	 * @param $icon string - icon class name
	 * @param $icon_pack string - icon pack name
	 * @param $backup_text string - backup text label if framework is not installed
	 * @param $params array - icon parameters
	 *
	 * @return string|mixed
	 */
	function pelicula_get_icon( $icon, $icon_pack, $backup_text, $params = array() ) {
		$value = pelicula_is_installed( 'framework' ) && pelicula_is_installed( 'core' ) ? qode_framework_icons()->render_icon( $icon, $icon_pack, $params ) : $backup_text;
		
		return $value;
	}
}

if ( ! function_exists( 'pelicula_render_icon' ) ) {
	/**
	 * Function that render icon html
	 *
	 * @param $icon string - icon class name
	 * @param $icon_pack string - icon pack name
	 * @param $backup_text string - backup text label if framework is not installed
	 * @param $params array - icon parameters
	 */
	function pelicula_render_icon( $icon, $icon_pack, $backup_text, $params = array() ) {
		echo pelicula_get_icon( $icon, $icon_pack, $backup_text, $params );
	}
}

if ( ! function_exists( 'pelicula_get_button_element' ) ) {
	/**
	 * Function that returns button with provided params
	 *
	 * @param $params array - array of parameters
	 *
	 * @return string - string representing button html
	 */
	function pelicula_get_button_element( $params ) {
		if ( class_exists( 'PeliculaCoreButtonShortcode' ) ) {
			return PeliculaCoreButtonShortcode::call_shortcode( $params );
		} else {
			$link   = isset( $params['link'] ) ? $params['link'] : '#';
			$target = isset( $params['target'] ) ? $params['target'] : '_self';
			$text   = isset( $params['text'] ) ? $params['text'] : '';
			
			return '<a itemprop="url" class="qodef-theme-button" href="' . esc_url( $link ) . '" target="' . esc_attr( $target ) . '">' . esc_html( $text ) . '</a>';
		}
	}
}

if ( ! function_exists( 'pelicula_render_button_element' ) ) {
	/**
	 * Function that render button with provided params
	 *
	 * @param $params array - array of parameters
	 */
	function pelicula_render_button_element( $params ) {
		echo pelicula_get_button_element( $params );
	}
}

if ( ! function_exists( 'pelicula_class_attribute' ) ) {
	/**
	 * Function that render class attribute
	 *
	 * @param $class string
	 */
	function pelicula_class_attribute( $class ) {
		echo pelicula_get_class_attribute( $class );
	}
}

if ( ! function_exists( 'pelicula_get_class_attribute' ) ) {
	/**
	 * Function that return class attribute
	 *
	 * @param $class string
	 *
	 * @return string|mixed
	 */
	function pelicula_get_class_attribute( $class ) {
		$value = pelicula_is_installed( 'framework' ) ? qode_framework_get_class_attribute( $class ) : '';
		
		return $value;
	}
}

if ( ! function_exists( 'pelicula_get_post_value_through_levels' ) ) {
	/**
	 * Function that returns meta value if exists
	 *
	 * @param string $name name of option
	 * @param int    $post_id id of
	 *
	 * @return string value of option
	 */
	function pelicula_get_post_value_through_levels( $name, $post_id = null ) {
		return pelicula_is_installed( 'framework' ) && pelicula_is_installed( 'core' ) ? pelicula_core_get_post_value_through_levels( $name, $post_id ) : '';
	}
}

if ( ! function_exists( 'pelicula_get_space_value' ) ) {
	/**
	 * Function that returns spacing value based on selected option
	 *
	 * @param string $text_value - textual value of spacing
	 *
	 * @return int
	 */
	function pelicula_get_space_value( $text_value ) {
		return pelicula_is_installed( 'core' ) ? pelicula_core_get_space_value( $text_value ) : 0;
	}
}

if ( ! function_exists( 'pelicula_wp_kses_html' ) ) {
	/**
	 * Function that does escaping of specific html.
	 * It uses wp_kses function with predefined attributes array.
	 *
	 * @see wp_kses()
	 *
	 * @param string $type - type of html element
	 * @param string $content - string to escape
	 *
	 * @return string escaped output
	 */
	function pelicula_wp_kses_html( $type, $content ) {
		return pelicula_is_installed( 'framework' ) ? qode_framework_wp_kses_html( $type, $content ) : $content;
	}
}

if ( ! function_exists( 'pelicula_change_wp_video_shortcode_settings' ) ) {
	/**
	 * Function that changes basic settings for wp_video_shortcode
	 *
	 * @param string $output  Video shortcode HTML output.
	 * @param array  $atts    Array of video shortcode attributes.
	 *
	 * @return string HTML
	 */
	function pelicula_change_wp_video_shortcode_settings( $output, $atts ) {

		if ( wp_validate_boolean( $atts['autoplay'] ) ) {
			$output = preg_replace( '/(<video\b[^><]*)>/i', '$1 muted>', $output );
		}

		return $output;
	}

	add_filter( 'wp_video_shortcode', 'pelicula_change_wp_video_shortcode_settings', 10, 2 );
}

if ( ! function_exists( 'pelicula_arrow_left_svg' ) ) {
	function pelicula_arrow_left_svg() {
		
		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="9px">
					<path fill-rule="evenodd"  fill="rgb(17, 17, 17)" d="M14.000,5.000 L4.480,5.000 L4.480,9.000 L-0.000,4.499 L4.480,-0.001 L4.480,4.000 L14.000,4.000 L14.000,5.000 Z"/>
				</svg>';
		
		return $html;
	}
}

if ( ! function_exists( 'pelicula_arrow_right_svg' ) ) {
	function pelicula_arrow_right_svg() {
		
		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14px" height="9px">
					<path fill-rule="evenodd"  fill="rgb(17, 17, 17)" d="M14.000,4.499 L9.520,9.000 L9.520,5.000 L0.000,5.000 L0.000,4.000 L9.520,4.000 L9.520,-0.001 L14.000,4.499 Z"/>
				</svg>';
		
		return $html;
	}
}

if ( ! function_exists( 'pelicula_small_arrow_right_svg' ) ) {
	function pelicula_small_arrow_right_svg() {

		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8px" height="12px">
					<path fill-rule="evenodd"  fill="rgb(17, 17, 17)" d="M7.998,6.486 L2.496,11.988 L1.002,10.493 L5.239,6.257 L0.689,1.707 L2.104,0.293 L7.311,5.500 L7.161,5.649 L7.998,6.486 Z"/>
				</svg>';

		return $html;
	}
}

if ( ! function_exists( 'pelicula_opener_svg' ) ) {
	function pelicula_opener_svg() {

		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="39px" height="11px">
					<path fill-rule="evenodd"  fill="rgb(17, 17, 17)" d="M8.000,3.000 L8.000,-0.000 L39.000,-0.000 L39.000,3.000 L8.000,3.000 ZM31.000,11.000 L-0.000,11.000 L-0.000,8.000 L31.000,8.000 L31.000,11.000 Z"/>
				</svg>';

		return $html;
	}
}

if ( ! function_exists( 'pelicula_search_opener_svg' ) ) {
	function pelicula_search_opener_svg() {

		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="22px">
					<path fill-rule="evenodd"  stroke="rgb(0, 0, 0)" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M19.535,17.621 L18.121,19.035 L13.303,14.216 C11.999,15.313 10.338,16.000 8.500,16.000 C4.358,16.000 1.000,12.642 1.000,8.500 C1.000,4.358 4.358,1.000 8.500,1.000 C12.642,1.000 16.000,4.358 16.000,8.500 C16.000,10.082 15.505,11.545 14.669,12.754 L19.535,17.621 Z"/>
				</svg>';

		return $html;
	}
}