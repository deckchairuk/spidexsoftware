<div class="resources">
	<div class="container">

		<div class="row">
			<div class="col">
				<?php $resources = get_resources(6); ?>
					
					<!-- Filters -->
					<form action="" class="filters filters--resource" method="get">
						<input type="text" name="search" placeholder="Search..." value="<?= get_query_var('search'); ?>">

						<select name="tag" class="tag">
							<option value="">Any</option>
							<?php $resource_tags = get_resource_tags(); ?>
							<?php foreach ($resource_tags as $tag): ?>
								<option value="<?= $tag->slug; ?>"><?= $tag->name; ?></option>
							<?php endforeach ?>
						</select>

						<input type="submit" value="Search">

						<?php if ($_GET): ?>
							<a href="<?php the_permalink(); ?>" class="button button--primary reset">Reset</a>
						<?php endif ?>
					</form>

					<!-- Resource listing -->
					<div class="resources">
					<?php if ( $resources->have_posts() ) : ?>
					    <?php while ( $resources->have_posts() ) : $resources->the_post(); ?>
							<?php get_template_part('templates/content/resources', 'list-item'); ?>
					    <?php endwhile; ?>
					<?php else:  ?>
						<div class="resource no-results">
							<p>Sorry, we couldn't find any resources. Please <a href="/contact">get in touch</a> if you feel something is missing.</p>
						</div>
					<?php endif; ?>
					</div>

				<?php pagination($resources->max_num_pages); ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
		
	</div>
</div>