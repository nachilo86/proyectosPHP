<h1>Agregar Artículo</h1>
<?php
//echo $this->Form->create('Articulo');
echo $this->Form->create('Articulo', array('novalidate' => true, 'autocomplete'=>'on' ));
echo $this->Form->input('nombre');
echo $this->Form->input('descripcion');
echo $this->Form->input('stock');
echo $this->Form->input('precio_unitario');
echo $this->Form->input('id_categorias' , array('options'=>$categorias));
echo $this->Form->end('Guardar Artículo');
?>