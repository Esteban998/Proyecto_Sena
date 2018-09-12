<form id="crear_producto">
    <div id="informacion">
        <div id="botones">
            <input type="button" value="Atras" id="atras_p">
        </div>
        <h2 id="titulo">Productos</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Nombre Producto</label>
                    <input class="form-control" id="nombre_p" type="text" name="nombre" maxlength="50" autocomplete="off" required>
                </div>

                <div class="col-md-3 form-group">
                    <label>Cantidad</label>
                    <input class="form-control" id="cantidad_p" type="number" name="cantidad" required>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Stock minimo</label>
                    <input class="form-control" id="stock_p" type="number" name="stock" required>
                </div>

                <div class="col-md-3 form-group">
                    <label>Precio Venta</label>
                    <input class="form-control" id="precio_p" type="number" name="precio" required>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 form-group">
                    <label>Categoria</label> <br>
                    <select class="form-control" id="categorias_p" required>
                        <option value="">Seleccione</option>
                        <?php foreach($lista as $value): ?>
                        <option value="<?= $value->id_categoria ?>">
                            <?= $value->nombre_categoria ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 form-group">
                    <input class="succes" id="añadir" type="button" value="Añadir">
                    <input class="succes" id="modificar_p" type="button" value="Guardar cambios">
                    <input id="cancelar" type="reset" value="Cancelar">
                </div>
            </div>
        </div>

        <br>

        <div class="table-responsive">
            <table id="datos"></table>
        </div>
        <input type="button" value="Descargar a excel" id="enviar">
    </div>

    <div id="crear_detalle">
        <h2 id="titulo2">Asignar Proveedor</h2>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 form-group">
                   <label>Proveedores</label> <br>
                    <select class="form-control" id="proveedores_p">
                        <option value="">Seleccione</option>
                        <?php foreach($proveedores as $value): ?>
                        <option value="<?= $value->id_proveedor ?>">
                            <?= $value->nombre_empresa ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
        </div>

        <input class="succes" id="agregar" type="button" value="Agregar">

        <h3>Proveedores añadidos:</h3>

        <ul id="lista">
        </ul>

        <br>

        <button class="succes" id="guardar" type="button">Listo</button>
        <button id="volver" type="button">Atras</button>
    </div>
</form>

<form id="ver_detalle">
    <div id="botones">
        <input class="succes" id="crear_p" type="button" value="Crear producto">
    </div>

    <h2 id="titulo2">Buscar productos</h2>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 form-group">
               <label>Nombre producto</label>
                <input class="form-control" id="nombre_d" type="text" autocomplete="off">
            </div>

            <div class="col-md-3 form-group">
               <label>Proveedores</label>
                <select class="form-control" id="proveedor_d">
                    <option value="">Seleccione</option>
                    <?php foreach($proveedores as $value): ?>
                    <option value="<?= $value->id_proveedor ?>">
                        <?= $value->nombre_empresa ?>
                    </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div>

    <input id="limpiar_d" type="reset" value="Limpiar">

    <div class="table-responsive">
        <table id="registros_d"></table>
    </div>
    <input type="button" value="Descargar a excel" id="enviar">
</form>

<script>
    $(document).ready(function() {
        $("#proveedor_d").select2();
        $("#categorias_p").select2();
        $("#proveedores_p").select2();
    });

</script>
