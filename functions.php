<?php 

function university_files(){
    // want more css? duplicate this line
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

// within () give two arguments. wp_enqueue is a specific hook to load the function or second argument
add_action('wp_enqueue_scripts', 'university_files');