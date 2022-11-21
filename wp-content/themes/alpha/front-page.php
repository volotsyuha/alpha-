<?php get_header(); ?>

<div class="wrapper mainpage-wrapper">
    <div class="content">
        <?php
        while (have_posts()) :
            the_post();
        ?>
            <h1><?php the_title(); ?></h1>
            <div class="cnt"><?php the_content(); ?></div>
            <div class="thumb"><?php the_post_thumbnail(); ?></div>
        <?php
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>