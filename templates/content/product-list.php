<?php $products = get_products(-1); ?>

	<!-- Project listing -->
	<?php if ( $products->have_posts() ) : ?>
	    <?php while ( $products->have_posts() ) : $products->the_post(); ?>
			<?php get_template_part('templates/content/product', 'feature'); ?>
	    <?php endwhile; ?>
	<?php else:  ?>
		There are no products to display
	<?php endif; ?>

<?php wp_reset_postdata(); ?>