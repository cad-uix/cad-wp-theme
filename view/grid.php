 <div  id="post-<?php the_ID(); ?>" <?php post_class('col-sm-4 view-grid'); ?>>
    
        <?php if ( has_post_thumbnail() ) { ?>
        <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?>
        </a>
        <?php } else {
        ?>
        <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
             <img src="http://placehold.it/150x150&text=blog" width="150" height="150" class="img-thumbnail">
        </a>
        <?php
        }?>
        
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title("<h4>", "</h4>"); ?>
        </a>
       
        <small>
        <span>Posted by: <?php the_author(); ?></span> on <?php get_template_part( 'inc/get', 'meta' ); ?>
        </small>
        
        <p><?php the_excerpt(); ?></p>
        
        <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="btn btn-primary btn-xs">
            + Read More
        </a></p>
        
        <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
        
    </div>