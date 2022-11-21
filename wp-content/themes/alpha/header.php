<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="wrapper header-row">
            <div class="wrap">
                <div class="logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg " alt="">
                </div>
                <div class="search-form">
                    <?php echo do_shortcode('[ivory-search id="88" title="search-header"]'); ?>
                </div>
                <div class="main-menu">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'header-menu',
                    ]);
                    ?>
                </div>
            </div>
            <div class="wrap-block">
                <?php dynamic_sidebar('number'); ?>
                <?php dynamic_sidebar('button'); ?>
            </div>
        </div>

    </header>