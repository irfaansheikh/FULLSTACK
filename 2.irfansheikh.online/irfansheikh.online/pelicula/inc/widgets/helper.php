<?php

if ( ! function_exists( 'pelicula_modify_widget_title' ) ) {
	/**
	 * Function that modifies widget title
	 *
	 * @return array
	 */
	function pelicula_modify_widget_title( $title, $instance, $id_base ) {

		if ( $id_base !== 'rss' ) { // RSS widget is escaping all HTML in title

			$words = explode( ' ', $title );
			$words = is_array( $words ) ? array_filter( $words ) : false;

			if ( $words ) {
				$last_word = end( $words );
				if ( $last_word ) {
					$last_word_key           = key( $words );
					$words[ $last_word_key ] = '<span class="qodef-last-word">' . $last_word . '</span>';
				}
				$title = implode( ' ', $words );
			}
		}

		return $title;
	}

//	add_filter( 'widget_title', 'pelicula_modify_widget_title', 10, 3 );
}