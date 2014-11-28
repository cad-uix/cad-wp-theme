<?php
/**
 * Display Social Link with Font Awesome Icons
 *
 * @package oracle
 * @author marcelbadua
 */
?>
    
<ul class="list-inline social-link">

	<?php 

	$bool = call_data('facebook');

	if(!empty($bool)) { ?>

	<li><a href="http://facebook.com/<?php echo call_data('facebook'); ?>" target="_blank">
	<i class="fa fa-facebook-square fa-2x"></i></a>
	</li>
	<?php } ?>

	<?php 
	
	$bool = call_data('twitter');

	if(!empty($bool)) { ?>

	<li><a href="http://twitter.com/<?php echo call_data('twitter'); ?>" target="_blank">
	<i class="fa fa-twitter-square fa-2x"></i></a>
	</li>
	<?php } ?>

	<?php 
	
	$bool = call_data('google-plus');

	if(!empty($bool)) { ?>

	<li><a href="http://google-plus.com/<?php echo call_data('google-plus'); ?>" target="_blank">
	<i class="fa fa-google-plus-square fa-2x"></i></a>
	</li>
  	<?php } ?>

  	<?php 
	
	$bool = call_data('linkedin');

	if(!empty($bool)) { ?>

	<li><a href="http://linkedin.com/<?php echo call_data('linkedin'); ?>" target="_blank">
	<i class="fa fa-linkedin-square fa-2x"></i></a>
	</li>
	<?php } ?>

</ul>