<div class ="container">
	<div class = "row">
			<div class="col-md-6">
				<?php echo $this->Form->create('Marca', array('role' => 'form' )); ?><p>

				<fieldset>
					<h2><?php echo __('Registrar Marca'); ?></h2>
				<?php
					echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
					
				?>
			</fieldset>
				
			<p>
				<?php echo $this->Form->end(array('label' => 'Crear Marca', 'class' =>'btn btn-success')); ?>
				</p>

			<div class="actions">
				<h3><?php echo __('Acciones'); ?></h3>
				<ul>

				
					<li><?php echo $this->Html->link(__('Lista de Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('Nueva Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
				</ul>
			</div>
			</div>
	 </div>
</div>