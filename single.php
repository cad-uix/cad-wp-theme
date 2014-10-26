<?php get_header(); ?>
<div class="container single">
	<?php cad_breadcrumb(); ?>
	<div class="row">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<main class="post col-sm-8" id="post-<?php the_ID(); ?>">
			<article>
				<div class="page-header">
  				<?php the_title( '<h1>', '</h1>' ); ?>
  				<?php get_template_part( 'inc/content', 'meta' ); ?>
				</div>
				<div class="entry">
					<?php the_content(); ?>
				</div>
			</article>
		</main>
		<?php endwhile; endif; ?>
		<aside class="col-sm-4">
			<small>
				<h3>Latest Post</h3>
				<?php get_template_part( 'inc/content', 'latest' ); ?>
			</small>
		</aside>
	</div>
</div>
<?php get_footer(); ?>
