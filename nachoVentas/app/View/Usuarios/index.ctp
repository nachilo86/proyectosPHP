<p><?php echo $this->Html->link("Agregar Usuario", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre y Apellido</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Acción</th>
    </tr>

    <?php  foreach ($usuario as $usuario): ?>
    <tr>
        <td><?php echo $usuario['Usuario']['id']; ?></td>
        <td><?php echo $this->Html->link($usuario['Usuario']['nombre']." ".$usuario['Usuario']['apellido'],
                   array('controller' => 'usuarios', 'action' => 'view', $usuario['Usuario']['id'])); ?></td>
        <td><?php echo $usuario['Usuario']['created']; ?></td>
        <td><?php echo $usuario['Usuario']['modified']; ?></td>
        <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $usuario['Usuario']['id']),
                                                       array('confirm' => 'Estás seguro?'))?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $usuario['Usuario']['id']));?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php debug($usuario); ?>