<?php
$args = array(
	'posts_per_page' => 5,
	'paged' => get_query_var('paged')
);
query_posts( $args );
if ( have_posts() ) : ?>
<ul class="list-unstyled">
	<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
		<?php include ( get_template_directory() . '/inc/meta.php' ); ?>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" rel="bookmark">Read More</a>
	</li>
	<?php endwhile; ?>
</ul>
<?php endif; ?>