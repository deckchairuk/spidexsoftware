<?php if (have_rows('features')): ?>
	<div class="feature-list">
		<div class="container">

			<div class="row justify-content-between">
				<?php while(have_rows('features')) : the_row(); ?>
				<?php
					$graphic = get_sub_field('graphic');
					$heading = get_sub_field('heading');
					$description = get_sub_field('description'); ?>
					
					<div class="col-12 col-sm-6 col-lg-3">
						<div class="feature match-height">
							<div class="feature__graphic">
								<img src="<?php echo $graphic; ?>" alt="">
							</div>

							<div class="feature__heading">
								<h5><?php echo $heading; ?></h5>
							</div>

							<div class="feature__description">
								<p><?php echo $description; ?></p>
							</div>
						</div> <!-- .feature -->
					</div>
				<?php endwhile; ?>
			</div>

		</div>
	</div>
<?php endif ?>