<?php

/* 
=============================================================================================
                                 These are css functions
=============================================================================================
*/

function animate_template_styles()
{
	wp_enqueue_style('bootstrap_css', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css',"1.0.0", 'all');
	wp_enqueue_style('style_css', get_template_directory_uri(). '/style.css', "1.0.0", 'all');
	wp_enqueue_style('animations._css', get_template_directory_uri(). '/css/animations.css',true,"1.0.0", 'all');

}

add_action('wp_enqueue_scripts', 'animate_template_styles');

/* 
=============================================================================================
                                    These are activate menu functions
=============================================================================================
*/

function animate_template_js() 
{   
	wp_enqueue_script('jquery.min_js', get_template_directory_uri(). '/vendor/jquery/jquery.min.js', array('jquery'), '',true);
	
	wp_enqueue_script('script_js', get_template_directory_uri(). '/js/script.js', array('jquery'), '',true);
	//wp_enqueue_script('script.min_js', get_template_directory_uri(). '/js/script.min.js', array('jquery'), '',true);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '',true);
	
}

add_action('wp_enqueue_scripts','animate_template_js');

/* 
=============================================================================================
                                	hese are activate menu functions
=============================================================================================
*/

function animatetheme_setup() {
   
	add_theme_support('Menus');

  	register_nav_menu( 'Primary Menu', 'Primary Header Navigation');
  	register_nav_menu( 'Secondary Menu', 'Footer Navigation');
   
}
add_action('after_setup_theme', 'animatetheme_setup');


/* 
=============================================================================================
                                    Theme support  functions
=============================================================================================
*/
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'gallery', 'video') );
add_theme_support('html5', array('search-form'));


/* 
=============================================================================================
                                    These are widget functions
=============================================================================================
*/
function animatetheme_widget_setup(){

	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);
}
add_action('widgets_init', 'animatetheme_widget_setup');

/* 
=============================================================================================
                                    walker nav menu
=============================================================================================
*/
//require_once('wp_bootstrap_navwalker.php');

?>