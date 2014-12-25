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

            <aside class="col-sm-3">

                <h4><?php bloginfo('name'); ?></h4>

                <?php $bool = call_data( 'about'); 

                if(!empty($bool)) { ?>

                <p>
                    <?php echo call_data( 'about'); ?>
                </p>

                <?php } ?>

            </aside>

            <aside class="col-sm-3">

                <h4>Contact Us</h4>

                <?php include (TEMPLATEPATH . '/inc/address.php' ); ?>

                <h4>Connect with us</h4>

                <?php include (TEMPLATEPATH . '/inc/social.php' ); ?>

            </aside>

            <aside class="col-sm-3">

                <h4>Quick Links</h4>

                <?php cad_get_menu( 'footer-navigation', 'list-unstyled', 'footer-navigation', '1'); ?>

            </aside>

            <aside class="col-sm-3">

                <h4>Latest Blog</h4>

                <ul class="list-unstyled">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_title( '<li>', '</li>' ); ?>

                    <?php endwhile; endif; ?>

                </ul>

            </aside>

        </div>

    </div>

</footer> <!-- #footer -->