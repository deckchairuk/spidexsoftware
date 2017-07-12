<?php if (have_rows('phases')): ?>
	<?php while (have_rows('phases')) : the_row(); ?>

		<?php get_template_part('templates/content/phase', 'panel'); ?>
		
	<?php endwhile; ?>
<?php endif ?>