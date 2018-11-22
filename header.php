<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Wordpress Blog Demo</title>
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
            <?php wp_head(); ?>
</head>
<body>
<div id="hero">
    <nav>
        <a href="<?php echo get_bloginfo( 'wpurl' );?>"><img id="logo" src="<?php echo get_bloginfo('template_directory'); ?>/WordPress_blue_logo.svg.png" rel="stylesheet"></a>
        <ul>
            <a>Start</a>
            <a>Contact</a>
            <a>Impressum</a>
        </ul>
    </nav>
    <div class="caption">
        <h2><?php echo get_bloginfo( 'name' ); ?></h2>
        <h5><?php echo get_bloginfo( 'description' ); ?></h5>
    </div>
</div>
