<?php
/**
 * Display Address
 *
 * @package cad
 * @author marcelbadua
 */
?>

<address>
	
	<strong><?php bloginfo( 'name'); ?></strong> <br>

	<?php 
	if(!empty(call_data('address'))) { ?>
	<i class="fa fa-map-marker"></i> <?php echo call_data('address'); ?> <br>
	<?php } ?>
    
	<?php 
	if(!empty(call_data('number'))) { ?>
	<i class="fa fa-phone"></i> <a href="call:<?php echo call_data('number'); ?>"> 
	<?php echo call_data('number'); ?> </a><br>
	<?php } ?>

	<?php 
	if(!empty(call_data('email'))) { ?>
	<i class="fa fa-envelope"></i> <a href="mailto:<?php echo call_data('email'); ?>"> 
	<?php echo call_data('email'); ?> </a><br>
	<?php } ?>
	
</address>