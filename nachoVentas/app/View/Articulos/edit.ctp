<h1>Edit Articulo</h1>
<?php
//echo $this->Form->create('Articulo', array('action' => 'edit'));
echo $this->Form->create('Articulo', array('inputDefaults' => array('class' => 'form-control'),array('action'=>'edit')));
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion');
echo $this->Form->input('stock');
echo $this->Form->input('precio_unitario');
echo $this->Form->input('id_categorias', array('options'=>$categorias));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>