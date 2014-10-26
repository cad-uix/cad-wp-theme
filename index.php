<?php get_header(); ?>
<div class="container">
    <?php cad_slideshow(); ?>
</div>
<div class="container">
    <h2>Latest Post</h2>
    <?php
    $args = array(
        'posts_per_page' => 9,
        'paged' => get_query_var('paged')
    );
    query_posts( $args );
    if ( have_posts() ) : ?>
    <div class="row">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'inc/view', 'grid' ); ?>

    <?php endwhile; ?>
    </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
