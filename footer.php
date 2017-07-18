		<?php 
			$twitterLink = get_field('twitter', 'option');
			$linkedinLink = get_field('linkedin', 'option');
			$phoneNumber = get_field('phone_number', 'option');
			$emailAddress = get_field('email_address', 'option');
			$address = get_field('address', 'option');
		?>

		<div class="footer">
			<div class="container">

				<div class="row">
					<?php if ($address): ?>
					<div class="col-12 col-md-6 col-xl-3">
						<div class="location">
							<p class="no-margin">
								<?= $address ?>
							</p>

							<p class="no-margin--bottom"><a href="https://www.google.co.uk/maps/place/Spidex+Software+Limited/@52.510239,-1.7104445,17z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x4870b1dd16281763:0x1c1a828d88580f1!2sSpidex+Software+Limited,+Temple+Way,+Coleshill+B46+1HH!2m2!1d-1.7082558!2d52.5102358!3m4!1s0x4870b1dd16281763:0x1c1a828d88580f1!8m2!3d52.5102358!4d-1.7082558" target="_blank">Get directions</a></p>
						</div>
					</div>
					<?php endif ?>

					<?php if ($phoneNumber || $emailAddress): ?>
					<div class="col-12 col-md-6 col-xl-3">
						<div class="contact">
							<?php if ($phoneNumber): ?>
								<div class="contact__phone"><span>Call</span> <?= $phoneNumber ?></div>
							<?php endif ?>

							<?php if ($emailAddress): ?>
								<div class="contact__email"><span>Email</span> <?= $emailAddress ?></div>
							<?php endif ?>

							<div class="about">
								<p class="no-margin--bottom"><a href="/what-we-do">About the company</a></p>
							</div>
						</div>
					</div>
					<?php endif ?>
	
					<?php if ($twitterLink || $linkedinLink): ?>
					<div class="col-12 col-md-12 offset-xl-3 col-xl-3">
						<div class="social">
							<?php if ($twitterLink): ?>
							<div class="twitter">
								<i class="icon icon_twitter"></i> <a href="<?= $twitterLink ?>" target="_blank"><span>Follow us on Twitter</span></a>
							</div>
							<?php endif ?>	

							<?php if ($linkedinLink): ?>
							<div class="linkedin">
								<i class="icon icon_linkedin"></i> <a href="<?= $linkedinLink ?>" target="_blank"><span>Join us on LinkedIn</span></a>
							</div>
							<?php endif ?>
						</div>
					</div>
					<?php endif ?>

				</div>
				
			</div>
		</div>

		<div class="legal">
			<div class="container">

				<div class="row">
					<div class="col-4 col-md-2">
						<span class="copyright">© Spidex Software</span>
					</div>

					<div class="col-8 col-md-10">
						<?php navigation('legal'); ?>
					</div>
				</div>						

			</div>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>