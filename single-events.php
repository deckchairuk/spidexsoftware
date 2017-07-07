<?php get_template_part('head'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
	$startDate = get_field('start_date');
	$endDate = get_field('end_date');
	$time = get_field('time');
	$price = get_field('price');
	$location = get_field('location');
	$description = get_field('description');
	$map = acf_map_render(); 
	$address = $map['address'];
?>

	<div class="content event-single">
		<div class="container">

			<div class="row">
				<div class="col-12 offset-md-1 col-md-10">

					<div class="event-single__inner">
						<div class="event-details">
							<h4 class="page-tag"><a href="/events">Events</a></h5>

							<h1 class="title"><?php the_title(); ?></h1>

							<div class="meta-rail">
								<div class="meta-rail__item">
									<h6><i class="icon icon_calendar default"></i> <?= date_range($startDate, $endDate); ?></h6>
								</div>

								<?php if ($time): ?>
									<div class="meta-rail__item">
										<h6><i class="icon icon_clock default"></i> <?= $time ?></h6>
									</div>
								<?php endif ?>

								<?php if ($price): ?>
									<div class="meta-rail__item">
										<h6><i class="icon icon_tag default"></i> <?= $price ?></h6>
									</div>
								<?php endif ?>

								<?php if ($location): ?>
									<div class="meta-rail__item">
										<h6><i class="icon icon_map-marker default"></i> <?= $location ?></h6>
									</div>
								<?php endif ?>
							</div>

							<?= $description ?>
						</div>

						<?php if( !empty($map) ): ?>
						<div class="acf-map">
							<div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
						</div>
						<?php endif; ?>		

						<div class="form form__event">
							<?php gravity_form( 1, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = true, $tabindex = 0, $echo = true ); ?>
						</div>					
					</div>

				</div>
			</div>

		</div>
	</div>

<?php endwhile; endif; ?>
<?php get_template_part('footer'); ?>