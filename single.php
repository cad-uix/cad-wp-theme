<?php get_header(); ?>

<div class="container">

	<?php cad_breadcrumb(); ?>

	<div class="row">
		
		<main class="col-sm-8">

	     <?php get_template_part( 'inc/content', 'single' ); ?>

		</main>
		
		<aside class="col-sm-4">

			<small>

				<h3>Latest Post</h3>

				<?php get_template_part( 'inc/content', 'latest' ); ?>

			</small>

		</aside>

	</div>

</div>

<?php get_footer(); ?>