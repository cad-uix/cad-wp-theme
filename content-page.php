<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="page-header">
  				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
			
			<?php if ( has_post_thumbnail() ) { ?>
            <div class="featured-image">
                <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
                <hr>      
            </div>
            <?php } ?>
			
			<div class="entry">

				<?php the_content(); ?>

			</div>

		</article>

		<?php endwhile; endif; ?>