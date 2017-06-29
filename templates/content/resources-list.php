<?php $resources = get_resources(2); ?>
	
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

		<input type="submit">
	</form>

	<!-- Resource listing -->
	<?php if ( $resources->have_posts() ) : ?>
	    <?php while ( $resources->have_posts() ) : $resources->the_post(); ?>
			<?php get_template_part('templates/content/resources', 'list-item'); ?>
	    <?php endwhile; ?>

	<?php else:  ?>
		There are no resources to display
	<?php endif; ?>

<?php pagination($resources->max_num_pages); ?>
<?php wp_reset_postdata(); ?>