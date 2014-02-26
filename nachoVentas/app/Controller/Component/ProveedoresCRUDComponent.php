<?php

App::uses('Component', 'Controller');

class ProveedoresCRUDComponent extends Component {

    private $modeloProveedor = NULL;
    var $components = array('ProveedoresCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloProveedor = ClassRegistry::init('Proveedor');
    }
    
    public function listadoDeProveedores() {
        return $this->modeloProveedor->find('list', array('fields' => array('Proveedor.id', 'Proveedor.nombreempresa'), 'order' => array('Proveedor.nombreempresa')));   // el modelo solo inicializa con el startup this->categoria
    }
    
    public function proveedorautocomplementar($palabra) {
        return $this->modeloProveedor->find('list', array('fields' => array('Proveedor.id', 'Proveedor.nombreempresa'), 'order' => array('Proveedor.nombreempresa')));   // el modelo solo inicializa con el startup this->categoria
    }

    public function crearProveedor($data) {    //palabra reservada de php this->data
        if ($this->modeloProveedor->save($data)){}
    }
    
    function mostrarProveedor( $palabra) { 
        $conditions['Proveedor.nombreempresa LIKE '] = "%$palabra%";
        return $this->modeloProveedor->find( 'all', array( 'conditions' => $conditions ) );
    }
    
    /**
    *
    *
    * @method buscarProveedor por id
    * El método retorna todos los datos vinculados al proveedor buscado.
    * @param unknown $id (optional)
    * @return array de Contacto
    */
    function buscarProveedor( $id=null) {
        $this->modeloProveedor->id = $id;
        $conditions = array( 'Proveedor.id' => $id );
        return $this->modeloProveedor->find( 'first', array( 'conditions' => $conditions ) );
    }
}
?>