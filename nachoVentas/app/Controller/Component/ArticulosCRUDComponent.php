<?php

App::uses('Component', 'Controller');

class ArticulosCRUDComponent extends Component {

    private $modeloArticulo = NULL;
    var $components = array('ArticulosCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloArticulo = ClassRegistry::init('Articulo');  //inicializa para que nos sirva en la linea 16, nos inicializa el modelo del objeto articulo
    }

    public function listadoDeArticulo() {
        return $this->modeloArticulo->find('list', array('fields' => array('Articulo.id', 'Articulo.nombre'), 'order' => array('Articulo.nombre')));   // el modelo solo inicializa con el startup this->categoria
    }

    public function listadoDeArticulos() {
        return $this->modeloArticulo->find('all');
    }

    public function guardarArticulo($data) {    //palabra reservada de php this->data
        if ($this->modeloArticulo->save($data)) {
            $this->Session->setFlash('Your post has been saved.');
//            $this->redirect(array('action' => 'index'));
        }
    }

    public function encontrarID($id) {
        return $this->modeloArticulo->findById($id);
    }

    public function editarArticulo($data) {
        if ($this->modeloArticulo->save($data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
//            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    public function deleteArticulo($id) {
        $this->modeloArticulo->delete($id);
    }
}
?>