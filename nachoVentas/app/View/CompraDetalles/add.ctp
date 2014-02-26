<?php
//linea creada el lunes 17 para ver los elementos

echo $this->element('CompraEncabezado/cabecera');

echo $this->Form->create('CompraDetalle');
echo $this->Form->input('id_compraencabezados' , array ('options'=>$compraencabezados));
echo "Nombre de Articulo:";
echo $this->Form->input('id_articulos', array('options'=>$articulos));
echo $this->Form->input('cantidad');
echo $this->Form->input('preciototal');
echo $this->Form->input('preciocompra');
echo $this->Form->end('Guardar Compra');
?>
