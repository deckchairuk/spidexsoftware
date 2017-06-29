<?php $articles = get_articles(2); ?>

	<!-- Article listing -->
	<?php if ( $articles->have_posts() ) : ?>
	    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
			<?php get_template_part('templates/content/articles', 'list-item'); ?>
	    <?php endwhile; ?>

	<?php else:  ?>
		There are no articles to display
	<?php endif; ?>

<?php pagination($articles->max_num_pages); ?>
<?php wp_reset_postdata(); ?>