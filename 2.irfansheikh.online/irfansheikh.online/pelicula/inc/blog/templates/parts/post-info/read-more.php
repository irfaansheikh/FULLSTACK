<?php if ( ! post_password_required() ) { ?>
	<div class="qodef-e-read-more">
		<?php
		if ( pelicula_post_has_read_more() ) {
			$button_params = array(
				'custom_class'  => 'qodef-layout--custom',
				'link'          => get_permalink() . '#more-' . get_the_ID(),
				'button_layout' => 'textual',
				'text'          => esc_html__( 'Continue Reading', 'pelicula' )
			);
		} else {
			$button_params = array(
				'custom_class'  => 'qodef-layout--custom',
				'link'          => get_the_permalink(),
				'button_layout' => 'textual',
				'text'          => esc_html__( 'Read More', 'pelicula' )
			);
		}
		
		pelicula_render_button_element( $button_params ); ?>
	</div>
<?php } ?>