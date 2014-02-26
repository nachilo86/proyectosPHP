<p><?php echo $this->Html->link('Agregar Categoría', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Tipo</th>
        <th>Acción</th>
    </tr>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?php echo $categoria['Categoria']['id']; ?></td>
        <td><?php echo $categoria['Categoria']['tipo']; ?></td>
        <td>
        <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $categoria['Categoria']['id']), 
                                                   array('confirm' => 'Está seguro?'))?>
        <?php echo $this->Html->link('Edit', array('action' => 'edit', $categoria['Categoria']['id'])); ?>
        </td>
    </tr> 
    <?php endforeach; ?>
</table>
<?php debug($categorias); ?>
