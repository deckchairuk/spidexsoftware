<div class="panel panel--orange result">
	<div class="container">

		<div class="row">
			<div class="col-12 col-md-11">
				<h2>Result</h2>

				<?php if (have_rows('results')): ?>
					<?php while(have_rows('results')) : the_row() : ?>
						<div class="result__panel">
							<p><?php the_sub_field('result'); ?></p>
						</div>
					<?php endwhile; ?>
				<?php endif ?>
			</div>
		</div>
		
	</div>
</div>