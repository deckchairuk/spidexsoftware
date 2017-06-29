<?php $events = get_events(2); ?>

	<!-- Event listing -->
	<?php if ( $events->have_posts() ) : ?>
	    <?php while ( $events->have_posts() ) : $events->the_post(); ?>
			<?php get_template_part('templates/content/events', 'list-item'); ?>
	    <?php endwhile; ?>

	<?php else:  ?>
		There are no events to display
	<?php endif; ?>

<?php pagination($events->max_num_pages); ?>
<?php wp_reset_postdata(); ?>