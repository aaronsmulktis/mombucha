<?php 

// update_option( 'siteurl', 'https://mombucha.com' );
// update_option( 'home', 'https://mombucha.com' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

?>