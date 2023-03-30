<?php

get_header("header.php");

echo "<p>page page</p>";


if ( have_posts() ) {
    while ( have_posts() ) {

        get_template_part( 'template-parts/content', 'page' );
        the_post();
        ?>
        <div class="card">
        <h2><?php the_title(); ?></h2>
        <div><?php the_content(); ?></div></div>
        <?php
        
    }
}
