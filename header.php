<header class='header'>

	<div class="container">
		<div class="row">

			<div class="col">
				<div class="header__inner">

					<div class="logo">
						<?php $largeLogo = get_field('logo', 'option'); ?>
						<?php $smallLogo = get_field('small_logo', 'option'); ?>

						<a href="/"><img src="<?php echo $largeLogo['url']; ?>" alt="<?php echo $largeLogo['alt']; ?>" class="logo__large"/></a>
						<a href="/"><img src="<?php echo $smallLogo['url']; ?>" alt="<?php echo $smallLogo['alt']; ?>" class="logo__small"/></a>
					</div>

					<?php navigation('main'); ?>

					<?php navigation('support'); ?>

				</div>
			</div>			

		</div>
	</div>

</header>