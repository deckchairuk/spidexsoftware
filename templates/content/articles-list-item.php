<div class="article">

	<a href="<?php the_permalink(); ?>">
		<div class="article__thumbnail" <?= get_field('colour') ? 'style="background-color: '.get_field('colour').';"' : ''; ?>>
			<?php the_post_thumbnail(); ?>
		</div>
	</a>

	<div class="article__details">
		<h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

		<h6 class="date"><?= get_the_date(); ?></h6>
	</div>
</div>