<?php
/**
 *
 * Content for displaying Single
 *
 * @package oracle
 * @author marcelbadua
 */
?>
   
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="page-header">
        
            <?php the_title( '<h1>', '</h1>' ); ?>
        
        </div>
        
        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
        
        <?php if ( has_post_thumbnail() ) { ?>
        
        <div class="featured-image">
        
            <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
            
        </div>
        
        <?php } ?>
        
        <div class="entry">
            
            <?php the_content(); ?>
        
        </div>
        
    </article>
    
<?php endwhile; endif; ?>