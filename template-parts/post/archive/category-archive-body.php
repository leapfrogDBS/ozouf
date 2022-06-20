<div class="section pt-10">
		<div class="container">
			<div class="row w-3/4 m-auto">
				<div class="col">
				<?php if ( have_posts() ) : ?>

					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							
							$post_copy = get_field('post_copy'); 
							$post_excerpt = get_field('post_excerpt'); 
							$post_thumbnail_image = get_field('post_thumbnail_image'); 
							$post_subtitle = get_field('post_subtitle'); 
							

							?>
							<a href="<?php echo the_permalink(); ?>" class="grid grid-cols-2 bg-grey rounded-lg mb-10">
								<img src="<?php echo $post_thumbnail_image['url'] ?>">
								<div class="flex flex-col justify-center p-5">
									<h3 class="uppercase font-bold text-lg"><?php echo $post_subtitle; ?></h3>
									<h2 class="text-2xl"><?php echo the_title(); ?></h2>
									<p><?php echo $post_excerpt; ?></p>
								</div>
							</a>

							<?php
						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>
			</div>
		</div>
	</div>