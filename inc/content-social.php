<?php
	$options = get_option('cad_theme_options');
?>

<ul class="list-unstyled social">

	<?php 
	if(!empty($options['facebook'])) { ?>
	<li><a href="http://facebook.com/<?php echo $options['facebook']; ?>" target="_blank">
	<i class="fa fa-facebook-square fa-2x"></i> /<?php echo $options['facebook']; ?> </a>
	</li>
	<?php } ?>

	<?php 
	if(!empty($options['twitter'])) { ?>
	<li><a href="http://twitter.com/<?php echo $options['twitter']; ?>" target="_blank">
	<i class="fa fa-twitter-square fa-2x"></i> /<?php echo $options['twitter']; ?> </a>
	</li>
	<?php } ?>

	<?php 
	if(!empty($options['google-plus'])) { ?>
	<li><a href="http://google-plus.com/<?php echo $options['twitter']; ?>" target="_blank">
	<i class="fa fa-google-plus-square fa-2x"></i> /<?php echo $options['google-plus']; ?> </a>
	</li>
  	<?php } ?>

  	<?php 
	if(!empty($options['linkedin'])) { ?>
	<li><a href="http://linkedin.com/<?php echo $options['twitter']; ?>" target="_blank">
	<i class="fa fa-linkedin-square fa-2x"></i> /<?php echo $options['linkedin']; ?> </a>
	</li>
	<?php } ?>

</ul>