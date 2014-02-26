<?php

App::uses('Component', 'Controller');

class CompraEncabezadosCRUDComponent extends Component {

    private $modeloCompraEncabezado = NULL;
    var $components = array('CompraEncabezadosCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloCompraEncabezado = ClassRegistry::init('CompraEncabezado');
    }
    
    public function listadoDeCompraEncabezado() {
        return $this->modeloCompraEncabezado->find('list', array('fields' => array('CompraEncabezado.id', 'CompraEncabezado.fechacompra'), 'order' => array('CompraEncabezado.fechacompra')));   // el modelo solo inicializa con el startup this->categoria
    }
    
    public function crearCompraEncabezado($data) {    //palabra reservada de php this->data
        if ($this->modeloCompraEncabezado->save($data)){}
    }

}
?>