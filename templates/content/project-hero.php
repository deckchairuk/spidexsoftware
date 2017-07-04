<?php 
	$projectHeading 		= get_field('project_heading');
	$projectSubheading 		= get_field('project_subheading');
	$projectColour 			= get_field('project_colour');
	$projectFeaturedImage 	= get_field('project_overview_background_image');

	$clientName 			= get_field('client_name');
	$clientLogo 			= get_field('client_logo');
	$clientSector			= get_field('client_sector');
	$clientWebsite			= get_field('client_website');
?>

<?php if ($projectColour): ?>
	<style>
		.hero--project:before {
			background-color: <?= $projectColour; ?>;
		}
	</style>
<?php else: ?>	
	<style>
		.hero--project:before {
			background-color: #2f409f;
		}
	</style>
<?php endif ?>

<div class="hero hero--project" style="background-image: url(<?= $projectFeaturedImage; ?>">
	<div class="container">

		<div class="row">
			<div class="col-12 col-lg-9">
				<div class="hero__inner">
					<h1><?= $projectHeading; ?></h1>

					<p><?= $projectSubheading; ?></p>
				</div>
			</div>

			<div class="col-12 col-lg-3">
				<div class="project-id hero__inner">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dev/huntapac.png" alt="">

					<h5>Client</h5>
					<p><?= $clientName; ?></p>

					<h5>Sector</h5>
					<p>Food manufacturing</p>
				</div>
			</div>
		</div>
		
	</div>
</div>