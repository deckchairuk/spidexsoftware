<?php 
	$eventCtaText = get_field('event_cta_text');
	$eventCtaDesc = get_field('event_cta_desc');
	$eventCtaButtonText = get_field('event_cta_button_text');
	$eventCtaButtonLink = get_field('event_cta_button_link');
?>
<?php if ($eventCtaText): ?>
<div class="cta">

	<div class="container">
		<div class="row">

			<div class="col">
				<div class="cta__inner">
					<p class="no-margin"><?= $eventCtaText ?></p>
					<h6><?= $eventCtaDesc ?></h6>

					<?php if ($eventCtaButtonLink && $eventCtaButtonText): ?>
						<a href="<?= $eventCtaButtonLink ?>" class="button button--tertiary no-margin--bottom"><?= $eventCtaButtonText ?></a>
					<?php endif ?>
				</div>
			</div>
			
		</div>
	</div>

</div>
<?php endif ?>