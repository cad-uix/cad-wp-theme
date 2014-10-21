<?php 
get_header(); the_post();?>

<div class="container">
<?php cad_breadcrumb(); ?>
  <div class="row">
    <main class="col-sm-8">
      <div class="page-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
      </div>
      <?php
      $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
      $blog_args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'paged' => $paged
      );
      $blog_query = new WP_Query( $blog_args ); ?>
      <?php if ( $blog_query->have_posts() ) : ?>
        <div class="row">
        <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
          
          <?php get_template_part( 'inc/view', 'list' ); ?>

        <?php endwhile; ?>
        </div>
        <?php cad_pagination($blog_query->max_num_pages); ?>
      <?php endif; ?>
    </main>
    <aside class="col-sm-4">
      
    </aside>
  </div>
</div>
<?php get_footer(); ?>
