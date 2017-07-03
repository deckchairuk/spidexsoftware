<?php
    /* Template Name: Resources */
?>

<?php get_template_part('head'); ?>

	<?php if (is_user_logged_in()): ?>
		<?php get_template_part('templates/content/resources', 'list'); ?>
	<?php else: ?>
		<div class="login">
			<div class="container">

				<div class="row">
					<div class="col">
						<?php frontend_login_form(); ?>
					</div>
				</div>
				
			</div>
		</div>
	<?php endif ?>

<?php get_template_part('footer'); ?>