<?php

function timelesswood_register_styles()
{
    wp_enqueue_style('timelesswood-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'timelesswood_register_styles');

function timelesswood_register_scripts()
{
    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/3d2f8be472.js', array(), '1.0');
    wp_enqueue_script('timelesswood-js', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}
add_action('wp_enqueue_scripts', 'timelesswood_register_scripts');
