<form action="<?= URL ?>ruta/guardar" method="post">
    <h2>Crear Ruta</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="">Nombre de ruta</label>
                <Input autocomplete="off" type="text" class="form-control" id="txtNombre" name="txtNombre">
            </div>

            <div class="col-md-4 form-group">
                <label for="">Municipio</label>
                <select class="form-control" name="ddlMuni" id="ddlMuni">
                    <option value="">Seleccione</option>
                    <?php foreach($rut as $value): ?>
                    <option value="<?= $value->id_municipio ?>">
                        <?= $value->nombre_municipio?>
                    </option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="col-md-4 form-group">
                <label for="">Barrio </label>
                <select class="form-control" name="ddlbarri" id="ddlbarri">
                    <option value="">Seleccione </option>
                </select>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <button type="submit" class="succes">Guardar</button>
            </div>
        </div>
    </div>
</form>
