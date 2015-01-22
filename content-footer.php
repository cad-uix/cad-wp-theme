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
        
            <aside class="col-sm-5">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name'); ?>">

        
                    <?php if (get_header_image() != '')
                    { ?>
                        <img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name'); ?>" />  
                    <?php
                    }
                    else
                    {
                        ?>
                        <h4> <?php bloginfo( 'name'); ?></h4>
                    <?php
                    }
                    ?>
        
                </a>
                
                <div class="clearfix">&nbsp;</div>

                <?php $bool = call_data( 'about'); 

                if(!empty($bool)) { ?>

                <p>
                    <?php echo call_data( 'about'); ?>
                </p>

                <?php } ?>

            </aside>

            <aside class="col-sm-7">

                <div class="row">

                    <aside class="col-sm-4">

                        <h4>Contact Us</h4>

                        <hr>

                        <?php include (TEMPLATEPATH . '/inc/address.php' ); ?>

                        <?php call_social_links('list-inline', 'fa-2x'); ?>

                    </aside>

                    <aside class="col-sm-4">

                        <h4>Quick Links</h4>

                        <hr>

                        <?php

                        $defaults = array(
                            'theme_location'  => 'footer-navigation',
                            'menu'            => 'footer-navigation',
                            'container'       => false,
                            'container_class' => 'footer-navigation',
                            'container_id'    => '',
                            'menu_class'      => 'list-unstyled footer-navigation',
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

                            <ul class="footer-navigation">

                              <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                                 <li>
                                  <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                              <?php endwhile; ?>
                              
                            </ul>
                              
                              
                          <?php endif; ?>

                    </aside>
                </div>
                
            </aside>

            

        </div>

    </div>

</footer> <!-- #footer -->
