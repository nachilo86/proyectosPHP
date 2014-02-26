<h1>Agregar Usuario</h1>
<?php
    echo $this->Form->create('Usuario');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellido');
    echo $this->Form->input('fecha_nacimiento');
    echo $this->Form->input('dni');
    echo $this->Form->input('mail');
    echo $this->Form->input('tipo');
    echo $this->Form->end('Guardar Usuario');
?>
