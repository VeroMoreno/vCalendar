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
$months = $_POST['months'];
update_option('months_selected', $months);

$years = $_POST['years'];
update_option('years_selected', $years);

if($_POST && $_POST['css']) {

}	
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
/************************************/

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
	$number_of_months = get_option('months_selected');
	$number_of_years = get_option('years_selected');
      ?>
      <div id="datepicker"></div>
      <span class="dt"></span>

      <script type="text/javascript">
      var nom = "<?php echo $number_of_months;?>";
      var nom2 = parseInt(nom);
      var noy = "<?php echo $number_of_years;?>";
      var noy2 = parseInt(noy);

        $( function() {
            var opt = {
                numberOfMonths: nom2,
                yearRange: new Date().getFullYear().toString()+':+'+noy2,
                dateFormat: 'dd/mm/yy'
            };
          $("#datepicker").datepicker(opt);

          $("#datepicker").on("change",function(){
                var dateSelected = $(this).val();
                $(".dt").html(dateSelected);
          });

		  $("td").addClass("red_selection");
           /* for (var i=0; i < $(".ui-state-default").text().length; i++) {
              if (i < 10) {
              	  console.log(i);
                  $("td").addClass("red_selection"); //EN PRUEBAS
                }
            }*/
        });
      </script>
    <?php
}
add_shortcode('vEngine', 'v_shortcode');

?>