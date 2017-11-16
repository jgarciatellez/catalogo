<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    	<li class="heading">Acciones</li>
        <li>?=$this->Form->postLink('Borrar',['action'=>'delete',$tipo->id],
			['confirm' => '¿Realmente desea eliminar?'])?></li>
        <li><?=$this->Html->link('Tipos',['controller'=>'Tipos','action'=>'index'])?></li>
        <li><?=$this->Html->link('Productos',['controller'=>'Productos','action'=>'index'])?></li>
        <li><?=$this->Html->link('Nuevo Producto',['controller'=>'Productos','action'=>'add'])?></li>
    </ul>
</nav>
<div class="tipos form ldarge-9 medium-8 columns content">
<?=$this->Form->create($tipo)?>
<fieldset>
	<legend>Editar Tipo</legend>
	<?=$this->Form->control('nombre')?>
</fieldset>
<?=$this->Form->button('Actualizar')?>
<?=$this->Form->end()?>
</div>