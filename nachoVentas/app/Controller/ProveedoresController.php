<?php

class ProveedoresController extends AppController {

    public $helpers = array('Html', 'Form', 'Paginator');   //helpers significa ayudantes estan en todo el framework
    public $name = 'Proveedores';
    public $uses = array('Proveedor'); // para poder usar los modelos de otros componentes
    public $components = array('ProveedoresCRUD'); //para reutilizar codigo nos conviene usar componentes

    function index() {
        $this->set('proveedor', $this->Proveedor->find('all'));
    }
    
    public function add() {
        if ($this->request->is('post')) {
            $this->ProveedoresCRUD->crearProveedor($this->data);
            
        }
    }

    public function view($id=null) {
        $this->Proveedor->id = $id;
        $this->set('proveedor', $this->Proveedor->read());
    }
    
     public function ajaxGetAutoCompletar() {

        if (isset ($_POST['nombre'])){
            $palabra=$_POST['nombre'];
            $lista = $this->ProveedoresCRUD->mostrarProveedor($palabra);
        }else{
            $palabra="";
            $lista= array();
        }

        if (count($lista)>0){ 
            foreach ($lista as $proveedor) {
                $proveedores []= array(
                    'id' => $proveedor['Proveedor']['id'],
                    'nombre' => $proveedor['Proveedor']['nombreempresa']);
                    //'cuit'=> $proveedor['Proveedor']['cuit']);
                    //PARA MOSTRAR MÁS DATOS.
            }
        }else{
            $proveedores[]=array();
        } 

        die(json_encode(array('proveedores'=>$proveedores)));
        }

    
    function ajaxGetProveedor($id){
        if (isset ($id)){
        $proveedor = $this->ProveedoresCRUD->buscarProveedor($id);
        }else{
        $proveedor= array();
        }
        die(json_encode(array('proveedor'=>$proveedor)));
    }
}
?>