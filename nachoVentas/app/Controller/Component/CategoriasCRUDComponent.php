<?php

App::uses('Component', 'Controller');

class CategoriasCRUDComponent extends Component {

    private $modeloCategoria = NULL;
    var $components = array('CategoriasCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloCategoria = ClassRegistry::init('Categoria');
    }

    public function listadoDeCategorias() {
        return $this->modeloCategoria->find('list', array('fields' => array('Categoria.id', 'Categoria.tipo'), 'order' => array('Categoria.tipo')));   // el modelo solo inicializa con el startup this->categoria
    }

    public function crearCategoria($data) {    //palabra reservada de php this->data
        if ($this->modeloCategoria->save($data)){}
    }
    
    public function encontrarID($id) {
        return $this->modeloCategoria->findById($id);
    }
    
    public function editarCategoria($data) {
        if ($this->modeloCategoria->save($data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
//            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
    
    public function deleteCategoria($id) {
        $this->modeloCategoria->delete($id);
    }

}
?>






