<?php
/**
 * Created by PhpStorm.
 * User: akibarika
 * Date: 26/08/14
 * Time: 11:40 上午
 */
get_header();

while ( have_posts() ) : the_post();

?>
<div class="wrap-list">
    <div class="list-title">
        <a href="<?php get_home_url() ?>">Home</a> &gt;
        <?php $category = get_the_category(); $output = ''; if($category[0]){ $output = '<a href="'.get_category_link( $category[0]->term_id).'" title="' .esc_attr(sprintf(__( "View all tabs in %s"), $category[0]->name )). '">'.$category[0]->cat_name.'</a>'; echo trim($output); } ?> &gt;
        <?php $category = get_the_category(); $output = ''; if($category[1]){ $output = '<a href="'.get_category_link( $category[1]->term_id ).'" title="' .esc_attr(sprintf(__( "View all tabs in %s"), $category[1]->name )). '">'.$category[1]->cat_name.'</a>'; echo trim($output); } ?>
    </div>
</div>
<article id="tab-<?php the_ID(); ?>" class="post guitar-tab">
    <div class="post-heading">
        <h1><?php the_title(); ?></h1>
        <div class="post-date">
            <?php the_time('F j, Y') ?>
        </div>
    </div>
    <div class="post-detail cf">
        <?php the_content(); ?>
    </div>
    <div class="single-tags">
        <?php the_tags(' ',' '); ?>
    </div>

</article>
<?php endwhile; ?>
<?php get_footer(); ?>