<?php 
   	global $post;
	$projectHeading 		= get_the_title();
	$projectSlug 			= $post->post_name;
	$projectSubheading 		= get_field('project_subheading');
	$projectColour 			= get_field('project_colour');
	$projectButtonColour 	= get_field('project_button_colour');
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
			<div class="col-12 col-lg-8">
				<div class="hero__inner">
					<?php if (is_front_page()): ?> <!-- If home page -->
						<h5 class="page-tag"><a href="/customer-stories/">Customer story</a></h5>
					<?php endif; ?>

					<h1><?= $projectHeading; ?></h1>

					<p><?= $projectSubheading; ?></p>

					<?php if (!is_singular('projects')): ?>
						<a href="<?php the_permalink(); ?>" class="button button--primary" <?= $projectButtonColour ? 'style="background-color: '.$projectButtonColour.';"' : '' ?>>How we helped <?= $clientName; ?></a>
					<?php endif ?>
				</div>
			</div>

			<?php if (is_front_page()): ?> <!-- If home page -->
				<div class="col-12 offset-lg-1 col-lg-3">
					<a href="<?php the_permalink(); ?>">
						<div class="project-id hero__inner">
							<img src="<?= $clientLogo; ?>" alt="">

							<h5>Customer</h5>
							<p><?= $clientName; ?></p>

							<h5>Sector</h5>
							<p><?= $clientSector; ?></p>
						</div>
					</a>
				</div>
			<?php else : ?> <!-- Else if its any other page (Archive/single) -->
				<div class="col-12 offset-lg-1 col-lg-3">
					<div class="project-id hero__inner">
						<a href="<?= $clientWebsite; ?>" target="_blank">
							<img src="<?= $clientLogo; ?>" alt="">
						</a>

						<h5>Customer</h5>
						<p><?= $clientName; ?></p>

						<h5>Sector</h5>
						<p><?= $clientSector; ?></p>
					</div>
				</div>
			<?php endif ?>

		</div>
		
	</div>
</div>