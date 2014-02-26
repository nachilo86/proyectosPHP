<?php

App::uses('Component', 'Controller');

class UsuariosCRUDComponent extends Component {

    private $modeloUsuario = NULL;
    var $components = array('UsuariosCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloUsuario = ClassRegistry::init('Usuario');
    }
    
    public function listadoDeUsuarios() {
        return $this->modeloUsuario->find('list', array('fields' => array('Usuario.id', 'Usuario.nombre'), 'order' => array('Usuario.nombre')));   // el modelo solo inicializa con el startup this->categoria
    }
    public function crearUsuario($data) {    //palabra reservada de php this->data
        if ($this->modeloUsuario->save($data)){}
    }

}
?>