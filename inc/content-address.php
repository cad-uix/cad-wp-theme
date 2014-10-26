<address>
	
	<strong><?php bloginfo( 'name'); ?></strong> <br>

	<?php 
	if(!empty(cad_option('address'))) { ?>
	<?php echo cad_option('address'); ?> <br>
	<?php } ?>
    
	<?php 
	if(!empty(cad_option('number'))) { ?>
	Phone: <a href="call:<?php echo cad_option('number'); ?>"> 
	<?php echo cad_option('number'); ?> </a><br>
	<?php } ?>

	<?php 
	if(!empty(cad_option('email'))) { ?>
	Email: <a href="mailto:<?php echo cad_option('email'); ?>"> 
	<?php echo cad_option('email'); ?> </a><br>
	<?php } ?>
	
</address>