<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script type="module" src="<?php echo get_stylesheet_directory_uri() . '/src/main.js'; ?>"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/src/main.css'; ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="root">
	
<?php get_template_part('template-parts/top-nav');