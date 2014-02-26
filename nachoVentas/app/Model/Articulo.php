<?php

class Articulo extends AppModel {
    public $name = 'Articulo';
    public $useTable = 'articulos';

    public $belongsTo = array(//relacionar mi tabla con las otras tablas
    'Categoria' => array(
    'className' => 'categorias',
    'foreignKey' => 'id_categorias'
    )
    );

    var $validate = array(
    'nombre' => array( //todas las reglas que involucran el campo nombre
                    'notEmpty' => array(
                    'rule' => 'notEmpty',
                    'message' => 'ERROR_CAMPO_REQUERIDO'  //cualquier mensaje  que quieran
                    ),
                    'alfabetico' => array(
                    'rule' => '/^[a-zA-Z0-9 áéíóúÁÉÍÓÚÑñüÜ\'"ªº.]+$/',
                    'message' => 'ERROR_CAMPO_INVALIDO'
                    ),
//                    'isUnique' => array(
//                    'rule' => 'isUnique',
//                    'message' => 'ERROR_NOMBRE_MISION_UNICO',
//                    'allowEmpty' => true
//                    ),
                    ),
    'nombre_eng' => array(
                'rule' => '/^[a-zA-Z0-9 áéíóúÁÉÍÓÚÑñüÜ\'"ªº.]+$/',
                'allowEmpty' => true,
                'message' => 'ERROR_CAMPO_INVALIDO'
                ),
    'email' => array (
            'empty' => array (
            'rule' => 'notEmpty',
            'allowEmpty' => false,
            'message' => 'ERROR_CAMPO_REQUERIDO'
            ),
            'email' => array (
            'rule' => 'email',
            'allowEmpty' => false,
            'message' => 'ERROR_EMAIL_OBLIGATORIO_EMAIL'
            ),
            ),
    'email_ext' => array (
                'empty' => array (
                'rule' => 'notEmpty',
                'allowEmpty' => false,
                'message' => 'ERROR_CAMPO_REQUERIDO'
                ),
                'email' => array (
                'rule' => 'email',
                'allowEmpty' => false,
                'message' => 'ERROR_EMAIL_OBLIGATORIO_EMAIL'
                ),
    )
    );
}

?>