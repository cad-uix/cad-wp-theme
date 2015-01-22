<?php
/**
*
 * Content for displaying Header
 *
 * @package oracle
 * @author marcelbadua
 */
?>

<div id="user-bar">
	<div class="container">

	<?php call_social_links('nav nav-pills pull-right', ''); ?>

	<address>
		
		<ul class="nav nav-pills">
			
		
		<?php 
		
		$bool = call_data('address');

		if(!empty($bool)) { ?>
		
		<li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><i class="fa fa-map-marker"></i> <?php echo call_data('address'); ?></a> </li>
		<?php } ?>
	    
		<?php 
		$bool = call_data('number');

		if(!empty($bool)) { ?>

		<li><a href="call:<?php echo call_data('number'); ?>"> <i class="fa fa-phone"></i> 
		<?php echo call_data('number'); ?> </a></li>
		<?php } ?>

		<?php 
		
		$bool = call_data('email');

		if(!empty($bool)) { ?>

		<li> <a href="mailto:<?php echo call_data('email'); ?>"> <i class="fa fa-envelope"></i>
		<?php echo call_data('email'); ?> </a></li>
		<?php } ?>
		
		
		</ul>
	</address>

		
	</div>
</div>

<header id="header" class="site-header" role="banner">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-4">
				
				<a class="brand" <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
       				<?php //bloginfo( 'name'); ?>

       				<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

    			</a>

			</div>

			<div class="col-sm-8">

                <?php

                $defaults = array(
                    'theme_location'  => 'header-navigation',
                    'menu'            => 'header-navigation',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'list-unstyled header-navigation',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );

                ?>

			</div>
			
		</div>

	</div>

</header> <!-- #header -->