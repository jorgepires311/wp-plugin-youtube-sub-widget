<?php 
// Add Scripts 
function ytsAddScripts(){
    // CSS
    wp_enqueue_style('yts-main-css', plugins_url().'/youtubesubs/css/style.css');
    // JS
    wp_enqueue_script('yts-main-script', plugins_url().'/youtubesubs/js/main.js');

    // Google Script
    wp_register_script('google','https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}

add_action('wp_enqueue_scripts','ytsAddScripts');