<?php $articles = get_articles(10); ?>

	<!-- Article listing -->
	<?php if ( $articles->have_posts() ) : ?>
		<div class="articles">
			<div class="container">

				<div class="row">
				    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
					<div class="col-12 col-md-6">
						<?php get_template_part('templates/content/articles', 'list-item'); ?>
					</div>
	    			<?php endwhile; ?>

					<div class="col-12">
						<?php pagination($articles->max_num_pages, 8); ?>
					</div>

				</div>

			</div>
	    </div>
	<?php else:  ?>
		There are no articles to display
	<?php endif; ?>
<?php wp_reset_postdata(); ?>