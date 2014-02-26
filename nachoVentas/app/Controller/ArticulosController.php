<?php

class ArticulosController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'Articulos';
    public $uses = array('Categoria'); // para poder usar los modelos de otros componentes
    public $components = array('CategoriasCRUD', 'ArticulosCRUD'); //para reutilizar codigo nos conviene usar componentes

//    public function index() {
//        $this->set('articulos', $this->Articulo->find('all'));
//    }

    public function index() {
        $this->set('articulos', $this->ArticulosCRUD->listadoDeArticulos());
//        $this->set('articuloss', $this->ArticulosCRUD->listadoDeArticulosPorNombre());
    }

    public function view($id = null) {
        $this->Articulo->id = $id;
        $this->set('articulo', $this->Articulo->read());
    }

    public function add() {
        $this->set('categorias', $this->CategoriasCRUD->listadoDeCategorias());
        if ($this->request->is('post')) {
            $this->ArticulosCRUD->guardarArticulo($this->data);
        }
    }

    public function edit($id) {
        $this->set('categorias', $this->CategoriasCRUD->listadoDeCategorias());
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $articulo = $this->ArticulosCRUD->encontrarId($id);
        if (!$articulo) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->ArticulosCRUD->editarArticulo($this->data);
        }
        if (!$this->request->data) {
            $this->request->data = $articulo;
        }
    }

    public function delete($id) {
        $this->ArticulosCRUD->deleteArticulo($id);
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }

}

?>