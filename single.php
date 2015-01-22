<?php
/**
 * The template for displaying all single posts.
 *
 * @package oracle
 * @author marcelbadua
 */

get_header(); ?>

<div id="content-wrap">

    <div class="container">
    	<?php breadcrumb(); ?>
    </div>

    <main id="main" class="site-main" role="main">

    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'content', 'single' ); ?>

        <?php endwhile; endif; ?>

    </main> <!-- #main -->

	<div class="clearfix">&nbsp;</div>
	
    <div class="container">
    	<?php comments_template(); ?> 
    </div>

</div> <!-- #content-wrap -->

<?php get_footer(); ?>