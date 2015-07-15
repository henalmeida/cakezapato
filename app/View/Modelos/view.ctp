<div class="well">
<h2><?php echo __('Modelos de Zapatos'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($modelo['Modelo']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Detalles de Modelos en Zapatos'); ?></h3>
	<?php if (!empty($modelo['Zapato'])): ?>
	<table class ="table rable-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Marca Id'); ?></th>
		<th><?php echo __('Modelo Id'); ?></th>
		<th><?php echo __('Talla'); ?></th>
		<th><?php echo __('Color'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Creado'); ?></th>
		<th><?php echo __('Modificado'); ?></th>
		<th class="actions"><?php  echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", __('Acciones'); ?></th>
	</tr>
	<?php foreach ($modelo['Zapato'] as $zapato): ?>
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
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'zapatos', 'action' => 'delete', $zapato['id']), array('class' => 'btn btn-sm btn-default'), array(), __('Estas seguro que desear eliminar el zapato # %s?', $zapato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Nuevo Modelo'), array('controller' => 'modelos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
