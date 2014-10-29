<?php 
/** 
* Template Name: Contact
**/ 
?>

<?php get_header(); ?>
	
	<main class="container page-wrap">
	
	<?php cad_breadcrumb(); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="page-header">
  				<?php the_title( '<h1>', '</h1>' ); ?>
			</div>
			
			<div class="row">
			<div class="entry col-sm-6">

				<?php the_content(); ?>

			</div>

			<div class="entry col-sm-6">

			<?php
				$options = get_option('cad_theme_options');
			?>
			<?php 
			if(!empty($options['address'])) { ?>
			<span id="map-address"><?php echo $options['address']; ?></span>
			<div id="google-map" style="width: 100%; height: 350px;"></div>
			<?php } ?>

				

			</div>
			</div>


		</article>

		<?php endwhile; endif; ?>
	
	</main>

<?php get_footer(); ?>
