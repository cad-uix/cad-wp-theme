<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package oracle
 * @author marcelbadua
 */


get_header(); ?>

<div id="content-wrap">

	<main id="main" class="site-main" role="main">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; endif; ?>

    </main> <!-- #main -->

</div> <!-- #content-wrap -->

<?php get_footer(); ?>