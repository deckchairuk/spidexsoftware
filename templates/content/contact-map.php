<?php 
	$map = acf_map_render(); 
	$address = $map['address'];
?>

<?php if( !empty($map) ): ?>
<div class="acf-map" id="map">
	<div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
</div>
<?php endif; ?>