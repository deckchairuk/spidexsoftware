<?php 
	$startDate = get_field('start_date');
	$endDate = get_field('end_date');
?>

<div class="event">
	<div class="event__title">
		<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
	</div>

	<div class="event__date">
		<h5><i class="icon icon_calendar default"></i> <?= date_range($startDate, $endDate); ?></h5>
	</div>

	<div class="event__link">
		<h5><a href="<?php the_permalink(); ?>">View details</a></h5>
	</div>
</div>