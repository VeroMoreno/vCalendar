<?php

class widget_calendar extends WP_Widget {
	//Constructor de la funcion, definición
	/*public function __construct(){
		$opciones = array('class_name' => 'widget_calendar', 'description' => 'Vcalendar en jQuery UI');
		parent::__construct('widget_calendar', 'Vcalendar configurable', $opciones);
	}*/

	public function __construct() {
	    parent::__construct(
	        // base ID of the widget
	        'widget_calendar',
	        // name of the widget
	        __('Vcalendar configurable', 'Vcalendar configurable' ),
	        // widget options
	        array (
	            'description' => __( 'Aqui encontrarás las opciones necesarias para configurar tu widget.', 'Vcalendar configurable' )
	        )
	    );   
	}
	
	
		// El metodo que me permite crear el formulario en la pantalla de Widgets.
		public function form($instance)
		{
			//require(plugin_dir_path(__FILE__).'/formwidget.php');
			include('formwidget.php');
		}
		
		//el metodo para actualizar la confi del usuario y grabarlos en BBDD
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
			
			$instance['meses'] = $new_instance['meses'];
			$instance['dia'] = strip_tags($new_instance['dia']);
			$instance['anios'] = strip_tags($new_instance['anios']);
			$instance['clase'] = strip_tags($new_instance['clase']);
			
			//repitiriamos por cada campo de nuestro widget la linea de arriba con el literal correspondiente
			return $instance;
		}	

		//visualización del plugin
		public function widget( $args, $instance ) {
			$n_meses = $instance[ 'meses' ];
			$n_anios = $instance[ 'anios' ];
			$fecha = $instance[ 'dia' ];
			$clase = $instance[ 'clase' ];
			include('vistawidget.php');

			//require(plugin_dir_path(__FILE__).'/vistawidget.php');
			
		}
}
?>