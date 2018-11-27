<div id="datepicker"></div>
<span class="dt"></span>


<style type="text/css">
    td.specialDay, table.ui-datepicker-calendar tbody td.specialDay a { 
    background: none !important;
    background-color: #fffac2 !important; 
    color: #006633;
    }
</style>


<script type="text/javascript">
  jQuery(document).ready(function($) {
    var nom = "<?php echo $n_meses;?>";
    var nom2 = parseInt(nom);
    var noy = "<?php echo $n_anios;?>";
    var noy2 = parseInt(noy);

    var fecha = "<?php echo $fecha;?>";
    var clase = "<?php echo $clase;?>";

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

  /*  for (var i=0; i < $(".ui-state-default").text().length; i++) {
        if (i < 10) {
        	  console.log(i);
            jQuery("td").addClass("caca");
            console.log(clase);
            jQuery(".caca a").css({"background-color": "red"});
          }
      }*/
  });

  var eventDates = []; 
  eventDates[ new Date( '17/04/1985' )] = new Date( '17/04/1985' );
  eventDates[ new Date( '04/17/1985' )] = new Date( '04/17/1985' );

  jQuery('#datepicker').datepicker('option', 'beforeShowDay', highlightDays);

 function highlightDays(date) {
      for (var i = 0; i < eventDates.length; i++) {
          if (i < 10) {
              return [true, 'specialDay'];
          }
      }
      return [true, ''];
  }


   });
</script>


