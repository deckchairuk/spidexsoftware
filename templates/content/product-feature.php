<?php 
	$title = get_the_title();
	$description = get_field('description');
	$image = get_the_post_thumbnail();
	$factsheetLink = get_field('factsheet');
	$colour = get_field('colour');
?>
<div class="panel product-feature" style="background-color: <?= $colour ?>;">

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 image">
				<div class="product-feature__image">
					<?= $image ?>
				</div> <!-- .product-feature__image -->
			</div>

			<div class="col-12 col-md-8 details">
				<div class="product-feature__details">
					<h2><?= $title ?></h2>

					<?= $description ?>

					<?php if ($factsheetLink): ?>
						<a href="<?= $factsheetLink ?>">Facetsheet</a>
					<?php endif ?>
				</div> <!-- .product-feature__details -->
			</div>				
		</div>
	</div>

</div> <!-- .product-feature--image-left -->