<p><?php echo $this->Html->link('Agregar Articulo', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>categoria</th>
        <th>Id categoria</th>
        <th>descripcion</th>
        <th>stock</th>
        <th>precio unitario</th>
        <th>Acción</th>
    </tr>
    <?php foreach ($articulos as $articulo): ?>
    <tr>
        <td><?php echo $articulo['Articulo']['id']; ?></td>
        <td><?php echo $articulo['Articulo']['nombre']; ?></td>
        <td><?php echo $articulo['Categoria']['tipo']; ?></td>
        <td><?php echo $articulo['Articulo']['id_categorias']; ?></td>
        <td><?php echo $articulo['Articulo']['descripcion']; ?></td>
        <td><?php echo $articulo['Articulo']['stock']; ?></td>
        <td><?php echo $articulo['Articulo']['precio_unitario']; ?></td>
        <td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $articulo['Articulo']['id']), 
                                                       array('confirm' => 'Está seguro?'))?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $articulo['Articulo']['id'])); ?></td>
    </tr>
<?php endforeach; ?>
</table>
<?php debug($articulos); ?>