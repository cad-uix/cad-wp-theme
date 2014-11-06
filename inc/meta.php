<span>
    <?php the_time('F jS, Y') ?>
</span>

  <span><?php the_author(); ?></span>
  
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<span class="label label-default">'.'<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></span>'.$separator;
	}
echo trim($output, $separator);
}
?>

<?php the_tags('<span class="label label-default">','</span> <span class="tag label label-default">', "</span>"); ?>


<div class="meta">


</div>