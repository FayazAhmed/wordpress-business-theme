<?php
	if (! function_exists ( 'nm_business_casual' )) :

		/** 
		***	Function called on theme activation
		*** Main function for theme that contain's diffrent functions
		**/
		function nm_business_casual(){
			/** 
			***	Adding title to theme	
			**/
			add_theme_support('title-tag');

			/** 
			***	register nav manu for theme	
			***  register_nav_menus( array( '$location' => __( '$discription', 'theme_slug') , ) );
			**/
			register_nav_menus(
				array(
					'primary' => __( 'Primary Menu', 'business-casual' ),
				)
			);

			require_once('includes/wp_bootstrap_navwalker.php');
		}
	endif;
		add_action('after_setup_theme', 'nm_business_casual');

	/** 
	***	Adding scripts and style to theme	
	**/
	function nm_business_scripts(){
		/**
		*** theme main css and jquery
		*** css/business-casual.css
		*** js/scripts.js
		**/
		wp_enqueue_style('main-css', get_stylesheet_uri());
		wp_enqueue_style('custom-css',get_template_directory_uri().'/css/business-casual.css');
		wp_enqueue_script('jquery');
		wp_enqueue_script('script-js', get_template_directory_uri().'/js/scripts.js', array('jquery','bootstrap-js'));
		
		/**
		*** theme bootstrap css and script
		*** css/bootstrap.min.css
		*** js/bootstrap.min.js
		**/
		wp_enqueue_style('bs-css', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));

		/**
		*** theme fonts css 
		*** http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800
		*** http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic
		**/
		wp_enqueue_style('atalic-font-css', "http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
		wp_enqueue_style('latin-font-css', "http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic");
	
	}

	add_action('wp_enqueue_scripts', 'nm_business_scripts');

