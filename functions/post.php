<?php
function cad_post($post = 'post', $display = 'list', $category_name = '', $range = 5)
{

      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $blog_args = array(
        'post_type' => $post,
        'category_name' => $category_name,
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
        
        <hr>
        
        <?php cad_pagination($post_query ->max_num_pages); ?>
        
    <?php endif; 
}
?>