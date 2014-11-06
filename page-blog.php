<?php
/**
 * Template Name: Blog Page
 *
 * The template for displaying Blog list.
 *
 * @package cad
 */

get_header();  the_post(); ?>

    <div id="content-wrap">

        <div class="container">

            <?php breadcrumb(); ?>

            <div class="page-header">

                <?php the_title( '<h1>', '</h1>' ); ?>

            </div>

            <?php cad_post('post', 'list'); ?>

        </div>

    </div>

<?php get_footer(); ?>