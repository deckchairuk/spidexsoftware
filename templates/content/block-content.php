<div class="content">
	<div class="container">

		<div class="row">
			<div class="col offset-md-1 col-md-9">

				<div class="content__inner">
					<h1><?php the_title(); ?></h1>
					<h5><?php the_date(); ?></h5>

					<?php the_post_thumbnail(); ?>

					<?php the_content(); ?>
				</div>

			</div>
		</div>

	</div>
</div>