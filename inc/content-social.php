<ul class="list-unstyled social">

	<?php 
	if(!empty(cad_option('facebook'))) { ?>
	<li><a href="http://facebook.com/<?php echo cad_option('facebook'); ?>" target="_blank">
	<i class="fa fa-facebook-square fa-2x"></i> /<?php echo cad_option('facebook'); ?> </a>
	</li>
	<?php } ?>

	<?php 
	if(!empty(cad_option('twitter'))) { ?>
	<li><a href="http://twitter.com/<?php echo cad_option('twitter'); ?>" target="_blank">
	<i class="fa fa-twitter-square fa-2x"></i> /<?php echo cad_option('twitter'); ?> </a>
	</li>
	<?php } ?>

	<?php 
	if(!empty(cad_option('google-plus'))) { ?>
	<li><a href="http://google-plus.com/<?php echo cad_option('twitter'); ?>" target="_blank">
	<i class="fa fa-google-plus-square fa-2x"></i> /<?php echo cad_option('google-plus'); ?> </a>
	</li>
  	<?php } ?>

  	<?php 
	if(!empty(cad_option('linkedin'))) { ?>
	<li><a href="http://linkedin.com/<?php echo cad_option('twitter'); ?>" target="_blank">
	<i class="fa fa-linkedin-square fa-2x"></i> /<?php echo cad_option('linkedin'); ?> </a>
	</li>
	<?php } ?>

</ul>