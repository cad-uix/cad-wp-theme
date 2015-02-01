<?php
/**
 * The template for displaying all single posts.
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>

<div id="content-wrap">

    <div class="container">

    	<?php breadcrumb(); ?>

    </div>

    <main id="main" class="site-main container" role="main">

    	<?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'single' ); ?>

        <?php endwhile; ?>

    </main> <!-- #main -->

	<div class="clearfix">&nbsp;</div>
	
    <div class="container">

    	<?php comments_template(); ?> 
        
    </div>

</div> <!-- #content-wrap -->

<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>