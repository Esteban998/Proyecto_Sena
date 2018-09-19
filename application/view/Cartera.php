<form id="consulta_cartera">
    <div id="margen">
       <input type="hidden" id="id-cliente">
        <h2 id="titulo">Consultar cartera</h2> 
        <select id="cedula">
            <option value="">Seleccione cliente</option>
            <?php foreach($resultado as $value): ?>
            <option value="<?= $value->numero_documento ?>">
                <?= $value->nombres_cliente." ".$value->apellidos_cliente." Cedula:".$value->numero_documento ?>
            </option>
            <?php endforeach ?>
            ?>
        </select> 
        
        <br>

        <input type="reset" value="Limpiar" id="limpiar_cartera">

        <br>

        <div>
            <label>Nombre cliente:</label> <br>
            <label id="nombre_cliente">""</label> <br>
            <label>Cartera Limite:</label> <br>
            <label id="cartera">0</label> <br>
            <label>Cartera disponible:</label> <br>
            <label id="disponible">0</label> <br>
            <label>Valor del pedido pendiente:</label> <br>
            <label id="pedido">0</label>
        </div>
    </div>
    
    <div class="table-responsive">
        <table id="historial"></table>
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#cedula").select2();
    });

</script>
