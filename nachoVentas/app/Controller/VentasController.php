<?php

class VentasController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'Ventas';
    public $uses = array('Usuario', 'Articulo'); // para poder usar los modelos de otros componentes
    public $components = array('VentasCRUD','UsuariosCRUD','ArticulosCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('venta', $this->Venta->find('all'));
    }

    public function view($id = null) {
        $this->Venta->id = $id;
        $this->set('venta', $this->Venta->read());
    }

    public function add() {
        $this->set('usuarios', $this->UsuariosCRUD->listadoDeUsuarios());
        $this->set('articulos', $this->ArticulosCRUD->listadoDeArticulos());
        if ($this->request->is('post')) {
            $this->VentasCRUD->crearVenta($this->data);
            
        }
    }
}
?>