<?php
    /* Template Name: Resources */
?>

<?php get_template_part('head'); ?>

	<?php if (is_user_logged_in()): ?>
		<?php get_template_part('templates/content/block', 'title'); ?>

		<?php get_template_part('templates/content/resources', 'list'); ?>
	<?php else: ?>
		<?php get_template_part('templates/content/block', 'title'); ?>

		<?php get_template_part('templates/content/resources', 'login'); ?>
	<?php endif ?>

<?php get_template_part('footer'); ?>