var App = App || {};
//ESTA CREANDO EL OBJETO, INSTANCIANDO CONSULTAR PROVEEDORES
//NO ES LA MISMA FORMA QUE EN python, PHP, etc.
//EL OBJETO ES CREAR COMPRA

App.CrearCompra = (function() {

    /**
     * busca el proveedor con ese ID y lo agrega como proveedor escogido y guarda su id
     */
    //LAS FUNCIONES ADENTRO SON METODOS
    var agregarProveedorSeleccionado = function(id, nombre) {
        jQuery.get(
            base_url + '/proveedores/ajaxGetProveedor/' + id, {},

        function(data, textStatus, xhr) {
            
            console.log('data->', data); 
           //alert(data.proveedor.Proveedor.nombreempresa);
            $('#proveedor_elegido').html(data.proveedor.Proveedor.nombreempresa);
            $('#proveedor_id').val(data.proveedor.Proveedor.id);
            $('ul#resultados_busqueda').html('');

        },
            'json');
    };

    return {
        /**
         * Consulta y muestra el detalle el Proveedor seleccionado de una lista
         */
        consultarProveedores: function() {

            /**
             * procesa la busqueda de proveedores
             */
            $('.busqueda input').on('change keyup', function() {
                //alert('buscando->');
                //CON CHANGE KEYUP CAPTURA CADA TECLA
                //LO ENVÍA AL AUTOCOMPLETAR
                //SI ES ELEMENTO DE JAVASCRIP, COLOCO $
                
                var query = {};
                //AGRUPÓ LO RELACIONADO CON LA CONSULTA
                $('.busqueda input').each(function() {
                    if ($(this).val()) {
                        //HACE LA CONSULTA DE ACUERDO A UN ATRIBUTO DADO.
                        query[$(this).attr('name')] = $(this).val();
                    }
                });

                //DEBUGUEAMOS POR CONSOLA. DEBUGUEA VARIABLES
                console.log('CONSULTA', query);

                jQuery.post(
                    base_url + '/proveedores/ajaxGetAutoCompletar',
                    query,

                function(data, textStatus, xhr) {
                    //alert('data->' + data);
                    console.log('data->', data);
                    var source = $("#lista-proveedores-buscados").html();
                    var template = Handlebars.compile(source);
                    var html = template(data);

                    $('ul#resultados_busqueda').html(html);
                },
                    'json');
            });

            /**
             * agrega la entidad clickeada a la lista de selecciobnadas
             */
            $('#resultados_busqueda').on('click', 'li', function() {
                var that = this;
                var id = $(that).data('id');

                if ($('#proveedores_seleccionados li input[value=' + id + ']').length === 0) {
                    agregarProveedorSeleccionado(id);
                }

            });

          

            $('.busqueda input').eq(0).change();

        },

        /**
         * Inicializa los eventos de la pagina
         */
        init: function() {

            App.CrearCompra.consultarProveedores();
            // ES UN METODO DE CREARCOMPRA.
          
        }
    };

})();

$(function() {
    App.CrearCompra.init();
    //CON $ HACE CON UN DOCUMENTO LISTO (DOCUMENTO READY) RECIEN TRABAJA CON EL DOM TERMINADO
    //CON init QUE ES EL CONSTRUCTOR, INSTANCIA AL OBJETO JAVASCRIPT
    
});