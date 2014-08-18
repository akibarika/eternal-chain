<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-8-19
 * Des:  The template for displaying sub category
 */
?>
<li class="cf">
    <span><a class="song" href="<?php the_permalink() ?>" title="Permanent Link: <?php the_title(); ?>" ><span class="icon-music"></span><?php the_title(); ?></a></span>
    <time><?php the_time('d F, Y') ?></time>
</li>
