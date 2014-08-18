<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-18
 * Des: here is the website home page
 */
get_header(); ?>
        <div class="wrap-list">
            <?php if (have_posts()) :
                echo '<div class="list-title">Most recent guitar tabs:</div>';
                echo '<div class="list-content">';
                echo '<ul>';
                while (have_posts()) :
                    the_post();
                    get_template_part('most-recent-content');
                endwhile;
                echo '</ul>';
                echo '</div>';
            else :
            ?>
            <div class="list-title">There is nothing</div>
            <?php endif; ?>
        </div>
    </section>

<?php get_footer(); ?>
