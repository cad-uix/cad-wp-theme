<?php 
/** 
* 
* Content for displaying Footer 
* 
* @package oracle 
* @author marcelbadua
*/ 
?>

<footer id="footer" class="site-footer" role="contentinfo">

    <div class="container">

        <div class="row">

            <aside class="col-sm-4">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

        
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">
        
                </a>
                
                <div class="clearfix">&nbsp;</div>

                <?php $bool = call_data( 'about'); 

                if(!empty($bool)) { ?>

                <p>
                    <?php echo call_data( 'about'); ?>
                </p>

                <?php } ?>

            </aside>

            <aside class="col-sm-8">

                <div class="row">

                    <aside class="col-sm-4">

                        <h4>Contact Us</h4>

                        <hr>

                        <?php include (TEMPLATEPATH . '/inc/address.php' ); ?>

                        <?php include (TEMPLATEPATH . '/inc/social.php' ); ?>

                    </aside>

                    <aside class="col-sm-4">

                        <h4>Quick Links</h4>

                        <hr>

                        <?php

                        $defaults = array(
                            'theme_location'  => 'header-navigation',
                            'menu'            => 'header-navigation',
                            'container'       => false,
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled',
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

                    </aside>

                    <aside class="col-sm-4">

                    
                            <?php 

                            $blog_args = array(
                              'post_type' => 'post'
                            );

                            $post_query = new WP_Query( $blog_args ); ?>

                            <?php if ( $post_query->have_posts() ) : ?>

                            <h4>Latest Blog</h4>

                            <hr>

                            <ul class="list-unstyled">

                              <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                                 
                                  <a href="<?php the_permalink(); ?>">
                                        <?php the_title( '<li>', '</li>' ); ?>
                                    </a>

                              <?php endwhile; ?>
                              
                            </ul>
                              
                              
                          <?php endif; ?>

                    </aside>
                </div>
                
            </aside>

            

        </div>

    </div>

</footer> <!-- #footer -->
