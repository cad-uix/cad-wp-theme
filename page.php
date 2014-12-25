<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

<div id="content-wrap">

    <?php breadcrumb(); ?>

    <main id="main" class="site-main" role="main">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'page' ); ?>

        <?php endwhile; endif; ?>

    </main> <!-- #main -->

</div> <!-- #content-wrap -->

<?php get_footer(); ?>