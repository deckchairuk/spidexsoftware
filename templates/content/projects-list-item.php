<?php 
   	global $post;
	$projectHeading 		= get_the_title();
	$projectSlug 			= $post->post_name;
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
		.<?= $projectSlug; ?>.hero--project:before {
			background-color: <?= $projectColour; ?>;
		}
	</style>
<?php endif ?>

<div class="hero hero--project <?= $projectSlug; ?>" style="background-image: url(<?= $projectFeaturedImage; ?>">
	<div class="container">

		<div class="row">
			<div class="col-12 <?= is_singular('projects') ? 'col-lg-9' : 'col-lg-8'; ?>">
				<div class="hero__inner">
					<h1><?= $projectHeading; ?></h1>

					<p><?= $projectSubheading; ?></p>

					<?php if (!is_singular('projects')): ?>
						<a href="<?php the_permalink(); ?>" class="button button--primary">How we helped <?= $clientName; ?></a>
					<?php endif ?>
				</div>
			</div>

			<div class="col-12 <?= is_singular('projects') ? 'col-lg-3' : 'offset-lg-1 col-lg-3'; ?>">
				<div class="project-id hero__inner">
					<a href="<?= $clientWebsite; ?>">
						<img src="<?= $clientLogo; ?>" alt="">
					</a>

					<h5>Client</h5>
					<p><?= $clientName; ?></p>

					<h5>Sector</h5>
					<p><?= $clientSector; ?></p>
				</div>
			</div>
		</div>
		
	</div>
</div>