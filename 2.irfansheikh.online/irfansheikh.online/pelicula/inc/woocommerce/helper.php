<?php

if ( ! function_exists( 'pelicula_is_woo_page' ) ) {
	/**
	 * Function that check WooCommerce pages
	 *
	 * @param $page string
	 *
	 * @return bool
	 */
	function pelicula_is_woo_page( $page ) {
		switch ( $page ) {
			case 'shop':
				return function_exists( 'is_shop' ) && is_shop();
				break;
			case 'single':
				return is_singular( 'product' );
				break;
			case 'cart':
				return function_exists( 'is_cart' ) && is_cart();
				break;
			case 'checkout':
				return function_exists( 'is_checkout' ) && is_checkout();
				break;
			case 'account':
				return function_exists( 'is_account_page' ) && is_account_page();
				break;
			case 'category':
				return function_exists( 'is_product_category' ) && is_product_category();
				break;
			case 'tag':
				return function_exists( 'is_product_tag' ) && is_product_tag();
				break;
			case 'any':
				return (
					function_exists( 'is_shop' ) && is_shop() ||
					is_singular( 'product' ) ||
					function_exists( 'is_cart' ) && is_cart() ||
					function_exists( 'is_checkout' ) && is_checkout() ||
					function_exists( 'is_account_page' ) && is_account_page() ||
					function_exists( 'is_product_category' ) && is_product_category() ||
					function_exists( 'is_product_tag' ) && is_product_tag()
				);
				break;
			default:
				return false;
		}
	}
}

if ( ! function_exists( 'pelicula_get_woo_main_page_classes' ) ) {
	/**
	 * Function that return current WooCommerce page class name
	 *
	 * @return string
	 */
	function pelicula_get_woo_main_page_classes() {
		$classes = array();

		if ( pelicula_is_woo_page( 'shop' ) ) {
			$classes[] = 'qodef--list';
		}

		if ( pelicula_is_woo_page( 'single' ) ) {
			$classes[] = 'qodef--single';

			if ( pelicula_get_post_value_through_levels( 'qodef_woo_single_enable_image_lightbox' ) === 'photo-swipe' ) {
				$classes[] = 'qodef-popup--photo-swipe';
			}

			if ( pelicula_get_post_value_through_levels( 'qodef_woo_single_enable_image_lightbox' ) === 'magnific-popup' ) {
				$classes[] = 'qodef-popup--magnific-popup';
				// add classes to initialize lightbox from theme
				$classes[] = 'qodef-magnific-popup';
				$classes[] = 'qodef-popup-gallery';
			}
		}

		if ( pelicula_is_woo_page( 'cart' ) ) {
			$classes[] = 'qodef--cart';
		}

		if ( pelicula_is_woo_page( 'checkout' ) ) {
			$classes[] = 'qodef--checkout';
		}

		if ( pelicula_is_woo_page( 'account' ) ) {
			$classes[] = 'qodef--account';
		}

		return apply_filters( 'pelicula_filter_main_page_classes', implode( ' ', $classes ) );
	}
}

if ( ! function_exists( 'pelicula_woo_get_global_product' ) ) {
	/**
	 * Function that return global WooCommerce object
	 *
	 * @return object
	 */
	function pelicula_woo_get_global_product() {
		global $product;

		return $product;
	}
}

if ( ! function_exists( 'pelicula_woo_get_main_shop_page_id' ) ) {
	/**
	 * Function that return main shop page ID
	 *
	 * @return int
	 */
	function pelicula_woo_get_main_shop_page_id() {
		// Get page id from options table
		$shop_id = get_option( 'woocommerce_shop_page_id' );

		if ( ! empty( $shop_id ) ) {
			return $shop_id;
		}

		return false;
	}
}

if ( ! function_exists( 'pelicula_woo_set_main_shop_page_id' ) ) {
	/**
	 * Function that set main shop page ID for get_post_meta options
	 *
	 * @param $post_id int
	 *
	 * @return int
	 */
	function pelicula_woo_set_main_shop_page_id( $post_id ) {

		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'single' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$shop_id = pelicula_woo_get_main_shop_page_id();

			if ( ! empty( $shop_id ) ) {
				$post_id = $shop_id;
			}
		}

		return $post_id;
	}

	add_filter( 'pelicula_filter_page_id', 'pelicula_woo_set_main_shop_page_id' );
	add_filter( 'qode_framework_filter_page_id', 'pelicula_woo_set_main_shop_page_id' );
}

if ( ! function_exists( 'pelicula_woo_set_page_title_text' ) ) {
	/**
	 * Function that returns current page title text for WooCommerce pages
	 *
	 * @param $title string
	 *
	 * @return string
	 */
	function pelicula_woo_set_page_title_text( $title ) {

		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'single' ) ) {
			$shop_id = pelicula_woo_get_main_shop_page_id();

			$title = ! empty( $shop_id ) ? get_the_title( $shop_id ) : esc_html__( 'Shop', 'pelicula' );
		} else if ( pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$taxonomy_slug = pelicula_is_woo_page( 'tag' ) ? 'product_tag' : 'product_cat';
			$taxonomy      = get_term( get_queried_object_id(), $taxonomy_slug );

			if ( ! empty( $taxonomy ) ) {
				$title = esc_html( $taxonomy->name );
			}
		}

		return $title;
	}

	add_filter( 'pelicula_filter_page_title_text', 'pelicula_woo_set_page_title_text' );
}

if ( ! function_exists( 'pelicula_woo_breadcrumbs_title' ) ) {
	function pelicula_woo_breadcrumbs_title( $wrap_child, $settings ) {
		
		if ( pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$wrap_child    = '';
			$taxonomy_slug = pelicula_is_woo_page( 'tag' ) ? 'product_tag' : 'product_cat';
			$taxonomy      = get_term( get_queried_object_id(), $taxonomy_slug );
			
			if ( isset( $taxonomy->parent ) && $taxonomy->parent !== 0 ) {
				$parent     = get_term( $taxonomy->parent );
				$wrap_child .= sprintf( $settings['link'], get_term_link( $parent->term_id ), $parent->name ) . $settings['separator'];
			}
			
			if ( ! empty( $taxonomy ) ) {
				$wrap_child .= sprintf( $settings['current_item'], esc_attr( $taxonomy->name ) );
			}
			
		} elseif ( pelicula_is_woo_page( 'shop' ) ) {
			$shop_id    = pelicula_woo_get_main_shop_page_id();
			$shop_title = ! empty( $shop_id ) ? get_the_title( $shop_id ) : esc_html__( 'Shop', 'pelicula' );
			
			$wrap_child .= sprintf( $settings['current_item'], $shop_title );
			
		} else if ( pelicula_is_woo_page( 'single' ) ) {
			$wrap_child = '';
			$categories = wp_get_post_terms( get_the_ID(), 'product_cat' );
			
			if ( ! empty ( $categories ) ) {
				$category = $categories[0];
				if ( isset( $category->parent ) && $category->parent !== 0 ) {
					$parent     = get_term( $category->parent );
					$wrap_child .= sprintf( $settings['link'], get_term_link( $parent->term_id ), $parent->name ) . $settings['separator'];
				}
				$wrap_child .= sprintf( $settings['link'], get_term_link( $category ), $category->name ) . $settings['separator'];
			}
			
			$wrap_child .= sprintf( $settings['current_item'], get_the_title() );
		}
		
		return $wrap_child;
	}
	
	add_filter( 'pelicula_core_filter_breadcrumbs_content', 'pelicula_woo_breadcrumbs_title', 10, 2 );
}

if ( ! function_exists( 'pelicula_woo_single_add_theme_supports' ) ) {
	/**
	 * Function that add native WooCommerce supports
	 */
	function pelicula_woo_single_add_theme_supports() {
		// Add featured image zoom functionality on product single page
		$is_zoom_enabled = pelicula_get_post_value_through_levels( 'qodef_woo_single_enable_image_zoom' ) !== 'no';

		if ( $is_zoom_enabled ) {
			add_theme_support( 'wc-product-gallery-zoom' );
		}

		// Add photo swipe lightbox functionality on product single images page
		$is_photo_swipe_enabled = pelicula_get_post_value_through_levels( 'qodef_woo_single_enable_image_lightbox' ) === 'photo-swipe';

		if ( $is_photo_swipe_enabled ) {
			add_theme_support( 'wc-product-gallery-lightbox' );
		}
	}

	add_action( 'wp_loaded', 'pelicula_woo_single_add_theme_supports', 11 ); // permission 11 is set because options are init with permission 10 inside framework plugin
}

if ( ! function_exists( 'pelicula_woo_single_disable_page_title' ) ) {
	/**
	 * Function that disable page title area for single product page
	 *
	 * @param $enable_page_title bool
	 *
	 * @return bool
	 */
	function pelicula_woo_single_disable_page_title( $enable_page_title ) {
		$is_enabled = pelicula_get_post_value_through_levels( 'qodef_woo_single_enable_page_title' ) !== 'no';

		if ( ! $is_enabled && pelicula_is_woo_page( 'single' ) ) {
			$enable_page_title = false;
		}

		return $enable_page_title;
	}

	add_filter( 'pelicula_filter_enable_page_title', 'pelicula_woo_single_disable_page_title' );
}

if ( ! function_exists( 'pelicula_woo_single_thumb_images_position' ) ) {
	/**
	 * Function that changes the layout of thumbnails on single product page
	 */
	function pelicula_woo_single_thumb_images_position( $classes ) {
		$product_thumbnail_position = pelicula_is_installed( 'core' ) ? pelicula_get_post_value_through_levels( 'qodef_woo_single_thumb_images_position' ) : 'below';

		if ( ! empty( $product_thumbnail_position ) ) {
			$classes[] = 'qodef-position--' . $product_thumbnail_position;
		}

		return $classes;
	}

	add_filter( 'woocommerce_single_product_image_gallery_classes', 'pelicula_woo_single_thumb_images_position' );
}

if ( ! function_exists( 'pelicula_set_woo_custom_sidebar_name' ) ) {
	/**
	 * Function that return sidebar name
	 *
	 * @param $sidebar_name string
	 *
	 * @return string
	 */
	function pelicula_set_woo_custom_sidebar_name( $sidebar_name ) {
	
		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$option = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_custom_sidebar' );
			
			if ( isset( $option ) && ! empty( $option ) ) {
				$sidebar_name = $option;
			}
		}

		return $sidebar_name;
	}

	add_filter( 'pelicula_filter_sidebar_name', 'pelicula_set_woo_custom_sidebar_name' );
}

if ( ! function_exists( 'pelicula_set_woo_sidebar_layout' ) ) {
	/**
	 * Function that return sidebar layout
	 *
	 * @param $layout string
	 *
	 * @return string
	 */
	function pelicula_set_woo_sidebar_layout( $layout ) {
		
		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$option = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_sidebar_layout' );

			if ( isset( $option ) && ! empty( $option ) ) {
				$layout = $option;
			}
		}

		return $layout;
	}

	add_filter( 'pelicula_filter_sidebar_layout', 'pelicula_set_woo_sidebar_layout' );
}

if ( ! function_exists( 'pelicula_set_woo_sidebar_grid_gutter_classes' ) ) {
	/**
	 * Function that returns grid gutter classes
	 *
	 * @param $classes string
	 *
	 * @return string
	 */
	function pelicula_set_woo_sidebar_grid_gutter_classes( $classes ) {
		
		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$option = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_sidebar_grid_gutter' );
			
			if ( isset( $option ) && ! empty( $option ) ) {
				$classes = 'qodef-gutter--' . esc_attr( $option );
			}
		}

		return $classes;
	}

	add_filter( 'pelicula_filter_grid_gutter_classes', 'pelicula_set_woo_sidebar_grid_gutter_classes' );
}

if ( ! function_exists( 'pelicula_set_woo_reviews_form' ) ) {
	/**
	 * Function that sets woo reviews form
	 *
	 * @param $comment_form_params array
	 *
	 * @return array
	 */
	function pelicula_set_woo_reviews_form( $comment_form_params ) {
		
		$commenter                = wp_get_current_commenter();
		$name_email_required      = (bool) get_option( 'require_name_email', 1 );
		$name_email_aria_required = ( $name_email_required ? " aria-required='true'" : '' );
		
		if ( wc_review_ratings_enabled() ) {
			$comment_form_params['comment_field'] = '<div class="comment-form-rating"><label for="rating">' . esc_html__( 'Your rating', 'pelicula' ) . '</label><select name="rating" id="rating" required>
				<option value="">' . esc_html__( 'Rate&hellip;', 'pelicula' ) . '</option>
				<option value="5">' . esc_html__( 'Perfect', 'pelicula' ) . '</option>
				<option value="4">' . esc_html__( 'Good', 'pelicula' ) . '</option>
				<option value="3">' . esc_html__( 'Average', 'pelicula' ) . '</option>
				<option value="2">' . esc_html__( 'Not that bad', 'pelicula' ) . '</option>
				<option value="1">' . esc_html__( 'Very poor', 'pelicula' ) . '</option>
			</select></div>';
		}
		
		$comment_form_params['comment_field'] .= '<p class="comment-form-comment"><textarea id="comment" placeholder="' . esc_attr__( 'Your review *', 'pelicula' ) . '" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';
		$comment_form_params['fields']['author'] = '<p class="comment-form-author"><input id="author" name="author" placeholder="' . esc_attr__( 'Your Name *', 'pelicula' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $name_email_aria_required . ' /></p>';
		$comment_form_params['fields']['email'] = '<p class="comment-form-email"><input id="email" name="email" placeholder="' . esc_attr__( 'Your E-mail *', 'pelicula' ) . '" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" ' . $name_email_aria_required . ' /></p>';
		$comment_form_params['fields']['url'] = '<p class="comment-form-url"><input id="url" name="url" placeholder="' . esc_attr__( 'Your Website', 'pelicula' ) . '" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>';
		
		return $comment_form_params;
	}
	
	add_filter( 'woocommerce_product_review_comment_form_args', 'pelicula_set_woo_reviews_form' );
}