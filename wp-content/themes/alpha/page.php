<?php get_header(); ?>

<div class="wrapper">
    <div class="content">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <h1><?php the_title(); ?></h1>
            <div class="thumb"><?php the_post_thumbnail(); ?></div>
            <div class="text"><?php the_content(); ?></div>
        <?php
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>