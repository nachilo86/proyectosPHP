<?php

App::uses('Component', 'Controller');

class CompraDetallesCRUDComponent extends Component {

    private $modeloCompraDetalle = NULL;
    var $components = array('CompraDetallesCRUD', 'Session');

    public function startup(Controller $controller) {
        $this->modeloCompraDetalle = ClassRegistry::init('CompraDetalle');
    }

    public function crearCompraDetalle($data) {    //palabra reservada de php this->data
        if ($this->modeloCompraDetalle->save($data)){}
    }
    
    public function encontrarID($id) {
        return $this->modeloCompraDetalle->findById($id);
    }

    public function editarCompraDetalle($data) {
        if ($this->modeloCompraDetalle->save($data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
//            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
    
    public function deleteCompraDetalle($id) {
        $this->modeloCompraDetalle->delete($id);
    }

}
?>