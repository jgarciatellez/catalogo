<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading">Acciones</li>
        <li><?=$this->Html->link('Nuevo Tipo',['controller'=>'Tipos','action'=>'add'])?></li>
        <li><?=$this->Html->link('Productos',['controller'=>'Productos','action'=>'index'])?></li>
        <li><?=$this->Html->link('Nuevo Producto',['controller'=>'Productos','action'=>'add'])?></li>
    </ul>
</nav>
<div class="tipos index ldarge-9 medium-8 columns content">
<h3>Tipos</h3>
<table cellpadding="0" cellspacing="0">
<thead>
	<tr>
		<th scope="col"><?=$this->Paginator->sort('id')?></th>
		<th scope="col"><?=$this->Paginator->sort('nombre')?></th>
		<th>Acciones</th>
	</tr>
</thead>
<tbody>
	<?php foreach($tipos as $tipo):?>
	<tr>
		<td><?=$tipo->id?></td>
		<td><?=$tipo->nombre?></td>
		<td><?=$this->Html->link('Ver',['action'=>'view',$tipo->id])?></td>
		<td><?=$this->Html->link('Editar',['action'=>'edit',$tipo->id])?></td>
		<td><?=$this->Form->postLink('Borrar',['action'=>'delete',$tipo->id],
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
