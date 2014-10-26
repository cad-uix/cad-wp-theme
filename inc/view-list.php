
    <div class="entry col-xs-12" id="post-<?php the_ID(); ?>">
    
        <?php if ( has_post_thumbnail() ) { ?>
        <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail')); ?>
        </a>
        <?php } else {
        ?>
        <a class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
             <img src="http://placehold.it/150x150&text=blog" class="img-thumbnail">
        </a>
        <?php
        }?>
        
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title("<h4>", "</h4>"); ?>
        </a>
    
        <span><?php the_author(); ?></span>
        
         <?php get_template_part( 'inc/get', 'meta' ); ?>
    
        <?php get_template_part( 'inc/get', 'category' ); ?>
        
        <?php get_template_part( 'inc/get', 'tags' ); ?>
        
        
        <p><?php the_excerpt(); ?></p>
        
        <p><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            + Read More
        </a></p>
        
       
        
    <hr>
    </div>