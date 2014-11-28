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

                <main>

                    <?php get_template_part( 'content', 'single' ); ?>

                </main>

        </div>

    </div>

<?php get_footer(); ?>