<header class='header'>

	<div class="support-wrapper">	
		<div class="container">

			<div class="row">
				<div class="col">
					<?php navigation('support'); ?>
				</div>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">

			<div class="col">
				<div class="header__inner">

					<div class="mobile-nav-toggle">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>

					<div class="mobile-menu-overlay">	
						<?php navigation('main'); ?>
					</div>	

					<div class="logo">
						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spidex-logo-white.svg" alt="Spidex Software logo" class="logo__large logo--white"/></a>

						<?php if (is_page_template('templates/template-index-articles.php') || is_singular('articles') || is_singular('projects') || is_page('What we do') || is_page('Resources')): ?>
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spidex-logo-all-white.svg" alt="Spidex Software logo" class="logo__large"/></a>
						<?php else: ?>
							<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spidex-logo-grey.svg" alt="Spidex Software logo" class="logo__large"/></a>
						<?php endif ?>

						<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/spidex-logo-all-white.svg" alt="Spidex Software logo" class="logo__small"/></a>

					</div>

					<div class="main-nav">
						<?php navigation('main'); ?>
					</div>

					<div class="support-toggle">
						<p>Customer area <i class="icon icon_arrow"></i></p>
					</div>

				</div>
			</div>			

		</div>
	</div>

</header>