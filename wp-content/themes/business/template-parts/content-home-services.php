<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 16.02.2018
 * Time: 15:02
 */
?>

<li>
    <div class="service_icon"><?php the_post_thumbnail(); ?></div>
    <div class="text_block">
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p>
    </div>
</li>
