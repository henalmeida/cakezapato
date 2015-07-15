
<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Puesto', array('role' => 'form','novalidate' )); ?><p>

				<fieldset>
					<h2><?php echo __('Editar Puesto'); ?></h2>
				<?php

					echo $this->Form->input('id');

					echo $this->Form->input('cargo', array('class' => 'form-control', 'label' => 'Cargo'));
					echo $this->Form->input('posicion', array('class' => 'form-control', 'label' => 'Posición'));
					echo $this->Form->input('usuario_id', array('class' => 'form-control', 'label' => 'Usuario'));
					
				?>
			</fieldset>
				
			<p>
				<?php echo $this->Form->end(array('label' => '
				Editar Puesto', 'class' =>'btn btn-success')); ?>
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