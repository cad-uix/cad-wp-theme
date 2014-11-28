<?php
/**
 * Display Address
 *
 * @package oracle
 * @author marcelbadua
 */
?>

<address>
	
	<strong><?php bloginfo( 'name'); ?></strong> <br>


	<?php 
	
	$bool = call_data('address');

	if(!empty($bool)) { ?>
	
	<i class="fa fa-map-marker"></i> <?php echo call_data('address'); ?> <br>
	<?php } ?>
    
	<?php 
	$bool = call_data('number');

	if(!empty($bool)) { ?>

	<i class="fa fa-phone"></i> <a href="call:<?php echo call_data('number'); ?>"> 
	<?php echo call_data('number'); ?> </a><br>
	<?php } ?>

	<?php 
	
	$bool = call_data('email');

	if(!empty($bool)) { ?>

	<i class="fa fa-envelope"></i> <a href="mailto:<?php echo call_data('email'); ?>"> 
	<?php echo call_data('email'); ?> </a><br>
	<?php } ?>
	
</address>