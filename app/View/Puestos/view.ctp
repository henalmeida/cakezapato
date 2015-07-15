
<div class="well">
<h2><?php echo __('Puesto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Posicion'); ?></dt>
		<dd>
			<?php echo h($puesto['Puesto']['posicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($puesto['Usuario']['nombre'], array('controller' => 'usuarios', 'action' => 'view', $puesto['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo $this->Time->format('d-m-Y;h:i A',$puesto['Puesto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo $this->Time->format('d-m-Y;h:i A',$puesto['Puesto']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Puesto'), array('action' => 'edit', $puesto['Puesto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Puesto'), array('action' => 'delete', $puesto['Puesto']['id']), array(), __('Estas seguro que deseas Eliminar el Puesto # %s?', $puesto['Puesto']['id'])); ?> </li>
		
	</ul>
</div>
