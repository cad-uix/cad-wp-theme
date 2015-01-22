<?php
/**
 * Function for displaying social link
 *
 * @package oracle
 * @author marcelbadua
 */

if ( ! function_exists( 'call_social_links' ) ) :

  function call_social_links($class = '', $size = '')
  {
?>

<ul class="<?php echo $class; ?> social-link">

  <?php 

    $bool = call_data('facebook');

    if(!empty($bool)) { ?>

    <li><a href="http://facebook.com/<?php echo call_data('facebook'); ?>" target="_blank">
    <i class="fa fa-facebook-square <?php echo $size; ?>"></i></a>
    </li>
    <?php } ?>

    <?php 
    
    $bool = call_data('twitter');

    if(!empty($bool)) { ?>

    <li><a href="http://twitter.com/<?php echo call_data('twitter'); ?>" target="_blank">
    <i class="fa fa-twitter-square <?php echo $size; ?>"></i></a>
    </li>
    <?php } ?>

    <?php 
    
    $bool = call_data('google-plus');

    if(!empty($bool)) { ?>

    <li><a href="http://google-plus.com/<?php echo call_data('google-plus'); ?>" target="_blank">
    <i class="fa fa-google-plus-square <?php echo $size; ?>"></i></a>
    </li>
      <?php } ?>

      <?php 
    
    $bool = call_data('linkedin');

    if(!empty($bool)) { ?>

    <li><a href="http://linkedin.com/<?php echo call_data('linkedin'); ?>" target="_blank">
    <i class="fa fa-linkedin-square <?php echo $size; ?>"></i></a>
    </li>
    <?php } ?>

  </ul>
  <?php
  }
endif;