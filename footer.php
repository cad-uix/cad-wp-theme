<?php
 /**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package oracle
 * @author marcelbadua
 */
?>

    <?php get_template_part( 'content', 'footer' ); ?>

    <div id="colophon">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <span>All Rights Reserved &copy;
                        <?php echo date( "Y"); echo " "; bloginfo( 'name'); ?> &bull;
                        <a href="<?php echo home_url( '/privacy-policy' ); ?>">Privacy Policy</a> |
                        <a href="<?php echo home_url( '/terms-of-use' ); ?>">Terms of Use</a>
                    </span>

                </div>

                <div class="col-sm-4">

                    <div id="customadesign">
                        Powered by:
                        <a href="http://customadesign.com" target="_blank">
                        <img src="http://i46.photobucket.com/albums/f116/cad-uix/customadesign-logo-landscape-light_200x60_zps368f2000.png" width="150" alt="">
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>  <!-- /. THIS CLOSES PAGE-WRAP FOUND AT HEADER.PHP -->

<?php wp_footer(); ?>

</body>

</html>