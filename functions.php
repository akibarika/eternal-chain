<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-19
 * Time: 上午12:47
 */

function category_has_children() {
    global $wpdb;
    $term = get_queried_object();
    $category_children_check = $wpdb->get_results(" SELECT * FROM wp_term_taxonomy WHERE parent = '$term->term_id' ");
    if ($category_children_check) {
        return true;
    } else {
        return false;
    }
}
