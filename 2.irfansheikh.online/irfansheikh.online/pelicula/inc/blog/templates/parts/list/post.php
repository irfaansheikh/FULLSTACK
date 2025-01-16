<article <?php post_class( apply_filters( 'pelicula_filter_blog_post_classes', array( 'qodef-blog-item qodef-e qodef-e-holder-main' ) ) ); ?>>
	<div class="qodef-e-inner">
		<?php
		// Include post media
		pelicula_template_part( 'blog', 'templates/parts/post-info/media' );
		?>
		<div class="qodef-e-content qodef-e-content-main">
			<div class="qodef-e-text">
				<?php // Include post title
				pelicula_template_part( 'blog', 'templates/parts/post-info/title', '', array( 'title_tag' => 'h2' ) ); ?>

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
				// Include post excerpt
				pelicula_template_part( 'blog', 'templates/parts/post-info/excerpt' );
				
				// Hook to include additional content after blog single content
				do_action( 'pelicula_action_after_blog_single_content' );
				?>
			</div>
			<div class="qodef-e-info qodef-info--bottom">
				<div class="qodef-e-info-full">
					<?php
					// Include post read more
					pelicula_template_part( 'blog', 'templates/parts/post-info/read-more' );
					// Include post comments
					pelicula_template_part( 'blog', 'templates/parts/post-info/comments' );
					// Hook to include social share
					$social_share_layout_params = array( 'dropdown_behavior' => 'right' );
					do_action( 'pelicula_action_after_blog_list_bottom_content', $social_share_layout_params );
					?>
				</div>
			</div>
		</div>
	</div>
</article>