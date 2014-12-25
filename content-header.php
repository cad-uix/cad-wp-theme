<?php
/**
*
 * Content for displaying Header
 *
 * @package oracle
 * @author marcelbadua
 */
?>

<header id="header" class="site-header" role="banner">
	
	<a class="brand" <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
       	<?php bloginfo( 'name'); ?>
    </a>

    <?php cad_get_menu( 'header-navigation', 'nav nav-pills hidden-xs', 'header-navigation', 2); ?>

</header> <!-- #header -->