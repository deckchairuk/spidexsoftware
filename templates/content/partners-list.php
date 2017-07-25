<?php $partners = get_partners(-1); ?>

	<!-- Article listing -->
	<?php if ( $partners->have_posts() ) : ?>
		<div class="partners">
			<div class="container">

				<div class="row justify-content-center">
					<div class="col-12">
						<h3 class="ta-center no-margin--top">Partners</h3>
					</div>

				    <?php while ( $partners->have_posts() ) : $partners->the_post(); ?>
					<div class="col-12 col-md-6 col-lg-4">
						<?php get_template_part('templates/content/partners', 'list-item'); ?>
					</div>
	    			<?php endwhile; ?>
				</div>

			</div>
	    </div>
	<?php else:  ?>
		There are no partners to display
	<?php endif; ?>
<?php wp_reset_postdata(); ?>