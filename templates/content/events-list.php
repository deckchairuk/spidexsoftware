<?php $events = get_events(2); ?>

	<!-- Event listing -->
	<?php if ( $events->have_posts() ) : ?>
		<div class="events">
			<div class="container">

				<div class="row">
					<div class="col-12">
										
					    <?php while ( $events->have_posts() ) : $events->the_post(); ?>
							<?php get_template_part('templates/content/events', 'list-item'); ?>
					    <?php endwhile; ?>

						<?php pagination($events->max_num_pages); ?>

					</div>
				</div>

			</div>
		</div>
	<?php else:  ?>
		There are no events to display
	<?php endif; ?>

<?php wp_reset_postdata(); ?>