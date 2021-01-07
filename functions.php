<?php
//Titlu Dinamic//
function siposalex_theme_support(){
add_theme_support('title-tag');
}

add_action('after_setup_theme', 'siposalex_theme_support');


function sipos_alex_menus(){
	$locations = array(
	'primary' => "Desktop Primary Menu",
	'footer' => "Footer Menu"	
	);
	register_nav_menus($locations);
}

add_action('init', 'sipos_alex_menus');  

function siposalex_register_styles(){
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('siposalex-style', get_template_directory_uri() ."/style.css", array('siposalex-bootstrap'), '$version', 'all');
	wp_enqueue_style('siposalex-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), '4.3.1', 'all');
	wp_enqueue_style('siposalex-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css", array(), '5.15.1', 'all');
}

add_action('wp enqueue_scripts', 'siposalex_register_styles');




function siposalex_register_scripts(){
	
	wp_enqueue_script('siposalex-jquery', "https://code.jquery.com/jquery-3.5.1.slim.js", array(), '3.5.1', true);
	wp_enqueue_script('siposalex-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), '1.16.1', true);
	wp_enqueue_script('siposalex-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2', true);
	wp_enqueue_script('siposalex-js', get_template_directory_uri() ."/assets/javascript/main.js", array(), '1.0', true);
}

add_action('wp enqueue_scripts', 'siposalex_register_scripts');




?>