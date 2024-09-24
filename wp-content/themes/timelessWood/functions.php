<?php

    function timelesswood_register_styles(){
        wp_enqueue_style('timelesswood-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'timelesswood_register_styles');
?>