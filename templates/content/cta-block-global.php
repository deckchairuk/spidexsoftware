<?php 
	$ctaText = get_field('cta_text', 'option');
	$ctaButtonText = get_field('cta_button_text', 'option');
	$ctaButtonLink = get_field('cta_button_link', 'option');
?>
<?php if ($ctaText): ?>
<div class="cta">

	<div class="container">
		<div class="row">

			<div class="col col-lg-10 offset-lg-1">
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