<?php 
/** 
 * Content for displaying Header 
 * 
 * @package cad-wp-theme 
 * @author marcelbadua 
 */ 
?>


<header>
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('name'); ?>">
                    <?php if ( get_header_image() != '' ) { ?>
                    <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" />
                    <?php } else { ?>
                    <?php bloginfo( 'name' ); ?>
                    <?php } ?>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                
                <form class="navbar-form navbar-left" action="<?php echo home_url( '/' ); ?>" id="searchform" method="get" role="search">
 
                    <div class="form-group">
                 
                        <input class="form-control" type="text" id="s" name="s" value="" />
                    </div>
                    
                    <input class="btn btn-default" type="submit" value="Search" id="searchsubmit" />
                 
                </form>
                
                <?php 

                $defaults = array( 
                	'theme_location'=> 'header-navigation', 
                	'menu' => 'header-navigation', 
                	'container' => false, 
                	'container_class' => '', 
                	'container_id' => '', 
                	'menu_class' => 'nav navbar-nav navbar-right', 
                	'menu_id' => '', 
                	'echo' => true, 
                	'before' => '', 
                	'after' => '', 
                	'link_before' => '', 
                	'link_after' => '', 
                	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
                	'depth' => 2, 
                	'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 
                	'walker' => new wp_bootstrap_navwalker()
                	); 
                	wp_nav_menu( $defaults ); 
                ?>

            </div>
        </div>

    </nav>
</header>
