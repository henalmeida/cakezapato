<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-puestos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<div id="contenedor-puestos">

<div class="page-header">

	<h2><?php echo __('Puestos Asignados'); ?></h2>

</div>

	<div class="col-md-12">

	<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>


		<table class= "table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('cargo'); ?></th>
				<th><?php echo $this->Paginator->sort('posicion'); ?></th>
				<th><?php echo $this->Paginator->sort('usuario_id'); ?></th>
				<th class="actions"><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp",__('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($puestos as $puesto): ?>
		<tr>
			<td><?php echo h($puesto['Puesto']['id']); ?>&nbsp;</td>
			<td><?php echo h($puesto['Puesto']['cargo']); ?>&nbsp;</td>
			<td><?php echo h($puesto['Puesto']['posicion']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($puesto['Usuario']['nombre_completo'], array('controller' => 'usuarios', 'action' => 'view', $puesto['Usuario']['id'])); ?>
			</td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $puesto['Puesto']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $puesto['Puesto']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $puesto['Puesto']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que desear Eliminar el Puesto # %s?', $puesto['Puesto']['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

	</div>

		<p>
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, mostrando {:current} registros de {:count} en total, comenzando en {:start}, terminando en {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('Siguiente') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
</div> <!-- contenedor-meseros -->