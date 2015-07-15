<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Zapato', array('role' => 'form','novalidate' )); ?><p>

				<fieldset>
					<h2><?php echo __('Editar Zapato'); ?></h2>
				<?php

					echo $this->Form->input('id');
					echo $this->Form->input('codigo', array('class' => 'form-control', 'label' => 'Codigo'));
					echo $this->Form->input('marca_id', array('class' => 'form-control', 'label' => 'Marca'));
					echo $this->Form->input('modelo_id', array('class' => 'form-control', 'label' => 'Modelo'));
					echo $this->Form->input('talla', array('class' => 'form-control', 'label' => 'Talla'));
					echo $this->Form->input('color', array('class' => 'form-control', 'label' => 'Color'));
					echo $this->Form->input('precio', array('class' => 'form-control', 'label' => 'Precio'));
					echo $this->Form->input('cantidad', array('class' => 'form-control', 'label' => 'Cantidad'));
				?>
			</fieldset>
				
			<p>
				<?php echo $this->Form->end(array('label' => 'Editar Zapato', 'class' =>'btn btn-success')); ?>
				</p>

			<div class="actions">
				<h3><?php echo __('Acciones'); ?></h3>
				<ul>

				
					<li><?php echo $this->Html->link(__('Lista de Zapatos'), array('controller' => 'zapatos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Zapato'), array('controller' => 'zapatos', 'action' => 'add')); ?> </li>
				</ul>
			</div>
			</div>
	 </div>
</div>