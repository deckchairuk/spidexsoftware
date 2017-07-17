<?php $projects = get_projects(-1); ?>

	<!-- Project listing -->
	<?php if ( $projects->have_posts() ) : ?>
		<div class="projects-list">
		    <?php while ( $projects->have_posts() ) : $projects->the_post(); ?>
				<?php get_template_part('templates/content/projects', 'list-item'); ?>
		    <?php endwhile; ?>
		</div>
	<?php else:  ?>
		There are no projects to display
	<?php endif; ?>

<?php pagination($projects->max_num_pages); ?>
<?php wp_reset_postdata(); ?>