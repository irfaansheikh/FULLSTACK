<?php
$tags = get_the_tags();

if ( $tags ) { ?>
	<div class="qodef-e-info-item qodef-e-info-tags">
		<span class="qodef-e-info-tags-label"><?php esc_html_e( 'Tags:', 'pelicula' ); ?></span>
		<?php the_tags( '', '', '' ); ?>
	</div>
<?php } ?>