<?php
/**
 * Display Social Link with Font Awesome Icons
 *
 * @package cad
 * @author marcelbadua
 */
?>
    
<ul class="list-inline social-link">

	<?php 
	if(!empty(call_data('facebook'))) { ?>
	<li><a href="http://facebook.com/<?php echo call_data('facebook'); ?>" target="_blank">
	<i class="fa fa-facebook-square fa-2x"></i></a>
	</li>
	<?php } ?>

	<?php 
	if(!empty(call_data('twitter'))) { ?>
	<li><a href="http://twitter.com/<?php echo call_data('twitter'); ?>" target="_blank">
	<i class="fa fa-twitter-square fa-2x"></i></a>
	</li>
	<?php } ?>

	<?php 
	if(!empty(call_data('google-plus'))) { ?>
	<li><a href="http://google-plus.com/<?php echo call_data('google-plus'); ?>" target="_blank">
	<i class="fa fa-google-plus-square fa-2x"></i></a>
	</li>
  	<?php } ?>

  	<?php 
	if(!empty(call_data('linkedin'))) { ?>
	<li><a href="http://linkedin.com/<?php echo call_data('linkedin'); ?>" target="_blank">
	<i class="fa fa-linkedin-square fa-2x"></i></a>
	</li>
	<?php } ?>

</ul>