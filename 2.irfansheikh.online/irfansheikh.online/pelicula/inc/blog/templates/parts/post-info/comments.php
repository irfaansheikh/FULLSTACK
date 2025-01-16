<?php if ( comments_open() ) { ?>
	<div class="qodef-e-info-item qodef-e-info-comments">
		<a itemprop="url" class="qodef-e-info-comments-link" href="<?php comments_link(); ?>">
			<span class="qodef-e-info-comments-icon fa fa-comment"></span>
			<?php comments_number( '0 ' . esc_html__( 'comments', 'pelicula' ), '1 ' . esc_html__( 'comment', 'pelicula' ), '% ' . esc_html__( 'comments', 'pelicula' ) ); ?>
		</a>
	</div>
<?php } ?>