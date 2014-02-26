<?php
class CompraDetallesController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'CompraDetalles';
    public $uses = array('CompraDetalle', 'CompraEncabezado', 'Articulo'); // para poder usar los modelos de otros componentes
    public $components = array('CompraEncabezadosCRUD', 'CompraDetallesCRUD', 'ArticulosCRUD', 'UsuariosCRUD', 'ProveedoresCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('compradetalles', $this->CompraDetalle->find('all'));
    }

    public function view($id = null) {
        $this->CompraDetalle->id = $id;
        $this->set('compradetalle', $this->CompraDetalle->read());
    }

    public function add() {
        $this->set('compraencabezados', $this->CompraEncabezadosCRUD->listadoDeCompraEncabezado());
        $this->set('usuarios', $this->UsuariosCRUD->listadoDeUsuarios());
        $this->set('proveedores', $this->ProveedoresCRUD->listadoDeProveedores());
        $this->set('articulos', $this->ArticulosCRUD->listadoDeArticulo());
        if ($this->request->is('post')) {
            debug($this->data);
            $this->CompraDetallesCRUD->crearCompraDetalle($this->data);
            debug($this->data);
            $this->CompraEncabezadosCRUD->crearCompraEncabezado($this->data);
        }
    }

   

    public function edit($id) {
        $this->set('compraencabezados', $this->CompraEncabezadosCRUD->listadoDeCompraEncabezado());
        $this->set('articulos', $this->ArticulosCRUD->listadoDeArticulos());
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }
        $compradetalle = $this->CompraDetallesCRUD->encontrarId($id);
        if (!$compradetalle) {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->CompraDetallesCRUD->editarCompraDetalle($this->data);
        }

        if (!$this->request->data) {
            $this->request->data = $compradetalle;
        }
    }

    public function delete($id) {
        $this->CompraDetallesCRUD->deleteCompraDetalle($id);
        $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
        $this->redirect(array('action' => 'index'));
    }
}
?>