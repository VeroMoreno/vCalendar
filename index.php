<?php
/*
Plugin Name: VeriCalendar
Plugin URI: https://veromoreno.com/
Description: Prueba 2
Author: Veri
Version: 1.0
Author URI: https://veromoreno.com/
*/

add_action("admin_menu", "create_menu");
function create_menu() {
  add_menu_page('Vcalendar', 'Vcalendar', 'manage_options', 'v_cal', 'output_menu');
}

function output_menu() {
  if($_POST && $_POST['dateSelected']) {
    $date = $_POST['dateSelected'];
    if(update_option('date_selected', $date)) {
      echo '<p>EL CALENDARIO SE GUARDÓ CORRECTAMENTE</p>';
    } else {
      echo '<p>NO SE PUDO GUARDAR EL CALENDARIO</p>';
    }
  }
	include('formulario-vcalendar.php');
}

add_action('wp_head', 'head_calendar');

function head_calendar() {
  ?>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <style>
        .red_selection a {background:red!important;}
      </style>
  <?php
}

/*******************************SHORTCODE*/

function v_shortcode(){
      ?>
      <div id="datepicker"></div>
      <span class="dt"></span>

      <script type="text/javascript">
        $( function() {

            var opt = {
                numberOfMonths: 3,
                yearRange: new Date().getFullYear().toString()+':+3',
                dateFormat: 'dd/mm/yy'
            };
          $("#datepicker").datepicker(opt);

          $("#datepicker").on("change",function(){
                var dateSelected = $(this).val();
                $(".dt").html(dateSelected);
          });

            for (var i=0; i < $(".ui-state-default").text().length; i++) {
              if (i < 10) {
                  $("td").addClass("red_selection"); //EN PRUEBAS
                }
            }
        });
      </script>
    <?php
}
add_shortcode('vEngine', 'v_shortcode');

?>