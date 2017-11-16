<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading">Acciones</li>
        <li><?=$this->Html->link('Nuevo Producto',['controller'=>'Productos','action'=>'add'])?></li>
        <li><?=$this->Html->link('Tipos',['controller'=>'Tipos','action'=>'index'])?></li>
        <li><?=$this->Html->link('Nuevo Tipo',['controller'=>'Tipos','action'=>'add'])?></li>
    </ul>
</nav>
<div class="tipos index ldarge-9 medium-8 columns content">
<h3>Productos</h3>
<table cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th scope="col"><?=$this->Paginator->sort('id')?></th>
		<th scope="col"><?=$this->Paginator->sort('nombre')?></th>
		<th scope="col"><?=$this->Paginator->sort('precio')?></th>
		<th scope="col"><?=$this->Paginator->sort('tipo_id')?></th>
		<th>Acciones</th>
	</tr>
</thead>
<tbody>
	<?php foreach($productos as $producto):?>
	<tr>
		<td><?=$producto->id?></td>
		<td><?=$producto->nombre?></td>
		<td><?=$producto->precio?></td>
		<td><?=$producto->tipo->nombre?></td>
		<td><?=$this->Html->link('Ver',['action'=>'view',$producto->id])?></td>
		<td><?=$this->Html->link('Editar',['action'=>'edit',$producto->id])?></td>
		<td><?=$this->Form->postLink('Borrar',['action'=>'delete',$producto->id],
			['confirm' => '¿Realmente desea eliminar?'])?></td>
	</tr>
	<?php endforeach;?>
</tbody>
</table>
<div class="paginator">
	<ul class="pagination">
		<?=$this->Paginator->first('<< Primero')?>
		<?=$this->Paginator->prev('<< Anterior')?>
		<?=$this->Paginator->numbers()?>
		<?=$this->Paginator->next('Siguiente >')?>
		<?=$this->Paginator->last('Último >>')?>
	</ul>
	
	<p>
	
		<?=$this->Paginator->counter([
			'format' => 'Pagina {{page}} de {{pages}},
			mostrando {{current}} registro(s) de {{count}}'		
		])?>
		
	</p>
</div>
</div>
