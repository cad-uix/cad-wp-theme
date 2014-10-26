<div class="col-xs-4 entry">
<?php if ( has_post_thumbnail() ) { ?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<?php the_post_thumbnail('thumbnail', array( 'class' => 'img-responsive')); ?>
</a>
<?php } ?>

<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<?php get_template_part( 'inc/content', 'meta' ); ?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>">Read More</a>
</div>