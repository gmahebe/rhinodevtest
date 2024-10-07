<?php


function theme_featured_image_setup() { 
	add_theme_support( 'post-thumbnails' ); 
}

add_action( 'after_setup_theme', 'theme_featured_image_setup' );

register_nav_menus(
	array(
		WPMenus::PRIMARY_MENU  => esc_html__( 'Primary Menu', 'rhinoactive' ),
		WPMenus::SECONDARY_MENU => esc_html__( 'Secondary Menu', 'rhinoactive' ),
	)
);