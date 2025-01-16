<?php

/**
 * Global templates hooks
 */

if ( ! function_exists( 'pelicula_add_main_woo_page_template_holder' ) ) {
	/**
	 * Function that render additional content for main shop page
	 */
	function pelicula_add_main_woo_page_template_holder() {
		echo '<main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef--no-bottom-space ' . esc_attr( pelicula_get_grid_gutter_classes() ) . '"><div class="qodef-grid-inner clear">';
	}
}

if ( ! function_exists( 'pelicula_add_main_woo_page_template_holder_end' ) ) {
	/**
	 * Function that render additional content for main shop page
	 */
	function pelicula_add_main_woo_page_template_holder_end() {
		echo '</div></main>';
	}
}

if ( ! function_exists( 'pelicula_add_main_woo_page_holder' ) ) {
	/**
	 * Function that render additional content around WooCommerce pages
	 */
	function pelicula_add_main_woo_page_holder() {
		$classes = array();
		
		// add class to pages with sidebar and on single page
		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) || pelicula_is_woo_page( 'single' ) ) {
			$classes[] = 'qodef-grid-item';
		}
		
		// add class to pages with sidebar
		if ( pelicula_is_woo_page( 'shop' ) || pelicula_is_woo_page( 'category' ) || pelicula_is_woo_page( 'tag' ) ) {
			$classes[] = pelicula_get_page_content_sidebar_classes();
		}
		
		$classes[] = pelicula_get_woo_main_page_classes();

		echo '<div id="qodef-woo-page" class="' . implode( ' ', $classes ) . '">';
	}
}

if ( ! function_exists( 'pelicula_add_main_woo_page_holder_end' ) ) {
	/**
	 * Function that render additional content around WooCommerce pages
	 */
	function pelicula_add_main_woo_page_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_main_woo_page_sidebar_holder' ) ) {
	/**
	 * Function that render sidebar layout for main shop page
	 */
	function pelicula_add_main_woo_page_sidebar_holder() {
		
		if ( ! is_singular( 'product' ) ) {
			// Include page content sidebar
			pelicula_template_part( 'sidebar', 'templates/sidebar' );
		}
	}
}

if ( ! function_exists( 'pelicula_woo_render_product_categories' ) ) {
	/**
	 * Function that render product categories
	 *
	 * @param $before string
	 * @param $after string
	 */
	function pelicula_woo_render_product_categories( $before = '', $after = '' ) {
		echo pelicula_woo_get_product_categories( $before, $after );
	}
}

if ( ! function_exists( 'pelicula_woo_get_product_categories' ) ) {
	/**
	 * Function that render product categories
	 *
	 * @param $before string
	 * @param $after string
	 *
	 * @return string
	 */
	function pelicula_woo_get_product_categories( $before = '', $after = '' ) {
		$product = pelicula_woo_get_global_product();
		
		return ! empty( $product ) ? wc_get_product_category_list( $product->get_id(), '<span class="qodef-category-separator"></span>', $before, $after ) : '';
	}
}

/**
 * Shop page templates hooks
 */

if ( ! function_exists( 'pelicula_add_results_and_ordering_holder' ) ) {
	/**
	 * Function that render additional content around results and ordering templates on main shop page
	 */
	function pelicula_add_results_and_ordering_holder() {
		echo '<div class="qodef-woo-results">';
	}
}

if ( ! function_exists( 'pelicula_add_results_and_ordering_holder_end' ) ) {
	/**
	 * Function that render additional content around results and ordering templates on main shop page
	 */
	function pelicula_add_results_and_ordering_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_holder' ) ) {
	/**
	 * Function that render additional content around product list item on main shop page
	 */
	function pelicula_add_product_list_item_holder() {
		echo '<div class="qodef-woo-product-inner qodef-e-holder-main qodef-has-post-media">';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_holder_end' ) ) {
	/**
	 * Function that render additional content around product list item on main shop page
	 */
	function pelicula_add_product_list_item_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_image_holder' ) ) {
	/**
	 * Function that render additional content around image template on main shop page
	 */
	function pelicula_add_product_list_item_image_holder() {
		echo '<div class="qodef-woo-product-image">';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_image_holder_end' ) ) {
	/**
	 * Function that render additional content around image template on main shop page
	 */
	function pelicula_add_product_list_item_image_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_additional_image_holder' ) ) {
	/**
	 * Function that render additional content around image and sale templates on main shop page
	 */
	function pelicula_add_product_list_item_additional_image_holder() {
		echo '<div class="qodef-woo-product-image-inner">';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_additional_image_holder_end' ) ) {
	/**
	 * Function that render additional content around image and sale templates on main shop page
	 */
	function pelicula_add_product_list_item_additional_image_holder_end() {
		// Hook to include additional content inside product list item image
		do_action( 'pelicula_action_product_list_item_additional_image_content' );
		
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_content_holder' ) ) {
	/**
	 * Function that render additional content around product info on main shop page
	 */
	function pelicula_add_product_list_item_content_holder() {
		echo '<div class="qodef-woo-product-content qodef-e-content-main">';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_content_holder_end' ) ) {
	/**
	 * Function that render additional content around product info on main shop page
	 */
	function pelicula_add_product_list_item_content_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_list_item_categories' ) ) {
	/**
	 * Function that render product categories
	 */
	function pelicula_add_product_list_item_categories() {
		pelicula_woo_render_product_categories( '<div class="qodef-woo-product-categories">', '</div>' );
	}
}

/**
 * Product single page templates hooks
 */

if ( ! function_exists( 'pelicula_add_product_single_content_holder' ) ) {
	/**
	 * Function that render additional content around image and summary templates on single product page
	 */
	function pelicula_add_product_single_content_holder() {
		echo '<div class="qodef-woo-single-inner">';
	}
}

if ( ! function_exists( 'pelicula_add_product_single_content_holder_end' ) ) {
	/**
	 * Function that render additional content around image and summary templates on single product page
	 */
	function pelicula_add_product_single_content_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_add_product_single_image_holder' ) ) {
	/**
	 * Function that render additional content around featured image on single product page
	 */
	function pelicula_add_product_single_image_holder() {
		echo '<div class="qodef-woo-single-image">';
	}
}

if ( ! function_exists( 'pelicula_add_product_single_image_holder_end' ) ) {
	/**
	 * Function that render additional content around featured image on single product page
	 */
	function pelicula_add_product_single_image_holder_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_woo_product_render_social_share_html' ) ) {
	/**
	 * Function that render social share html
	 */
	function pelicula_woo_product_render_social_share_html() {
		
		if ( class_exists( 'PeliculaCoreSocialShareShortcode' ) ) {
			$params           = array();
			$params['layout'] = 'list';
			$params['title']  = esc_html__( 'Share:', 'pelicula' );
			
			echo PeliculaCoreSocialShareShortcode::call_shortcode( $params );
		}
	}
}

/**
 * Override default WooCommerce templates
 */

if ( ! function_exists( 'pelicula_woo_disable_page_heading' ) ) {
	/**
	 * Function that disable heading template on main shop page
	 *
	 * @return bool
	 */
	function pelicula_woo_disable_page_heading() {
		return false;
	}
}

if ( ! function_exists( 'pelicula_add_product_list_holder' ) ) {
	/**
	 * Function that add additional content around product lists on main shop page
	 *
	 * @param $html string
	 *
	 * @return string which contains html content
	 */
	function pelicula_add_product_list_holder( $html ) {
		$classes = array();
		$layout  = pelicula_get_post_value_through_levels( 'qodef_product_list_item_layout' );
		$option  = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_columns_space' );
		
		if ( ! empty( $layout ) ) {
			$classes[] = 'qodef-item-layout--' . $layout;
		}
		
		if ( ! empty( $option ) ) {
			$classes[] = 'qodef-gutter--' . $option;
		}
		
		$classes = implode( ' ', $classes );
		
		return '<div class="qodef-woo-product-list ' . esc_attr( $classes ) . '">' . $html;
	}
}

if ( ! function_exists( 'pelicula_add_product_list_holder_end' ) ) {
	/**
	 * Function that add additional content around product lists on main shop page
	 *
	 * @param $html string
	 *
	 * @return string which contains html content
	 */
	function pelicula_add_product_list_holder_end( $html ) {
		return $html . '</div>';
	}
}

if ( ! function_exists( 'pelicula_woo_product_list_columns' ) ) {
	/**
	 * Function that set number of columns for main shop page
	 *
	 * @param $columns int
	 *
	 * @return int
	 */
	function pelicula_woo_product_list_columns( $columns ) {
		$option = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_columns' );
		
		if ( ! empty( $option ) ) {
			$columns = intval( $option );
		} else {
			$columns = 4;
		}
		
		return $columns;
	}
}

if ( ! function_exists( 'pelicula_woo_products_per_page' ) ) {
	/**
	 * Function that set number of items for main shop page
	 *
	 * @param $products_per_page int
	 *
	 * @return int
	 */
	function pelicula_woo_products_per_page( $products_per_page ) {
		$option = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_products_per_page' );

		if ( ! empty( $option ) ) {
			$products_per_page = intval( $option );
		}
		
		return $products_per_page;
	}
}

if ( ! function_exists( 'pelicula_woo_pagination_args' ) ) {
	/**
	 * Function that override pagination args on main shop page
	 *
	 * @param $args array
	 *
	 * @return array
	 */
	function pelicula_woo_pagination_args( $args ) {
		$args['prev_text']          = pelicula_arrow_left_svg();
		$args['next_text']          = pelicula_arrow_right_svg();
		$args['type']               = 'plain';

		return $args;
	}
}

if ( ! function_exists( 'pelicula_add_single_product_classes' ) ) {
	/**
	 * Function that render additional content around WooCommerce pages
	 */
	function pelicula_add_single_product_classes( $classes, $class = '', $post_id = 0 ) {
		if ( ! $post_id || ! in_array( get_post_type( $post_id ), array( 'product', 'product_variation' ), true ) ) {
			return $classes;
		}
		
		$product = wc_get_product( $post_id );
		
		if ( $product ) {
			$new = get_post_meta( $post_id, 'qodef_show_new_sign', true );
			
			if ( $new === 'yes' ) {
				$classes[] = 'new';
			}
		}
		
		return $classes;
	}
}

if ( ! function_exists( 'pelicula_woo_sale_flash' ) ) {
	/**
	 * Function that override on sale template for product
	 *
	 * @return string which contains html content
	 */
	function pelicula_woo_sale_flash() {
		$product = pelicula_woo_get_global_product();
		
		return '<span class="qodef-woo-product-mark qodef-woo-onsale">' . pelicula_woo_get_woocommerce_sale( $product ) . '</span>';
	}
}

if ( ! function_exists( 'pelicula_woo_get_woocommerce_sale' ) ) {
	function pelicula_woo_get_woocommerce_sale( $product ) {
		$enable_percent_mark = pelicula_get_post_value_through_levels( 'qodef_woo_enable_percent_sign_value' );
		$price               = floatval( $product->get_regular_price() );
		$sale_price          = floatval( $product->get_sale_price() );
		
		if ( $price > 0 && $enable_percent_mark === 'yes' ) {
			return '-' . ( 100 - round( ( $sale_price * 100 ) / $price ) ) . '%';
		} else {
			return esc_html__( 'Sale', 'pelicula' );
		}
	}
}

if ( ! function_exists( 'pelicula_add_out_of_stock_mark_on_product' ) ) {
	/**
	 * Function for adding out of stock template for product
	 */
	function pelicula_add_out_of_stock_mark_on_product() {
		$product = pelicula_woo_get_global_product();
		
		if ( ! empty( $product ) && ! $product->is_in_stock() ) {
			echo pelicula_get_out_of_stock_mark();
		}
	}
}

if ( ! function_exists( 'pelicula_get_out_of_stock_mark' ) ) {
	/**
	 * Function for adding out of stock template for product
	 *
	 * @return string
	 */
	function pelicula_get_out_of_stock_mark() {
		return '<span class="qodef-woo-product-mark qodef-out-of-stock">' . esc_html__( 'Sold', 'pelicula' ) . '</span>';
	}
}

if ( ! function_exists( 'pelicula_add_new_mark_on_product' ) ) {
	/**
	 * Function for adding out of stock template for product
	 */
	function pelicula_add_new_mark_on_product() {
		$product = pelicula_woo_get_global_product();
		
		if ( ! empty( $product ) && $product->get_id() !== '' ) {
			echo pelicula_get_new_mark( $product->get_id() );
		}
	}
}

if ( ! function_exists( 'pelicula_get_new_mark' ) ) {
	/**
	 * Function for adding out of stock template for product
	 *
	 * @param $product_id int
	 *
	 * @return string
	 */
	function pelicula_get_new_mark( $product_id ) {
		$option = get_post_meta( $product_id, 'qodef_show_new_sign', true );
		
		if ( $option === 'yes' ) {
			return '<span class="qodef-woo-product-mark qodef-new">' . esc_html__( 'New', 'pelicula' ) . '</span>';
		}
		
		return false;
	}
}

if ( ! function_exists( 'pelicula_woo_shop_loop_item_title' ) ) {
	/**
	 * Function that override product list item title template
	 */
	function pelicula_woo_shop_loop_item_title() {
		$option    = pelicula_get_post_value_through_levels( 'qodef_woo_product_list_title_tag' );
		$title_tag = ! empty( $option ) ? esc_attr( $option ) : 'h4';
		
		echo '<' . $title_tag . ' class="qodef-woo-product-title qodef-e-title-main qodef-woo-product-title woocommerce-loop-product__title"><a itemprop="url" class="qodef-woo-product-title-link" href="' . get_the_permalink() . '">' . get_the_title() . '</a></' . $title_tag . '>';
	}
}

if ( ! function_exists( 'pelicula_woo_template_single_title' ) ) {
	/**
	 * Function that override product single item title template
	 */
	function pelicula_woo_template_single_title() {
		$option    = pelicula_get_post_value_through_levels( 'qodef_woo_single_title_tag' );
		$title_tag = ! empty( $option ) ? esc_attr( $option ) : 'h2';
		
		echo '<' . $title_tag . ' class="qodef-woo-product-title product_title entry-title">' . get_the_title() . '</' . $title_tag . '>';
	}
}

if ( ! function_exists( 'pelicula_woo_single_thumbnail_images_columns' ) ) {
	/**
	 * Function that set number of columns for thumbnail images on single product page
	 *
	 * @param $columns int
	 *
	 * @return int
	 */
	function pelicula_woo_single_thumbnail_images_columns( $columns ) {
		$option = pelicula_get_post_value_through_levels( 'qodef_woo_single_thumbnail_images_columns' );
		
		if ( ! empty( $option ) ) {
			$columns = intval( $option );
		}
		
		return $columns;
	}
}

if ( ! function_exists( 'pelicula_woo_single_thumbnail_images_size' ) ) {
	/**
	 * Function that set thumbnail images size on single product page
	 *
	 * @param $size string
	 *
	 * @return string
	 */
	function pelicula_woo_single_thumbnail_images_size( $size ) {
		return apply_filters( 'pelicula_filter_woo_single_thumbnail_size', 'woocommerce_thumbnail' );
	}
}

if ( ! function_exists( 'pelicula_woo_single_thumbnail_images_wrapper' ) ) {
	/**
	 * Function that add additional wrapper around thumbnail images on single product
	 */
	function pelicula_woo_single_thumbnail_images_wrapper() {
		echo '<div class="qodef-woo-thumbnails-wrapper">';
	}
}

if ( ! function_exists( 'pelicula_woo_single_thumbnail_images_wrapper_end' ) ) {
	/**
	 * Function that add additional wrapper around thumbnail images on single product
	 */
	function pelicula_woo_single_thumbnail_images_wrapper_end() {
		echo '</div>';
	}
}

if ( ! function_exists( 'pelicula_woo_single_related_product_list_columns' ) ) {
	/**
	 * Function that set number of columns for related product list on single product page
	 *
	 * @param $args array
	 *
	 * @return array
	 */
	function pelicula_woo_single_related_product_list_columns( $args ) {
		$option = pelicula_get_post_value_through_levels( 'qodef_woo_single_related_product_list_columns' );
		
		if ( ! empty( $option ) ) {
			$args['posts_per_page'] = intval( $option );
			$args['columns']        = intval( $option );
		}
		
		return $args;
	}
}

if ( ! function_exists( 'pelicula_woo_product_get_rating_html' ) ) {
	/**
	 * Function that override ratings templates
	 *
	 * @param $html string - contains html content
	 * @param $rating float
	 * @param $count int - total number of ratings
	 *
	 * @return string
	 */
	function pelicula_woo_product_get_rating_html( $html, $rating, $count ) {
		if ( ! empty( $rating ) ) {
			$html = '<div class="qodef-woo-ratings qodef-m"><div class="qodef-m-inner">';
			$html .= '<div class="qodef-m-star qodef--initial">';
			for ( $i = 0; $i < 5; $i ++ ) {
				$html .= pelicula_get_icon( 'ion-ios-star', 'ionicons', '<span class="qodef-m-star-item">&#9734;</span>' );
			}
			$html .= '</div>';
			$html .= '<div class="qodef-m-star qodef--active" style="width:' . ( ( $rating / 5 ) * 100 ) . '%">';
			for ( $i = 0; $i < 5; $i ++ ) {
				$html .= pelicula_get_icon( 'ion-ios-star', 'ionicons', '<span class="qodef-m-star-item">&#9733;</span>' );
			}
			$html .= '</div>';
			$html .= '</div></div>';
		}
		
		return $html;
	}
}

if ( ! function_exists( 'pelicula_woo_get_product_search_form' ) ) {
	/**
	 * Function that override product search widget form
	 *
	 * @param $html string
	 *
	 * @return string which contains html content
	 */
	function pelicula_woo_get_product_search_form( $html ) {
		return pelicula_get_template_part( 'woocommerce', 'templates/product-searchform' );
	}
}

if ( ! function_exists( 'pelicula_woo_get_content_widget_product' ) ) {
	/**
	 * Function that override product content widget
	 *
	 * @param $located string
	 * @param $template_name string
	 * @param $args array
	 * @param $template_path string
	 * @param $default_path string
	 *
	 * @return string which contains html content
	 */
	function pelicula_woo_get_content_widget_product( $located, $template_name, $args, $template_path, $default_path ) {
		
		if ( $template_name === 'content-widget-product.php' && file_exists( PELICULA_INC_ROOT_DIR . '/woocommerce/templates/content-widget-product.php' ) ) {
			$located = PELICULA_INC_ROOT_DIR . '/woocommerce/templates/content-widget-product.php';
		}
		
		return $located;
	}
}

if ( ! function_exists( 'pelicula_woo_get_quantity_input' ) ) {
	/**
	 * Function that override quantity input
	 *
	 * @param $located string
	 * @param $template_name string
	 * @param $args array
	 * @param $template_path string
	 * @param $default_path string
	 *
	 * @return string which contains html content
	 */
	function pelicula_woo_get_quantity_input( $located, $template_name, $args, $template_path, $default_path ) {
		
		if ( $template_name === 'global/quantity-input.php' && file_exists( PELICULA_INC_ROOT_DIR . '/woocommerce/templates/global/quantity-input.php' ) ) {
			$located = PELICULA_INC_ROOT_DIR . '/woocommerce/templates/global/quantity-input.php';
		}
		
		return $located;
	}
}

if ( ! function_exists( 'pelicula_woo_get_single_product_meta' ) ) {
	/**
	 * Function that override single product meta
	 *
	 * @param $located string
	 * @param $template_name string
	 * @param $args array
	 * @param $template_path string
	 * @param $default_path string
	 *
	 * @return string which contains html content
	 */
	function pelicula_woo_get_single_product_meta( $located, $template_name, $args, $template_path, $default_path ) {
		
		if ( $template_name === 'single-product/meta.php' && file_exists( PELICULA_INC_ROOT_DIR . '/woocommerce/templates/single-product/meta.php' ) ) {
			$located = PELICULA_INC_ROOT_DIR . '/woocommerce/templates/single-product/meta.php';
		}
		
		return $located;
	}
}

if ( ! function_exists( 'pelicula_woo_get_list_shortcode_item_image' ) ) {
	/**
	 * Function that override thumbnail img tag for list shortcodes
	 *
	 * @param $html string
	 * @param $attachment_id int
	 *
	 * @return string generated img tag
	 */
	function pelicula_woo_get_list_shortcode_item_image( $html, $attachment_id ) {
		
		if ( empty( $attachment_id ) && get_post_type() === 'product' ) {
			$html = woocommerce_get_product_thumbnail();
		}
		
		return $html;
	}
}