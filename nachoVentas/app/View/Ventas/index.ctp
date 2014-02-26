<p><?php echo $this->Html->link("Agregar Venta", array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Fecha Venta</th>
        <th>Creado</th>
        <th>Modificado</th>
        <th>Acción</th>
    </tr>

    <?php  foreach ($venta as $venta): ?>
    <tr>
        <td><?php echo $venta['Venta']['id']; ?></td>
        <td><?php echo $this->Html->link($venta['Venta']['fechaventa'],
                   array('controller' => 'ventas', 'action' => 'view', $venta['Venta']['id'])); ?></td>
        <td><?php echo $venta['Venta']['created']; ?></td>
        <td><?php echo $venta['Venta']['modified']; ?></td>
        <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $venta['Venta']['id']),
                                                       array('confirm' => 'Estás seguro?'))?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $venta['Venta']['id']));?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php debug($venta); ?>