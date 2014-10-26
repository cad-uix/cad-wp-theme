<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$output .= '<span class="label label-default">'.$category->cat_name.'</span>'.$separator;
	}
echo trim($output, $separator);
}
?>