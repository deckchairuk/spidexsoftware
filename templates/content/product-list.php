<?php $projects = get_products(-1); ?>

	<!-- Project listing -->
	<?php if ( $projects->have_posts() ) : ?>
	    <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
			<?php get_template_part('templates/content/product', 'feature'); ?>
	    <?php endwhile; ?>
	<?php else:  ?>
		There are no projects to display
	<?php endif; ?>

<?php wp_reset_postdata(); ?>