<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading">Acciones</li>
        <li><?=$this->Html->link('Editar',['action'=>'edit',$tipo->id])?></li>
        <li><?=$this->Html->link('Tipos',['action'=>'index'])?></li>
        <li><?=$this->Html->link('Nuevo Tipo',['action'=>'add'])?></li>
        <li><?=$this->Html->link('Productos',['action'=>'index'])?></li>
        <li><?=$this->Html->link('Nuevo Producto',['action'=>'add'])?></li>
    </ul>
</nav>
<div class="tipos view ldarge-9 medium-8 columns content">
<h3><?=$tipo->nombre?></h3>
<table>
	<tr>
		<th scope="row">Id</th>
		<td><?=$tipo->id?></td>
	</tr>
	<tr>
		<th scope="row">Nombre</th>
		<td><?=$tipo->nombre?></td>
	</tr>
</table>
</div>