<?php
	$outcomeHeading = get_field('outcome_heading');
	$outcomeText = get_field('outcome_text');
?>

<?php if ($outcomeText): ?>
<div class="phase-panel phase-panel--orange">

	<div class="container">
		<div class="row">

			<div class="col col-md-9">
				<div class="phase-panel__body">
					<h2><?= $outcomeHeading ?></h2>

					<?= $outcomeText ?>
				</div>
			</div>

		</div>
	</div>

</div>
<?php endif ?>