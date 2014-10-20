<?php
	$options = get_option('cad_theme_options');
?>
<address>
	
	<strong><?php bloginfo( 'name'); ?></strong> <br>

	<?php 
	if(!empty($options['address'])) { ?>
	<?php echo $options['address']; ?> <br>
	<?php } ?>

	<?php 
	if(!empty($options['number'])) { ?>
	Phone: <a href="call:<?php echo $options['number']; ?>"> <?php echo $options['number']; ?> </a><br>
	<?php } ?>

	<?php 
	if(!empty($options['email'])) { ?>
	Phone: <a href="mailto:<?php echo $options['email']; ?>"> <?php echo $options['email']; ?> </a><br>
	<?php } ?>
	
</address>