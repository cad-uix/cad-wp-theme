<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */
?>

    <?php get_template_part( 'content', 'footer' ); ?>

    <div id="colophon">

        <div class="container">

            <div class="row">

                <div class="col-sm-8">

                    <span>All Rights Reserved &copy;
                        <?php 
                        echo date( "Y" ); 
                        echo " | ";
                        echo bloginfo( 'name' );
                        echo " - ";
                        echo bloginfo( 'description' ); 
                        echo " | ";
                        ?>
                        <a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>">RSS</a>

                    </span>

                </div>

                <div class="col-sm-4 text-right">  
                    Website by: <a href="https://www.customadesign.com" target="_blank"><i class="icon cad-icon-customadesign-icon"></i> Custom A Design</a>
                </div>

            </div>

        </div>

    </div>

</div>  <!-- /#page-wrap -->

<?php wp_footer(); ?>

</body>

</html>