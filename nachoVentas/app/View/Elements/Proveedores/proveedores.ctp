<div>
    <label>Proveedor: *</label>
        <input type="text" size="30" name="proveedor" value="proveedor" id="id" autocomplete="on" onkeyup="lookup(this.Value);" onblur="fill(this.Value, this.id);" />
        <input type="hidden" size="30" name="id" value="" id="id" />
</div>
<div class="suggestionsBox" id="suggestions" style="display: none;">
    <img src="images/upArrow.jpg" style="position: relative; top: -12px; left: 30px;" alt="upArrow" />
    <div class="suggestionList" id="autoSuggestionsList">
        &nbsp;
    </div>
</div> 
<?php
echo $this->Html->script('controllers/busquedaproveedor');
echo $this->Html->css('View/listaproveedores');
?>