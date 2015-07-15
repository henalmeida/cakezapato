
<div class="well">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo $this->Time->format('d-m-Y;h:i A',$usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo $this->Time->format('d-m-Y;h:i A',$usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Detalles de Puestos'); ?></h3>
	<?php if (!empty($usuario['Puesto'])): ?>
	<table class ="table rable-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Posicion'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", __('Acciones'); ?></th>
	</tr>
	<?php foreach ($usuario['Puesto'] as $puesto): ?>
		<tr>
			<td><?php echo $puesto['id']; ?></td>
			<td><?php echo $puesto['cargo']; ?></td>
			<td><?php echo $puesto['posicion']; ?></td>
			<td><?php echo $puesto['usuario_id']; ?></td>
			<td><?php echo $this->Time->format('d-m-Y;h:i A', $puesto['created']); ?></td>
			<td><?php echo $this->Time->format('d-m-Y;h:i A', $puesto['modified']); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'puestos', 'action' => 'view', $puesto['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'puestos', 'action' => 'edit', $puesto['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'puestos', 'action' => 'delete', $puesto['id']), array('class' => 'btn btn-sm btn-default'), array(), __('Estas Seguro que desear eliminar el puesto # %s?', $puesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
