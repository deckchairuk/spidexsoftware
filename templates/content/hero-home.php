<?php 
	$heading = get_field('heading');
	$subheading = get_field('subheading');
	$buttonText = get_field('button_text');
	$buttonLink = get_field('button_link');
?>

<div class="hero hero--home">

	<div class="container">
		<div class="row">
			
			<div class="col-12 col-md-10 offset-md-1">
				<div class="hero__inner">
					
					<h1><?= $heading ?></h1>

					<?= $subheading ?>

					<a href="<?= $buttonLink ?>" class="button button--tertiary"><?= $buttonText ?></a>

				</div>
			</div>
			
		</div>
	</div>
	
	<div class="canvas-wrapper" id="animation"></div>
	<script src="<?= get_template_directory_uri(); ?>/assets/js/min/three.animate.min.js" type="text/javascript"></script>

</div>