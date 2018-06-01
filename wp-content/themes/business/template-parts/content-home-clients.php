<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 16.02.2018
 * Time: 15:21
 */
?>

<li>
    <div class="quotes">
        <p><?php the_content(); ?></p>
        <div class="client clearfix">
            <div class="client_photo"><?php the_post_thumbnail(); ?></div>
            <h3><?php the_title(); ?><span><?php the_field('client_post'); ?></span></h3>
        </div>
    </div>
</li>
