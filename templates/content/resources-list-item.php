<?php 
	$file = get_field('file');
	$fileURL = $file['url'];
	$fileMimeType = $file['mime_type'];
	$description = get_field('description');
?>

<div class="resource">
	<div class="resource__title">
		<h5>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> 

			<?php if ($fileMimeType): ?>
				<span class="file-type">(<?= $fileMimeType ?>)</span>
			<?php endif ?>
		</h5>
	</div>

	<div class="resource__date">
		<h5><?= get_the_date(); ?></h5>
	</div>

	<div class="resource__link">
		<h5><a href="<?= $fileURL ?>" class="button button--secondary button--small">Download</a></h5>
	</div>

	<?php if ($description): ?>
	<div class="resource__detail">
		<h6><?= $description ?></h6>
	</div>
	<?php endif ?>
</div>