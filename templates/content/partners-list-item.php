<?php 
	$logo = get_field('logo');
	$title = get_the_title();
	$description = get_field('description');
?>
<div class="partner">
	<div class="partner__logo match-height">
		<img src="<?= $logo['sizes']['large']; ?>" alt="<?= $logo['alt'] ?>">
	</div>

	<div class="partner__details">
		<h6><?= $title ?></h6>
		<p class="no-margin"><?= $description ?></p>
	</div>
</div>