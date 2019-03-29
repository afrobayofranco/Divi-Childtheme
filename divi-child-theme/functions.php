<?php
function my_theme_enqueue_styles() {

    $parent_style = 'divi'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	//LOAD CHILD THEME STYLE SHEET
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
	
	//LOAD FONT AWESOME
	wp_enqueue_style( 'load-fa', 
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' 
	);

	//LOAD CUSTOM SCRIPTS
	wp_enqueue_script( 'childtheme_custom_script', 
		get_stylesheet_directory_uri() . '/js/childtheme_custom_script.js', 
		array ( 'jquery' ), 
		"1.0.0", true 
	);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>