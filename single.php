<?php
/**
 * The template for displaying all single posts.
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

<div id="content-wrap">

    <?php breadcrumb(); ?>

    <main id="main" class="site-main" role="main">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'single' ); ?>

        <?php endwhile; endif; ?>

    </main> <!-- #main -->

</div> <!-- #content-wrap -->

<?php get_footer(); ?>