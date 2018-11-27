<style type="text/css">
    .rojo {
      background: #d08c8c!important;
    }
    .azul {
      background: blue!important;
    }
</style>
<div id="datepicker"></div>
<span class="dt"></span>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    var nom = "<?php echo $n_meses;?>";
    var nom2 = parseInt(nom);
    var noy = "<?php echo $n_anios;?>";
    var noy2 = parseInt(noy);
    var fecha = "<?php echo $fecha;?>";
    var colores = "<?php echo $colores;?>";

    jQuery( function() {
        var opt = {
            numberOfMonths: nom2,
            yearRange: new Date().getFullYear().toString()+':+'+noy2,
            dateFormat: 'dd/mm/yy',
            defaultDate: fecha
          };
    jQuery("#datepicker").datepicker(opt);

    var dateSelected = jQuery("#datepicker").val();
    jQuery(".dt").css({"background-color": "#d4d4d4", "font-size": "25px", "padding": "7px","display": "inline-block","margin-top": "7px"});
    jQuery(".dt").html(dateSelected);

    jQuery("#datepicker").on("change",function(){
        var dateSelected = jQuery(this).val();
        jQuery(".dt").html(dateSelected);
    });


   /* for (var i=0; i < jQuery(".ui-state-default").text().length; i++) {
        if (jQuery(".ui-state-default")[i]; < 10) {
            jQuery( "td .ui-state-default" ).addClass("rojo");
          } else {
            jQuery( "td .ui-state-default" ).addClass("azul");
          }
      }*/

      for (var i = 0; i < 10; i++) {
        var val = jQuery("td .ui-state-default")[i].text;
        if ( jQuery("td .ui-state-default")[val].text ) {
           jQuery( "td .ui-state-default" ).addClass("rojo");
        }
      }

    });
  });
</script>


