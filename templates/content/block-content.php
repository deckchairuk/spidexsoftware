<div class="content">
	<div class="container">

		<div class="row">
			<div class="col-12 offset-lg-1 col-lg-10">

				<div class="content__inner">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php if (is_page_template('templates/template-index-articles.php') || is_singular('articles')): ?>
							<h4 class="page-tag"><a href="/whats-new">What's new</a></h5>
						<?php endif; ?>

						<h1 class="title"><?php the_title(); ?></h1>
						
						<?php if (is_singular('articles')): ?>
							<h6 class="date"><?php the_date(); ?></h6>
						<?php endif ?>

						<?php the_post_thumbnail(); ?>

						<?php if (get_field('description')): ?>
							<?php the_field('description'); ?>					
						<?php endif ?>

						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>

			</div>
		</div>

	</div>
</div>