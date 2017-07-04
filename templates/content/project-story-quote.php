<style>
	.quote:before {
		background-image: url('<?php the_sub_field('background_image'); ?>');
	}
</style>
<div class="panel quote">
	<div class="container">	

		<div class="row">
			<div class="col">
				<div class="quote__inner">
					<h2><?php the_sub_field('text'); ?></h2>

					<h4><?php the_sub_field('author'); ?></h4>
					<h4><?php the_sub_field('role'); ?></h4>
				</div>
			</div>
		</div>
		
	</div>
</div>