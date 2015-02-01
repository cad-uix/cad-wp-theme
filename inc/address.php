<?php
/**
 * Display Address
 *
 * @package oracle
 * @author marcelbadua
 */
?>

<address>
	<ul class="list-unstyled">
		
	
	<?php 
	
	$bool = call_data('address');

	if(!empty($bool)) { ?>
	
	<li>
		<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
		<?php echo call_data('address'); ?>
	</li>
	<?php } ?>
    
	<?php 
	$bool = call_data('number');

	if(!empty($bool)) { ?>

	<li>
		<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
			<a href="call:<?php echo call_data('number'); ?>"> 

	<?php echo call_data('number'); ?> </a></li>
	<?php } ?>

	<?php 
	
	$bool = call_data('email');

	if(!empty($bool)) { ?>

	<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 

			<a href="mailto:<?php echo call_data('email'); ?>"> 

	<?php echo call_data('email'); ?> </a></li>
	<?php } ?>

	</ul>
	
</address>