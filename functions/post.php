<?php
function cad_post($post = 'post', $display = 'list', $range = 9)
{

      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $blog_args = array(
        'post_type' => $post,
        'posts_per_page' => $range,
        'paged' => $paged
      );
      $post_query = new WP_Query( $blog_args ); ?>
      <?php if ( $post_query->have_posts() ) : ?>
        <div class="post-list row">
        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
        
            <?php get_template_part( 'inc/view', $display ); ?>

        <?php endwhile; ?>
        </div>
        <?php cad_pagination(); ?>
        
    <?php endif; 
}
?>