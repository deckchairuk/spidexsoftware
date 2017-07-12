<?php 
	$ctaText = get_field('cta_text');
	$ctaButtonText = get_field('cta_button_text');
	$ctaButtonLink = get_field('cta_button_link');
?>
<?php if ($ctaText): ?>
<div class="cta">

	<div class="container">
		<div class="row">

			<div class="col">
				<div class="cta__inner">
					<p class="no-margin--top"><?= $ctaText ?></p>

					<?php if ($ctaButtonLink && $ctaButtonText): ?>
						<a href="<?= $ctaButtonLink ?>" class="button button--tertiary no-margin--bottom"><?= $ctaButtonText ?></a>
					<?php endif ?>
				</div>
			</div>
			
		</div>
	</div>

</div>
<?php endif ?>