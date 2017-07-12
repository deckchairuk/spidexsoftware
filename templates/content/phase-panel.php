<?php 
	$heading = get_sub_field('heading');
	$text = get_sub_field('text');
	$staffImage = get_sub_field('staff_image');
	$staffName = get_sub_field('staff_name');
	$staffRole = get_sub_field('staff_role');
	$staffLinkedin = get_sub_field('staff_linkedin');
	$staffEmail = get_sub_field('staff_email');
	$staffPhone = get_sub_field('staff_phone');
?>
<div class="phase-panel">

	<div class="container">
		<div class="row">

			<div class="col-12 col-md-7 col-lg-8 col-xl-9">
				<div class="phase-panel__body">
					<h2><?= $heading ?></h2>

					<?= $text ?>
				</div>
			</div>
			<div class="col-12 col-md-5 col-lg-4 col-xl-3">
				<div class="phase-panel__side">
					<?php if( !empty($staffImage) ): ?>
						<img class="profile-image" src="<?php echo $staffImage['url']; ?>" alt="<?php echo $staffImage['alt']; ?>" />
					<?php endif; ?>

					<h6>
						<?= $staffName ?>

						<?php if ($staffLinkedin): ?>
							<a href="<?= $staffLinkedin ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.png" alt=""></a>
						<?php endif ?>
					</h6>

					<?php if ($staffRole): ?>
						<p><?= $staffRole ?></p>
					<?php endif ?>

					<?php if ($staffEmail): ?>
						<p><a href="mailto:<?= $staffEmail ?>"><?= $staffEmail ?></a></p>
					<?php endif ?>

					<?php if ($staffPhone): ?>
						<p><a href="tel:<?= $staffPhone ?>"><?= $staffPhone ?></a></p>
					<?php endif ?>
				</div>
			</div>

		</div>
	</div>

</div>