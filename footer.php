		<div class="footer">
			<div class="container">

				<div class="row">
					<div class="col-12 col-md-6 col-xl-3">
						<div class="location">
							<p class="no-margin">
								Spidex Software Ltd, <br>
								West Midland House, <br>
								Temple Way, <br>
								Coleshill,  <br>
								Warwickshire, <br>
								B46 1HH <br>
							</p>

							<p class="no-margin--bottom"><a href="#">Get directions</a></p>
						</div>
					</div>

					<div class="col-12 col-md-6 col-xl-3">
						<div class="contact">
							<div class="contact__phone"><span>Call</span> (0)1675 620 572</div>

							<div class="contact__email"><span>Email</span> info@spidex.co.uk</div>

							<div class="about">
								<p class="no-margin--bottom"><a href="#">About the company</a></p>
							</div>
						</div>
					</div>

					<div class="col-12 col-md-12 offset-xl-3 col-xl-3">
						<div class="social">
							<div class="twitter">
								<i class="icon icon_twitter"></i> <a href="<?php the_field('twitter', 'option'); ?>"><span>Follow us on Twitter</span></a>
							</div>

							<div class="linkedin">
								<i class="icon icon_linkedin"></i> <a href="<?php the_field('linkedin', 'option'); ?>"><span>Join us on LinkedIn</span></a>
							</div>
						</div>
					</div>

				</div>
				
			</div>
		</div>

		<div class="legal">
			<div class="container">

				<div class="row">
					<div class="col-12 col-md-2">
						<span class="copyright">© Spidex Software</span>
					</div>

					<div class="col-12 col-md-4">
						<?php navigation('legal'); ?>
					</div>
				</div>						

			</div>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>