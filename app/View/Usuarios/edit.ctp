<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Usuario', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Editrar Usuario'); ?></h2>
				<?php

					echo $this->Form->input('id');
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
					echo $this->Form->input('cedula', array('class' => 'form-control', 'label' => 'Cedula'));
					echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Telefono'));
					echo $this->Form->input('direccion', array('class' => 'form-control', 'label' => 'Dirección'));
				?>
			</fieldset>
				
			<p>
				<?php echo $this->Form->end(array('label' => 'Editrar Usuario', 'class' =>'btn btn-success')); ?>
				</p>

			<div class="actions">
				<h3><?php echo __('Acciones'); ?></h3>
				<ul>

				
					<li><?php echo $this->Html->link(__('Lista de Puestos'), array('controller' => 'puestos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Puesto'), array('controller' => 'puestos', 'action' => 'add')); ?> </li>
				</ul>
			</div>
			</div>
	 </div>
</div>