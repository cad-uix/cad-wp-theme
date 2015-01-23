<?php
/**
 * Display Meta
 *
 * @package oracle
 * @author marcelbadua
 */
?>

<ul class="meta list-inline">
	
	<li><i class="fa fa-user text-muted"></i> <?php the_author_link(); ?></li>

	<li><i class="fa fa-clock-o text-muted"></i> <?php the_time('F jS, Y') ?></li>
	
	<?php
	
	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	
	if($categories)
	{ ?>
	
	<li>	
		<i class="fa fa-folder-open text-muted"></i>
		<?php
		foreach($categories as $category) 
		{
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
		echo trim($output, $separator);
		?>
	</li>
	<?php
	}
	?>
	
	<li><?php the_tags('<i class="fa fa-tag text-muted"></i> '); ?></li>

</ul>

<div class="clearfix">
&nbsp;</div>