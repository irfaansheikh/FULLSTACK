<?php

if ( ! function_exists( 'pelicula_get_blog_holder_classes' ) ) {
	/**
	 * Function that return classes for the main blog holder
	 *
	 * @return string
	 */
	function pelicula_get_blog_holder_classes() {
		$classes = array();
		
		if ( is_single() ) {
			$classes[] = 'qodef--single';
		} else {
			$classes[] = 'qodef--list';
		}
		
		return implode( ' ', apply_filters( 'pelicula_filter_blog_holder_classes', $classes ) );
	}
}

if ( ! function_exists( 'pelicula_get_blog_list_excerpt_length' ) ) {
	/**
	 * Function that return number of characters for excerpt on blog list page
	 *
	 * @return int
	 */
	function pelicula_get_blog_list_excerpt_length() {
		$length = apply_filters( 'pelicula_filter_blog_list_excerpt_length', 180 );
		
		return intval( $length );
	}
}

if ( ! function_exists( 'pelicula_post_has_read_more' ) ) {
	/**
	 * Function that checks if current post has read more tag set
	 *
	 * @return int position of read more tag text. It will return false if read more tag isn't set
	 */
	function pelicula_post_has_read_more() {
		global $post;
		
		return ! empty( $post ) ? strpos( $post->post_content, '<!--more-->' ) : false;
	}
}

if ( ! function_exists( 'pelicula_get_post_media_params' ) ) {
	/**
	 * Function that gets post media params
	 *
	 * @return array ( 'media', 'has_post_thumbnail' )
	 */
	function pelicula_get_post_media_params() {

		$params = array(
			'media'              => false,
			'has_post_thumbnail' => false,
			'exception'          => false
		);
		switch ( get_post_format() ) {
			case 'gallery':
				$gallery_meta = get_post_meta( get_the_ID(), 'qodef_post_format_gallery_images', true );
				if ( ! empty( $gallery_meta ) ) {
					$params['media'] = $gallery_meta;
				} else {
					$params['has_post_thumbnail'] = has_post_thumbnail();
				}
				break;
			case 'video':
				$video_meta = get_post_meta( get_the_ID(), 'qodef_post_format_video_url', true );
				if ( ! empty( $video_meta ) ) {
					$params['media']     = $video_meta;
					$params['exception'] = true;
				} else {
					$params['has_post_thumbnail'] = has_post_thumbnail();
				}
				break;
			case 'audio':
				$audio_meta = get_post_meta( get_the_ID(), 'qodef_post_format_audio_url', true );
				if ( ! empty( $audio_meta ) ) {
					$params['media']     = $audio_meta;
					$params['exception'] = true;
				} else {
					$params['has_post_thumbnail'] = has_post_thumbnail();
				}
				break;
			default:
				$params['has_post_thumbnail'] = has_post_thumbnail();
				break;
		}

		return $params;
	}
}

if ( ! function_exists( 'pelicula_add_blog_post_classes' ) ) {
	/**
	 * Function that adds blog post classes
	 *
	 * @param $classes array
	 *
	 * @return array
	 */
	function pelicula_add_blog_post_classes( $classes ) {

		$params = pelicula_get_post_media_params();

		if ( ! empty ( $params['media'] ) || $params['has_post_thumbnail'] ) {
			$classes[] = 'qodef-has-post-media';
		}

		if ( $params['exception'] ) {
			$classes[] = 'qodef-exception';
		}

		return $classes;
	}

	add_filter( 'pelicula_filter_blog_post_classes', 'pelicula_add_blog_post_classes', 8 );
}

if ( ! function_exists( 'pelicula_quote_svg' ) ) {
	function pelicula_quote_svg() {

		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93px" height="82px">
					<path fill-rule="evenodd"  fill="rgb(54, 54, 54)" d="M77.733,44.000 L91.000,44.000 L91.000,82.000 L53.000,82.000 L53.000,47.000 L75.000,0.000 L93.000,0.000 L77.733,44.000 ZM38.000,44.000 L38.000,82.000 L-0.000,82.000 L-0.000,47.000 L22.000,0.000 L40.000,0.000 L24.733,44.000 L38.000,44.000 Z"/>
				</svg>';

		return $html;
	}
}

if ( ! function_exists( 'pelicula_link_svg' ) ) {
	function pelicula_link_svg() {

		$html = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="79px" height="80px">
					<path fill-rule="evenodd"  fill="rgb(54, 54, 54)" d="M66.000,80.000 L13.000,80.000 L-0.000,80.000 L-0.000,67.000 L-0.000,13.000 L-0.000,-0.000 L13.000,-0.000 L26.000,-0.000 L26.000,13.000 L13.000,13.000 L13.000,67.000 L66.000,67.000 L66.000,46.000 L79.000,46.000 L79.000,67.000 L79.000,80.000 L66.000,80.000 ZM46.000,47.000 L33.000,34.000 L53.000,14.000 L40.000,-0.000 L79.000,-0.000 L79.000,40.000 L66.000,27.000 L46.000,47.000 Z"/>
				</svg>';

		return $html;
	}
}