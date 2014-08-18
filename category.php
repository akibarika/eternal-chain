<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-18
 * Des: here is the category page
 */
get_header(); ?>
<section class="content clear">
    <div class="wrap-search">
        <div class="search-title">
            Search for the name or tag or guitarist or even band name of one your favorite guitar song here.
        </div>
        <div class="big-search">
            <form action="<?php bloginfo ('url');?>" method="get" role="search">
                <div class="search-bar left">
                    <input class="search-box" type="text" value="" name="s">
                </div>
                <div class="wrap-search-button left">
                    <button class="search-button" type="submit" value="">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="wrap-list">
        <?php if (!category_has_children()) {
            if (have_posts()) :
                echo '<div class="list-title"><a href="'.get_home_url().'">Home</a> &gt; ';
                $catstr = get_category_parents( $cat, true, ' &gt; ' ).'';
                echo substr($catstr, 0, strlen($catstr) - 6 );
                echo '</div>';
                echo '<div class="list-content">';
                echo '<ul>';
                while (have_posts()) :
                    the_post();
                    get_template_part('sub-category-content');
                endwhile;
                echo '</ul>';
                echo '</div>';
            else : ?>
                <div class="list-title">There is nothing</div>
            <?php endif;
        } else {
            if (have_posts()) :
                echo '<div class="list-title"><a href="'.get_home_url().'">Home</a> &gt; ';
                $catstr = get_category_parents( $cat, true, ' &gt; ' ).'';
                echo substr($catstr, 0, strlen($catstr) - 6 );
                echo '</div>';
                echo '<div class="list-content">';
                get_template_part('category-content');
                echo '</div>';
            else : ?>
                <div class="list-title">There is nothing</div>
            <?php endif;
        } ?>
    </div>
</section>

<?php get_footer(); ?>

