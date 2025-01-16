<div id="qodef-page-comments">
	<?php if ( have_comments() ) {
		$comments_number = get_comments_number();
		?>
		<div id="qodef-page-comments-list" class="qodef-m">
			<h3 class="qodef-m-title"><?php echo sprintf( _n( '%s Comment', '%s Comments', $comments_number, 'pelicula' ), $comments_number ); ?></h3>
			<ul class="qodef-m-comments">
				<?php wp_list_comments( array_unique( array_merge( array( 'callback' => 'pelicula_get_comments_list_template' ), apply_filters( 'pelicula_filter_comments_list_template_callback', array() ) ) ) ); ?>
			</ul>
			
			<?php if ( get_comment_pages_count() > 1 ) { ?>
				<div class="qodef-m-pagination qodef--wp">
					<?php the_comments_pagination( array(
						'prev_text'          => pelicula_get_icon( 'arrow_carrot-left', 'elegant-icons', esc_html__( '< Prev', 'pelicula' ) ),
						'next_text'          => pelicula_get_icon( 'arrow_carrot-right', 'elegant-icons', esc_html__( 'Next >', 'pelicula' ) ),
						'before_page_number' => '0'
					) ); ?>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
		<p class="qodef-page-comments-not-found"><?php esc_html_e( 'Comments are closed.', 'pelicula' ); ?></p>
	<?php } ?>
	
	<div id="qodef-page-comments-form">
		<?php
		$qodef_commenter = wp_get_current_commenter();
		$qodef_req       = get_option( 'require_name_email' );
		$qodef_html_req  = ( $qodef_req ? " required='required'" : '' );
		
		$args = array(
			'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h3>',
			'title_reply'        => esc_html__( 'Write a Comment', 'pelicula' ),
			'class_submit'       => 'submit qodef-button qodef-size--full-width',
			'label_submit'       => esc_attr__( 'Submit', 'pelicula' ),
			'comment_field'      => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="' . esc_attr__( 'Type Comment...', 'pelicula' ) . '" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
			'fields'             => array(
				'author' => '<div class="qodef-grid qodef-layout--columns qodef-col-num--2 qodef-gutter--tiny"><div class="qodef-grid-inner"><div class="qodef-grid-item"><p class="comment-form-author">
							<input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Your Name', 'pelicula' ) . '" value="' . esc_attr( $qodef_commenter['comment_author'] ) . '" size="30" maxlength="245" ' . $qodef_html_req . ' />
							</p></div>',
				'email'  => '<div class="qodef-grid-item"><p class="comment-form-email">
							 <input id="email" name="email" type="email" placeholder="' . esc_attr__( 'Your Email', 'pelicula' ) . '" value="' . esc_attr( $qodef_commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes" ' . $qodef_html_req . ' />
							 </p></div></div></div>',
				'url'    => '<p class="comment-form-url">
							 <input id="url" name="url" type="url" placeholder="' . esc_attr__( 'Your Website', 'pelicula' ) . '" value="' . esc_attr( $qodef_commenter['comment_author_url'] ) . '" size="30" maxlength="200" />
							 </p>',
			)
		);
		
		comment_form( apply_filters( 'pelicula_filter_comment_form_args', $args ) ); ?>
	</div>
</div>