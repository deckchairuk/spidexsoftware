<?php
	$title = get_the_title();
	$introduction = get_field('introduction');
?>

<div class="what-we-do-intro">

	<div class="container">
		<div class="row">

			<div class="col col-md-10 offset-md-1">
				<h1 class="no-margin--top"><?= $title ?></h1>

				<?= $introduction ?></p>
			</div>

		</div>
	</div>

</div>