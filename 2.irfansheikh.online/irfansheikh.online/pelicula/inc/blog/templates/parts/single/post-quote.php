<article <?php post_class( apply_filters( 'pelicula_filter_blog_post_classes', array( 'qodef-blog-item qodef-e qodef-e-holder-main' ) ) ); ?>>
	<div class="qodef-e-inner">
		<?php
		// Include post format part
		pelicula_template_part( 'blog', 'templates/parts/post-format/quote' ); ?>
		<div class="qodef-e-content qodef-e-content-main">
			<div class="qodef-e-text">
				<?php // Include post title
//				pelicula_template_part( 'blog', 'templates/parts/post-info/title' ); ?>

				<div class="qodef-e-info qodef-info--top">
					<?php
					// Include post date info
					pelicula_template_part( 'blog', 'templates/parts/post-info/date' );
					// Include post category info
					pelicula_template_part( 'blog', 'templates/parts/post-info/category' );
					// Include post author info
					pelicula_template_part( 'blog', 'templates/parts/post-info/author' );
					?>
				</div>

				<?php
				// Include post content
				the_content();
				
				// Hook to include additional content after blog single content
				do_action( 'pelicula_action_after_blog_single_content' );
				?>
			</div>
			<div class="qodef-e-info qodef-info--bottom">
				<div class="qodef-e-info-left">
					<?php
					// Include post tags info
					pelicula_template_part( 'blog', 'templates/parts/post-info/tags' );
					?>
				</div>
				<div class="qodef-e-info-right">
					<?php
					// Hook to include social share
					do_action( 'pelicula_action_blog_single_bottom_right_content' );
					?>
				</div>
			</div>
		</div>
	</div>
</article>