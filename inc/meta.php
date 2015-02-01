<?php
/**
 * Display Meta
 *
 * @package cad-wp-theme
 * @author marcelbadua
 */
?>
<small>

	<ul class="meta list-inline">
		
		<li>
			<span class="glyphicon glyphicon-user text-muted" aria-hidden="true"></span>
			<?php the_author_link(); ?>
			</li>

		<li>
			<span class="glyphicon glyphicon-calendar text-muted" aria-hidden="true"></span>
			<?php the_time('F jS, Y') ?>
		</li>
		
		<?php
		
		$categories = get_the_category();
		$separator = ', ';
		$output = ' ';
		
		if($categories)
		{ ?>
		
		<li>	
			<span class="glyphicon glyphicon-folder-open text-muted" aria-hidden="true"></span>&nbsp;
			<?php
			foreach($categories as $category) 
			{
				$output .= ' <a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
			}
			echo trim($output, $separator);
			?>
		</li>
		<?php
		}
		?>
		
		<li><?php the_tags('<span class="glyphicon glyphicon-tag text-muted" aria-hidden="true"></span> '); ?></li>

	</ul>
	
</small>