<?php
$gallery_meta = get_post_meta( get_the_ID(), 'qodef_post_format_gallery_images', true );

if ( ! empty( $gallery_meta ) ) { ?>
	<div class="qodef-e-media-gallery qodef-swiper-container">
		<div class="swiper-wrapper">
			<?php
			$gallery_images = explode( ',', $gallery_meta );
			
			foreach ( $gallery_images as $image_id ) { ?>
				<div class="qodef-e-media-gallery-item swiper-slide">
					<?php if ( ! is_single() ) { ?>
						<a itemprop="url" href="<?php the_permalink(); ?>">
					<?php } ?>
						<?php echo wp_get_attachment_image( $image_id, 'full' ); ?>
					<?php if ( ! is_single() ) { ?>
						</a>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
		<div class="qodef-navigation">
			<div class="swiper-button-next">
				<span class="swiper-button-text"><?php esc_html_e( 'Next', 'pelicula' ); ?></span>
			</div>
			<div class="swiper-button-prev">
				<span class="swiper-button-text"><?php esc_html_e( 'Prev', 'pelicula' ); ?></span>
			</div>
		</div>
	</div>
<?php } else {
	// Include featured image
	pelicula_template_part( 'blog', 'templates/parts/post-info/image' );
} ?>
