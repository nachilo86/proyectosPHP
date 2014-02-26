<p><?php echo $this->Html->link("Agregar Proveedor", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nombre de la empresa</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Acción</th>
    </tr>

    <?php  foreach ($proveedor as $proveedor): ?>
    <tr>
        <td><?php echo $proveedor['Proveedor']['id']; ?></td>
        <td><?php echo $this->Html->link($proveedor['Proveedor']['nombreempresa'],
                   array('controller' => 'proveedores', 'action' => 'view', $proveedor['Proveedor']['id'])); ?></td>
        <td><?php echo $proveedor['Proveedor']['created']; ?></td>
        <td><?php echo $proveedor['Proveedor']['modified']; ?></td>
        <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $proveedor['Proveedor']['id']),
                                                       array('confirm' => 'Estás seguro?'))?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $proveedor['Proveedor']['id']));?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php debug($proveedor); ?>