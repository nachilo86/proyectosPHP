<?php

class CompraEncabezadosController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'CompraEncabezados';
    public $uses = array('CompraEncabezado', 'Usuario', 'Proveedor'); // para poder usar los modelos de otros componentes
    public $components = array('CompraEncabezadosCRUD', 'UsuariosCRUD', 'ProveedoresCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('compraencabezado', $this->CompraEncabezado->find('all'));
    }

    public function view($id = null) {
        $this->CompraEncabezado->id = $id;
        $this->set('compraencabezado', $this->CompraEncabezado->read());
    }

    public function add() {
        $this->set('usuarios', $this->UsuariosCRUD->listadoDeUsuarios());
        $this->set('proveedores', $this->ProveedoresCRUD->listadoDeProveedores());
        if ($this->request->is('post')) {
            $this->CompraEncabezadosCRUD->crearCompraEncabezado($this->data);
        }
    }

}

?>