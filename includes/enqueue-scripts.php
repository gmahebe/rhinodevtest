<?php

if (!function_exists('rhinoactive_scripts')) :
	function rhinoactive_scripts() {
		global $wp_query, $post;
		
		// Enqueue main css with timestamp
		
		
	}

	add_action( 'wp_enqueue_scripts', 'rhinoactive_scripts' );
endif;