<h1>Agregar Venta</h1>
<?php
    echo $this->Form->create('Venta');
    echo $this->Form->input('fechaventa');
    echo $this->Form->input('precioventa');
    echo "Articulo para vender:";
    echo $this->Form->input('id_articulos', array('options'=>$articulos));
    echo "Usuario a quien se le vende:";
    echo $this->Form->input('id_usuarios' , array ('options'=>$usuarios));
    echo $this->Form->end('Guardar Venta');
?>
<?php debug ($usuarios); ?>
<?php debug ($articulos); ?>