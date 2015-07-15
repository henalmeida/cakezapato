
<div class="well">
<h2><?php echo __('Marcas de Zapatos'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($this->Time->format('d-m-Y;h:i A',$marca['Marca']['created'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Detalles de Marcas en Zapatos'); ?></h3>
	<?php if (!empty($marca['Zapato'])): ?>
	<table class ="table rable-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Modelo Id'); ?></th>
		<th><?php echo __('Talla'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Creaado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", __('Acciones'); ?></th>
	</tr>
	<?php foreach ($marca['Zapato'] as $zapato): ?>
		<tr>
			<td><?php echo $zapato['id']; ?></td>
			<td><?php echo $zapato['codigo']; ?></td>
			<td><?php echo $zapato['marca_id']; ?></td>
			<td><?php echo $zapato['modelo_id']; ?></td>
			<td><?php echo $zapato['talla']; ?></td>
			<td><?php echo $zapato['color']; ?></td>
			<td><?php echo $zapato['precio']; ?></td>
			<td><?php echo $zapato['created']; ?></td>
			<td><?php echo $zapato['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('controller' => 'zapatos', 'action' => 'view', $zapato['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'zapatos', 'action' => 'edit', $zapato['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'zapatos', 'action' => 'delete', $zapato['id']), array('class' => 'btn btn-sm btn-default'), array(), __('Estas seguro que deseas eliminar # %s?', $zapato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nueva Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
