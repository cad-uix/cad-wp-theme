<div class="entry">



<div class="col-sm-9">
<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php include ( get_template_directory() . '/inc/meta.php' ); ?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>">Read More</a>	
</div>

<div class="col-sm-3">
<?php if ( has_post_thumbnail() ) { ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive')); ?>
</a>
<?php } ?>	
</div>



</div>