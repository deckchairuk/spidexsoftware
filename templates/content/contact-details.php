<?php 
	$map = get_field('map'); 
	$address = $map['address'];
	$salesEmail = get_field('sales_email_address');
	$salesPhone = get_field('sales_phone_number');
	$supportEmail = get_field('support_email_address');
	$supportPhone = get_field('support_phone_number');
?>

<div class="panel panel--light-grey">
	<div class="container">

		<div class="row">
			<div class="col-12 col-md-12 col-lg-6 col-xl-4 offset-xl-2">
				<div class="contact-details contact-details--sales">
					<h3>Sales</h3>
					
					<?php if ($salesEmail): ?>
						<p class="h3"><i class="icon icon_letter"></i> <a href="mailto:<?= $salesEmail ?>"><?= $salesEmail ?></a></p>
					<?php endif ?>

					<?php if ($salesPhone): ?>
						<p class="h3"><i class="icon icon_phone"></i> <?= $salesPhone ?></p>
					<?php endif ?>
				</div>
			</div>

			<div class="col-12 col-md-12 col-lg-6 col-xl-4">
				<div class="contact-details contact-details--support">
					<h3>Support</h3>

					<?php if ($supportEmail): ?>
						<p class="h3"><i class="icon icon_letter"></i> <a href="mailto:<?= $supportEmail ?>"><?= $supportEmail ?></a></p>
					<?php endif ?>

					<?php if ($supportPhone): ?>
						<p class="h3"><i class="icon icon_phone"></i> <?= $supportPhone ?></p>
					<?php endif ?>
				</div>
			</div>				

			<?php if ($address): ?>
			<div class="col-12 col-lg-12 col-xl-8 offset-xl-2">
				<div class="contact-details contact-details--address">
					<p><i class="icon icon_map-marker"></i> <?= $address ?> - <a href="#map">View on map</a></p>
				</div>
			</div>
			<?php endif ?>
		</div>
		
	</div>
</div>	