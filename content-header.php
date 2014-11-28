<?php
/**
*
 * Content for displaying Header
 *
 * @package oracle
 * @author marcelbadua
 */
?>

    <nav class="navbar navbar-default" role="navigation">
        
        <div class="container">
        
            <div class="navbar-header">

                <a class="navbar-brand" href="<?php bloginfo("url"); ?>"><?php bloginfo( 'name'); ?></a>
            
            </div>

            <?php cad_get_menu( 'header-navigation', 'nav navbar-nav hidden-xs', 'header-navigation', 2); ?>

        </div>
        
    </nav>
