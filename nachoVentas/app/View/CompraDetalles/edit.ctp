<h1>Edit Compra Detalle</h1>
<?php
//echo $this->Form->create('Articulo', array('action' => 'edit'));
echo $this->Form->create('CompraDetalle', array('inputDefaults' => array('class' => 'form-control'),array('action'=>'edit')));
echo $this->Form->input('cantidad');
echo $this->Form->input('preciototal');
echo $this->Form->input('id_articulos', array('options'=>$articulos));
echo $this->Form->input('preciocompra');
echo $this->Form->input('id_compraencabezados', array('options'=>$compraencabezados));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Post');
?>