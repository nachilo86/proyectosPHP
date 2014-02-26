<?php

class CompraDetalle extends AppModel {

    public $name = 'CompraDetalle';
    public $useTable = 'compradetalles';
    
    public $belongsTo = array(
        'CompraEncabezado' => array(
            'className' => 'compraencabezados',
            'foreignKey' => 'id_compraencabezados'
        ),
        
        'Articulo'=> array (
            'className'=> 'articulos',
            'foreignKey'=>'id_articulos')
         
    );
}

?>