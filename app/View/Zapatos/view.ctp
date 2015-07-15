
<div class="well">
<h2><?php echo __('Detalles de Zapato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($zapato['Marca']['nombre'], array('controller' => 'marcas', 'action' => 'view', $zapato['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modelo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($zapato['Modelo']['nombre'], array('controller' => 'modelos', 'action' => 'view', $zapato['Modelo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talla'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['talla']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['color']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($zapato['Zapato']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($this->Time->format('d-m-Y;h:i A',$zapato['Zapato']['created'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($this->Time->format('d-m-Y;h:i A',$zapato['Zapato']['modified'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Zapato'), array('action' => 'edit', $zapato['Zapato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Eliminar Zapato'), array('action' => 'delete', $zapato['Zapato']['id']), array(), __('Estas seguro que desear eliminar el Zapato # %s?', $zapato['Zapato']['id'])); ?> </li>
		
	</ul>
</div>
