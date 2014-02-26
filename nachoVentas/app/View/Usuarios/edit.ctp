<h1>Editar Usuario</h1>
<?php
//echo $this->Form->create('Articulo', array('action' => 'edit'));
    echo $this->Form->create('Usuario', array('inputDefaults' => array('class' => 'form-control'),array('action'=>'edit')));
    echo $this->Form->input('tipo');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
?>