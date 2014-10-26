<?php
/**
* Template Name: Blog Template
**/
?>
<?php get_header(); the_post(); ?>
<div class="container">

    <?php cad_breadcrumb(); ?>
    
    <div class="page-header">
  		<?php the_title( '<h1>', '</h1>' ); ?>
	</div>
   <?php cad_post('post', 'list'); ?>
</div>
<?php get_footer(); ?>