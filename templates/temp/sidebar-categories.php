<?php

$categories = get_categories();
foreach($categories as $category) {
   echo '<div class="categories-link"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '<span class="">('.$category->count.')</span>'. '</a><hr></div>';
}


?>
