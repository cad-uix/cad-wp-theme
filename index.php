<?php 
get_header(); ?>
 
 <div class="container">
   
   <?php cad_slideshow(); ?>

 </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Latest Post</h2>
        <?php get_template_part( 'inc/content', 'latest' ); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
