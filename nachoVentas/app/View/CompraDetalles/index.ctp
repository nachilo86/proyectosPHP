<p><?php echo $this->Html->link('Add CompraDetalles', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>id</th>
        <th>precio compra</th>
        <th>cantidad</th>
        <th>precio total</th>
        <th>nombre articulo</th>
        <th>fecha compra</th>
    </tr>
    <?php foreach ($compradetalles as $compradetalle): ?>
    <tr>
         <td><?php echo $compradetalle['CompraDetalle']['id']; ?></td>
         <td><?php echo $compradetalle['CompraDetalle']['preciocompra']; ?></td>
         <td><?php echo $compradetalle['CompraDetalle']['cantidad']; ?></td>
         <td><?php echo $compradetalle['CompraDetalle']['preciototal']; ?></td>
         <td><?php echo $compradetalle['Articulo']['nombre']; ?>
             <?php echo $compradetalle['CompraDetalle']['id_articulos']; ?></td>
         <td><?php echo $compradetalle['CompraEncabezado']['fechacompra']; ?>
             <?php echo $compradetalle['CompraDetalle']['id_compraencabezados']; ?></td>
         <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $compradetalle['CompraDetalle']['id']), 
                                                        array('confirm' => 'Esta seguro?'))?>
             <?php echo $this->Html->link('Edit', array('action' => 'edit', $compradetalle['CompraDetalle']['id'])); ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php debug($compradetalles); ?>
