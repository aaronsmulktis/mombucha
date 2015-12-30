<?php 

// update_option( 'siteurl', 'https://mombucha.com' );
// update_option( 'home', 'https://mombucha.com' );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

//Ensure the $wp_rewrite global is loaded
global $wp_rewrite;
//Call flush_rules() as a method of the $wp_rewrite object
$wp_rewrite->flush_rules( true );

?>