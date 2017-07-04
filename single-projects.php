<?php get_template_part('head'); ?>

	<?php get_template_part('templates/content/project', 'hero'); ?>

	<?php if( have_rows('project_story') ): ?>
	    <?php while ( have_rows('project_story') ) : the_row(); ?>

	        <?php if( get_row_layout() == 'situation' ): ?>
				<?php get_template_part('templates/content/project', 'story-situation'); ?>
	        <?php elseif( get_row_layout() == 'implementation' ): ?>
				<?php get_template_part('templates/content/project', 'story-implementation'); ?>
	        <?php elseif( get_row_layout() == 'results' ): ?>
				<?php get_template_part('templates/content/project', 'story-results'); ?>
	        <?php elseif( get_row_layout() == 'next_steps' ): ?>
				<?php get_template_part('templates/content/project', 'story-next-steps'); ?>
	        <?php elseif( get_row_layout() == 'quote' ): ?>
				<?php get_template_part('templates/content/project', 'story-quote'); ?>        	
	        <?php endif; ?>

	    <?php endwhile; ?>
	<?php endif; ?>

<?php get_template_part('footer'); ?>