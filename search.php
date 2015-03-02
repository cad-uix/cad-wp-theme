<?php
/**
 * Template for displaying search results.
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

get_header(); ?>


		
	    <div class="container">

	    	<?php breadcrumb(); ?>

	    </div>

	    <main class="container" role="main">

	    <?php if (have_posts()) : ?>

		<div class="page-header">

			<h1>Search Results</h1>

		</div>

		<?php while ( have_posts() ) : the_post(); ?>

        


			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title( "<h4>", "</h4>" ); ?>
            </a>

                   <?php include (TEMPLATEPATH . '/inc/meta.php' );

                    ?>

                    <p> <?php the_excerpt(); ?></p>

                    <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs"> Read More <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a></p>
                

        <?php endwhile; ?>
		
	    <?php else : ?>

		<h2>No posts found.</h2>

	    <?php endif; ?>

	    </main> <!-- #main -->
	   
	<div class="clearfix">&nbsp;</div>

<?php get_footer(); ?>