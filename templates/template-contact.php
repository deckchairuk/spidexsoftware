<?php
    /* Template Name: Contact */
?>

<?php get_template_part('head'); ?>
<?php 
	$map = acf_map_render(); 
	$address = $map['address'];
?>

	<div class="form form__contact">
		<div class="container">

			<div class="row">
				<div class="col-12">

					<?php gravity_form( 1, $display_title = true, $display_description = true, $display_inactive = false, $field_values = null, $ajax = true, $tabindex = 0, $echo = true ); ?>
					
				</div>
			</div>
			
		</div>
	</div>		

	<?php if( !empty($map) ): ?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
	</div>
	<?php endif; ?>
	
<?php get_template_part('footer'); ?>