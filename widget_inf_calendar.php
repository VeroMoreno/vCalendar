<?php

/*
 * Plugin Name: VCalendar
 * Plugin URI: https://veromoreno.com/
 * Description: Datepicker jquery configurable
 * Author: Veri
 * Version: 1.0
 * 
 */

	add_action('widgets_init','crearWidgetCalendar');

	function crearWidgetCalendar(){
		//require(plugin_dir_path(__FILE__).'/inc/widget_calendar_class.php');
		include('inc/widget_calendar_class.php');
		register_widget('widget_calendar');
	}

	//carga de archivos js externos
	function add_e2_date_picker(){
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_style('e2b-admin-ui-css','http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/themes/base/jquery-ui.css',false,"1.9.0",false);
	}
	add_action('wp_enqueue_scripts', 'add_e2_date_picker');

	wp_enqueue_script( 'wp-jquery-date-picker', get_template_directory_uri() . 'admin.js' );

?>