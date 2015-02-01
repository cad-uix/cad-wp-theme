<?php
/**
 * Content for displaying Page
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="page-header">
    
    <?php the_title( '<h1>', '</h1>' ); ?>

    </div>

    <?php if ( has_post_thumbnail() )  the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?> 

    <div class="entry">

        <?php the_content(); ?>

    </div>

</article>
