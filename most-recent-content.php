<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-18
 * Des:  The template for displaying most recent content
 */
?>

<li class="cf">
    <span><?php $category = get_the_category(); $output = ''; if($category[1]){ $output = '<a class="author" href="'.get_category_link( $category[1]->term_id ).'" title="' . esc_attr( sprintf( __( "View all tabs in %s" ), $category[1]->name ) ) . '"><span class="icon-user"></span>'.$category[1]->cat_name.'</a>'; echo trim($output); } ?> - <a class="song" href="<?php the_permalink() ?>" title="Permanent Link: <?php the_title(); ?>" ><span class="icon-music"></span><?php the_title(); ?></a></span>
    <time><?php the_time('d F, Y') ?></time>
</li>
