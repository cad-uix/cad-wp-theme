<?php
/**
 * Function for displaying social link
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

if  (  ! function_exists (  'call_social_links'  )   )  :

  function call_social_links ( $class = '' ) 
  {
?>

<ul class="<?php echo $class; ?> social-link">

  <?php 

  $options = get_option ( 'plugin_options' ) ;

    

    $bool = $options['client_facebook'];

    if ( !empty ( $bool )  )  { ?>

    <li><a href="https://www.facebook.com/<?php echo $options['client_facebook']; ?>" target="_blank" title="Facebook">
    
    <i class="icon cad-icon-facebook-square"></i>

    </a>

    </li>
    <?php } ?>

    <?php 
    
    $bool = $options['client_twitter']; 

    if ( !empty ( $bool )  )  { ?>

    <li><a href="https://twitter.com/<?php echo $options['client_twitter']; ?>" target="_blank" title="Twitter">
    <i class="icon cad-icon-twitter-square"></i></a>
    </li>
    <?php } ?>

    <?php 
    
    $bool = $options['client_google_plus']; 

    if ( !empty ( $bool )  )  { ?>

    <li><a href="https://www.google.com/+<?php echo $options['client_google_plus']; ?>" target="_blank" title="Google Plus">
    <i class="icon cad-icon-google-plus"></i></a>
    </li>
      <?php } ?>

      <?php 
    
    $bool = $options['client_linkedin']; 

    if ( !empty ( $bool )  )  { ?>

    <li><a href="http://www.linkedin.com/<?php echo $options['client_linkedin']; ?>" target="_blank" title="Linked In">
    <i class="icon cad-icon-linkedin-square"></i></a>
    </li>
    <?php } ?>

  </ul>
  <?php
  }
endif;