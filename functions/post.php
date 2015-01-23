<?php
/**
 * Function for displaying post
 *
 * @package oracle
 * @author marcelbadua
 */

if ( ! function_exists( 'call_post' ) ) :

  function call_post($post = 'post', $display = 'list', $category_name = '', $range = '6', $column = 3)
  {
        $count = 0;

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
              
              <?php $count++; ?>

              <?php include (TEMPLATEPATH . '/view/' . $display . '.php' ); ?>

              <?php 
                  if ( 0 == $count % $column && $display == 'grid') {
                    echo '<div class="clearfix"></div>';
                  }
              ?>

            <?php endwhile; ?>
          
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
          

  }
endif;