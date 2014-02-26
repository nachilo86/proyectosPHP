<h1>Agregar Compra</h1>
<?php
echo $this->Form->create('CompraEncabezado');
echo $this->Form->input('fecha_compra');
//echo $this->element('proveedor/proveedores');
?>
<!--este es el boton estatico-->
<div class="fieldset_container half" id="proveedoresExistentes" >
    <fieldset>
        <legend>Proveedores</legend>
        <div class="busqueda proveedores" id="busquedaProveedor">
            <input type="text" name="nombre" placeholder="Nombre" value="" />
            <!-- si se cambia id=input nombre en jquery se puede usar $(#inputnombre) solo porque es un campo -->
            <input type="hidden" name="proveedor_id" value="" />
            <div class="clear"></div>
        </div>
        <ul id="resultados_busqueda" class="resultados_busqueda_autocomplete">
        </ul>
        <div id="proveedor_elegido"><div>
    </fieldset>
</div>
<?php echo $this->Form->end('Save Post'); ?>
<?php print $this->Html->script('controllers/compra_crear.js'); ?>
<?php
            //tEMPLATE PARA TRAER OBJETO PROVEEDORES
            //GENERA UNAS LISTAS
            //DONDE DATA-ID VA CON {ID}
?>

<?php //CÓDIGO EN JAVASCRIPT ?>
<script id="lista-proveedores-buscados" type="text/x-handlebars-template">
                {{#each proveedores}}
                <li data-id="{{id}}">
                <span>{{nombre}}</span>
                <div class="clear"></div>
                </li>
                {{/each}}
</script>

<style>
                fieldset_container {
                    display: block;
                    width: 50%;
                    float: left;
                    margin-top: 10px;
                    list-style: none;
                } 
                .fieldset_container.half:nth-child(odd){
                    clear: both;
                }
                .fieldset_container.half.right{
                    clear: none;
                }
                .fieldset_container.full{
                    width: 100%;
                    clear: both;
                }

                .full{
                    width: 980px;
                }

                .half {
                    width: 430px;
                }
                .full {
                    width: 970px;
                }
                .busqueda {
                    width: 100%;
                }
                .resultados_busqueda_autocomplete
                {
                    border-top:none;
                    cursor:pointer;
                    max-height:250px;
                    overflow-y:auto;
                    overflow-x:hidden;
                    width: 450px;
                }
                #proveedores_seleccionados
                {
                    margin-top:26px
                }
                #proveedores_seleccionados li,.resultados_busqueda_autocomplete li
                {
                    list-style:none;
                    padding:5px;
                    border-bottom:1px solid #EEE;
                    background-color:#E9F5F5
                }

                #pa_seleccionadas li:hover,#proveedores_seleccionados li:hover,.resultados_busqueda_autocomplete li:hover
                {
                    border-bottom:1px solid #CCC;
                    background-color:#CBE8EF
                }

                .resultados_busqueda_autocomplete li span
                {
                    width:40%;
                    float:left
                }
</style>
<?php debug($compraencabezados) ?>