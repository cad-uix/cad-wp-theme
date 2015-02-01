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
 * @package cad-wp-theme
 * @author marcelbadua
 */


get_header(); ?>

<div id="content-wrap">

	<div class="container">

		<?php get_template_part( 'content', 'banner' ); ?>

	</div>

	<div class="clearfix">&nbsp;</div>
	
	<div class="container">

		<?php get_template_part( 'content', 'blog' ); ?>

	</div>

	<div class="clearfix">&nbsp;</div>

	<div class="container">

		<?php echo do_shortcode( '[gravityform id="1" name="Contact"]' );?>

	</div>

</div> <!-- #content-wrap -->

<?php get_footer(); ?>