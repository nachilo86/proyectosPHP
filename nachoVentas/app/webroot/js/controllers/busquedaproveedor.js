function lookup(proveedor) {
    if (proveedor.length == 0) {
    // Hide the suggestion box.
        $('‪#‎suggestions‬').hide();
    } 
    else {
        $.post("ProveedoresController.ajaxgetautocompletar", {palabra: "" + proveedor + ""}, //para buscar los archivos con 
        function(data) {
            if (data.length > 0) {
                $('#suggestions').show();
                $('‪#‎autoSuggestionsList‬').html(data);
            }
        });
    }
} // lookup

function fill(thisValue, thisId) {
    $('‪#‎proveedores').val(thisValue);
    $('‪#‎id').val(thisId);
    setTimeout("$('#suggestions').hide();", 200);
}

