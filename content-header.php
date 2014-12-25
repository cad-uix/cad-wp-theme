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
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-4">
				
				<a class="brand" <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
       				<?php bloginfo( 'name'); ?>
    			</a>

			</div>

			<div class="col-sm-8">
				
				<?php menu( 'header-navigation', 'nav nav-pills hidden-xs', 'header-navigation', 2); ?>

			</div>
			
		</div>

	</div>

</header> <!-- #header -->