<?php 
/** 
 * Content for displaying Footer 
 * 
 * @package cad-wp-theme 
 * @author marcelbadua
 */ 
?>

<footer id="footer" class="site-footer" role="contentinfo">

    <div class="container">

        <div class="row">
        
            <aside class="col-sm-2">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>">

                    <?php if ( get_header_image() != '' )
                    { ?>
                        <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name'); ?>" />  
                    <?php
                    }
                    else
                    {
                        ?>
                        <h4> <?php bloginfo( 'name' ); ?></h4>
                    <?php
                    }
                    ?>
                </a>  

            </aside>

            <aside class="col-sm-6">
                            
                <h4> <?php bloginfo( 'name' ); ?></h4>

                <?php
                
                $options = get_option( 'plugin_options' );

                echo '<p>'.$options['client_about'] . '</p>';
                
                ?>
                
            </aside>

            <aside class="col-sm-4">

                <h4>Contact Us</h4>

                <?php include ( TEMPLATEPATH . '/inc/address.php' ); ?>

                <?php call_social_links( 'list-inline' ); ?>

            </aside>

        </div>

    </div>

</footer> <!-- #footer -->
