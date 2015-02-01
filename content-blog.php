<?php
/**
 * Content for Blog
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */

$loop = 1;

$column = 4;

$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

$blog_args = array(
    'post_type' => 'post',
    'paged' => $paged
);

$blog_query = new WP_Query( $blog_args );

if ( $blog_query->have_posts() ) : ?>

<div class="post-list row">

    <?php 

    while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-' . ( 12 / $column ) ); ?>>

            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title( "<h4>", "</h4>" ); ?>
            </a>

            <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
            
            <?php if ( has_post_thumbnail() ) { ?>
                <a class="pull-right" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'img-thumbnail' ) ); ?>
                </a>
            <?php } ?>
            
            <p><?php the_excerpt(); ?></p>

            <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs"> Read More <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></a></p>

        </div>

    <?php 

        if ( 0 == $loop % $column ) {
            echo '<div class="clearfix"></div>';
        } 

        $loop++; 

    endwhile; ?>

</div>

<?php
    if ( function_exists('wp_bootstrap_pagination') )
        wp_bootstrap_pagination();
    ?>

<?php else : ?>

    <div class="page-header">

        <h2>Nothing found</h2>

    </div>

<?php endif;