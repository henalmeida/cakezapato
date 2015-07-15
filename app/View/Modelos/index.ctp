<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-modelos',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<div id="contenedor-modelos">

<div class="page-header">

	<h2><?php echo __('Marcas Registradas'); ?></h2>

</div>

	<div class="col-md-12">

	<div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>


	<table class = "table table-striped">
	<thead>
	<tr>

			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th class="actions"><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp", __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($modelos as $modelo): ?>
	<tr>
		<td><?php echo h($modelo['Modelo']['id']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($modelo['Modelo']['tipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalles'), array('action' => 'view', $modelo['Modelo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $modelo['Modelo']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $modelo['Modelo']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Estas seguro que desear eliminar el modelo # %s?', $modelo['Modelo']['id']))); ?>
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

		<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Modelo'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
	<?php echo $this->Js->writeBuffer(); ?>
</div> 