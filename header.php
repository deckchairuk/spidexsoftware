<header class='header'>
	<div class="container">
		<div class="row">
			
			<div class="header__inner">
				<div class="logo">
					<?php $largeLogo = get_field('logo', 'option'); ?>
					<?php $smallLogo = get_field('small_logo', 'option'); ?>

					<img src="<?php echo $largeLogo['url']; ?>" alt="<?php echo $largeLogo['alt']; ?>" class="logo__large"/>
					<img src="<?php echo $smallLogo['url']; ?>" alt="<?php echo $smallLogo['alt']; ?>" class="logo__small"/>
				</div>

				<?php navigation('main'); ?>

				<?php navigation('support'); ?>
			</div>

		</div>
	</div>
</header>