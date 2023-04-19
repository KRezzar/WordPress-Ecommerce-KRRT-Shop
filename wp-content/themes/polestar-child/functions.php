<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
	$theme        = wp_get_theme();
	wp_enqueue_style( $parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),  // If the parent theme code has a dependency, copy it to here.
		$theme->parent()->get( 'Version' )
	);
	wp_enqueue_style( 'child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' ) // This only works if you have Version defined in the style header.
	);


}



/*
function CategorySample1_titles($title, $id=null){
	if ( in_category( 'CategorySample2', $id )){
		$title = "Dynamic: " .$title;
	}else{
		$title = "wew: " .$title;
	}
    $title = "KR: " .$title; // global addition to title
	return $title;

}
add_filter( 'the_title', 'CategorySample1_titles', 10, 2 );*/
