<div class="login">
	<div class="container">

		<div class="row">
			<div class="col">

				<div class="login__inner">
					<?php if (get_query_var('login') == 'failed'): ?>
						<p class="failed">Login failed, please try again.</p>

						<?php if (get_query_var('username')): ?>
							<script>
								jQuery(function() {
									username = <?php echo "'".get_query_var('username')."'"; ?>;
									jQuery('#user_login').val(username);
								});
							</script>
						<?php endif ?>
					<?php endif ?>

					<?php frontend_login_form(); ?>
				</div>

			</div>
		</div>
		
	</div>
</div>