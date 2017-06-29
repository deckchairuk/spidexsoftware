<?php
    /* Template Name: Contact */
?>

<?php get_template_part('head'); ?>
<?php 
	$map = acf_map_render(); 
	$address = $map['address'];
?>

	<?php if( !empty($map) ): ?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
	</div>
	<?php endif; ?>
	
<?php get_template_part('footer'); ?>