<form method="post">
  <h1>Opciones Datepicker</h1>
  <p>Número de meses a mostrar:</p>
  <select name="months">
     <option value="1">1</option> 
     <option value="2">2</option> 
     <option value="3">3</option>
  </select>
  <p>El primer día seleccionable por parte del usuario, en formato DD/MM/YYYY.</p>
<input type="text" name="dateSelected" value="<?php echo ($valor_option = get_option('date_selected'))? $valor_option : '';?>">
  <p>Número de años que se pueden seleccionar:</p>
  <select name="years">
     <option value="1">1</option> 
     <option value="2">2</option> 
     <option value="3">3</option>
  </select>
  <p>Añadir una clase a los diez primeros días, con un css asociado para marcar los días con esa clase en rojo y el resto en azul.</p>
  Clase:  <input type="text" name="css" value="">
  <p>-</p>
  <div><input type="submit" value="Guardar"></div>
</form>