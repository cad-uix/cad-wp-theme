<?php
/**
* Template Name: Two Columns
**/
?>

<?php get_header(); ?>
	<div class="container">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2 class="post-title"><?php the_title(); ?></h2>

			<div class="entry row">

				<?php
					$text = get_the_content('Read more');

					$splitstring1 = substr($text, 0, floor(strlen($text) / 2));
					$splitstring2 = substr($text, floor(strlen($text) / 2));

					if (substr($splitstring1, 0, -1) != ' ' AND substr($splitstring2, 0, 1) != ' ')
					{
    					$middle = strlen($splitstring1) + strpos($splitstring2, ' ') + 1;
					}
					else
					{
    					$middle = strrpos(substr($text, 0, floor(strlen($text) / 2)), ' ') + 1;    
					}
					$string1 = substr($text, 0, $middle);
					$string2 = substr($text, $middle); 

				?>

				<div class="col-sm-6">
					<?php echo $string1; ?>
				</div>

				<div class="col-sm-6">
					<?php echo $string2; ?>
				</div>

			</div>

		</div>

		<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>