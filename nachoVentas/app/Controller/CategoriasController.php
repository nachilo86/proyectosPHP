<?php

class CategoriasController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'Categorias';
    public $uses = array('Articulo','Categoria'); // para poder usar los modelos de otros componentes
    public $components = array('CategoriasCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('categorias', $this->Categoria->find('all'));
    }

    public function view($id = null) {
        $this->Categoria->id = $id;
        $this->set('categoria', $this->Categoria->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->CategoriasCRUD->crearCategoria($this->data);
        }
    }
    
    public function edit($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $categoria = $this->CategoriasCRUD->encontrarId($id);
        if (!$categoria) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->CategoriasCRUD->editarCategoria($this->data);
        }
        if (!$this->request->data) {
            $this->request->data = $categoria;
        }
    }

    function delete($id) {
        $this->CategoriasCRUD->deleteCategoria($id);
        $this->Session->setFlash('La categoría con el id: ' . $id . ' ha sido borrada.');
        $this->redirect(array('action' => 'index'));
    }

}

?>