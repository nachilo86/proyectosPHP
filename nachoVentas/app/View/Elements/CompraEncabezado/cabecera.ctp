<?php
echo $this->Form->create('CompraEncabezado');
//echo "Fecha de la compra";
echo $this->Form->input('fechacompra');
echo "Producto de";
//echo "Proveedor";
echo $this->Form->input('id_proveedores', array('options'=>$proveedores));
echo "Comprado de:";
//echo "Usuario";
echo $this->Form->input('id_usuarios' , array ('options'=>$usuarios));
//echo $this->Form->end('Save Post'); 
?>
<h1><HR width=100% align="center"></h1>