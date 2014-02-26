<?php

class UsuariosController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'Usuarios';
    public $uses = array('Usuario'); // para poder usar los modelos de otros componentes
    public $components = array('UsuariosCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('usuario', $this->Usuario->find('all'));
    }

    public function view($id = null) {
        $this->Usuario->id = $id;
        $this->set('usuario', $this->Usuario->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->UsuariosCRUD->crearUsuario($this->data);
            
        }
    }
}
?>