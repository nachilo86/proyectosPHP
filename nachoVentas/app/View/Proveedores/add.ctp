<h1>Agregar Proveedor</h1>
<?php
    echo $this->Form->create('Proveedor');
    echo $this->Form->input('nombreempresa');
    echo $this->Form->input('razonsocial');
    echo $this->Form->input('cuit');
    echo $this->Form->input('domicilio');
    echo $this->Form->input('mail');
    echo $this->Form->end('Save Post');
?>
<?php
    echo $this->Html->script('jquery-ui-1.10.3');
?>
