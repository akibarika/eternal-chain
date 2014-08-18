<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-19
 * Des:  The template for displaying category
 */


if ( is_category() ) {
    $this_category = get_category($cat);
    if($this_category->category_parent):
    else:
        $this_category = wp_list_categories('orderby=id&depth=1&show_count=1&title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID."&echo=0");
        $this_category = str_replace( "<a", "<a class=\"author\"", $this_category );
        $this_category = str_replace( ")", " tabs)", $this_category );
        echo '<ul>'. $this_category . '</ul>';
    endif;
}

