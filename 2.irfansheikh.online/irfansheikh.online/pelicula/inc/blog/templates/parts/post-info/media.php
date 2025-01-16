<div class="qodef-e-media">
	<?php switch ( get_post_format() ) {
		case 'gallery':
			pelicula_template_part( 'blog', 'templates/parts/post-format/gallery' );
			break;
		case 'video':
			pelicula_template_part( 'blog', 'templates/parts/post-format/video' );
			break;
		case 'audio':
			pelicula_template_part( 'blog', 'templates/parts/post-format/audio' );
			break;
		default:
			pelicula_template_part( 'blog', 'templates/parts/post-info/image' );
			break;
	} ?>
</div>