<?php

App::uses('Component', 'Controller');

class VentasCRUDComponent extends Component {

    private $modeloVenta = NULL;
    var $components = array('VentasCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloVenta = ClassRegistry::init('Venta');
    }

    public function crearVenta($data) {    //palabra reservada de php this->data
        if ($this->modeloVenta->save($data)){}
    }

}
?>

