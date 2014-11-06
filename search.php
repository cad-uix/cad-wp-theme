<?php
/**
 * Template for displaying search results.
 *
 * @package cad
 */

get_header(); ?>

	<div id="content-wrap">
		
		<div class="container">

		    <?php breadcrumb(); ?>

		    <?php if (have_posts()) : ?>

			<div class="page-header">

				<h1>Search Results</h1>

			</div>

			<?php while (have_posts()) : the_post(); ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <h2><?php the_title(); ?></h2>

                <div class="entry">

                    <?php the_excerpt(); ?>

                </div>

            </div>

            <?php endwhile; ?>
			
		    <?php else : ?>

			<h2>No posts found.</h2>

		    <?php endif; ?>

	    </div>
	
	</div>

<?php get_footer(); ?>