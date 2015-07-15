<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Modelo', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Modelo'); ?></h2>
				<?php
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					echo $this->Form->input('tipo', array('class' => 'form-control', 'label' => 'Tipo'));
					
				?>
			</fieldset>
				
			<p>
				<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
				</p>

			<div class="actions">
				<h3><?php echo __('Acciones'); ?></h3>
				<ul>

				
					<li><?php echo $this->Html->link(__('Lista de Modelos'), array('controller' => 'modelos', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nuevo Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
				</ul>
			</div>
			</div>
	 </div>
</div>