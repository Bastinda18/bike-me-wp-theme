<?php
function bike_me_files(){
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
   
    wp_enqueue_style('bike_me_main_stile', get_stylesheet_uri());
  
}
add_action('wp_enqueue_scripts', 'bike_me_files');

function bike_me_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'bike_me_features');