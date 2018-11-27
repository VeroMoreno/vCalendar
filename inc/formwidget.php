<p>
	<!-- aqui recogemos el valor del textarea -->
	<label>Numero de meses a mostrar
	  <select class="widefat" id="<?php echo $this->get_field_id('meses'); ?>" name="<?php echo $this->get_field_name('meses'); ?>" value="<?php echo esc_attr($instance['meses']); ?>">
	     <option value="1">1</option> 
	     <option value="2">2</option> 
	     <option value="3">3</option>
	  </select>
	</label>
</p>
<p>
	<label>Primer día seleccionable en DD/MM/YY
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('dia'); ?>" name="<?php echo $this->get_field_name('dia'); ?>" value="<?php echo esc_attr($instance['dia']); ?>" />
	</label>
</p>
<p>
	<label>Años a mostrar
	  <select class="widefat" id="<?php echo $this->get_field_id('anios'); ?>" name="<?php echo $this->get_field_name('anios'); ?>" value="<?php echo esc_attr($instance['anios']); ?>">
	     <option value="1">1</option> 
	     <option value="2">2</option> 
	     <option value="3">3</option>
	  </select>
</p>
<p>
	<label>Añadir una clase a los diez primeros días, con un css asociado para marcar los días con esa clase en rojo y el resto en azul
	<input type="text" class="widefat" id="<?php echo $this->get_field_id('clase'); ?>" name="<?php echo $this->get_field_name('clase'); ?>" value="<?php echo esc_attr($instance['clase']); ?>" />
	</label>
</p>