<?php
/**
 * Template Name: Blog Page
 *
 * The template for displaying Blog list.
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header();  the_post(); ?>

    <div id="content-wrap">

        <div class="container">

            <?php breadcrumb(); ?>

            <div class="page-header">

                <?php the_title( '<h1>', '</h1>' ); ?>

            </div>

            <?php get_template_part( 'content', 'blog' ); ?>

        </div>

    </div>

    <div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>
