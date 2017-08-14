<?php $events = get_events(-1); ?>

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
		<div class="events">
			<div class="container">

				<div class="row">
					<div class="col-12">
						<h4>There are currently no events, please check again soon or <a href="/contact">get in touch</a> for more information.</h4>
					</div>
				</div>

			</div>
		</div> <!-- .events -->
	<?php endif; ?>

<?php wp_reset_postdata(); ?>