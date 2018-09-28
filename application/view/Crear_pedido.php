<form action="<?= URL ?>pedido\guardar" method="POST" name="pedido" id="form_pedido">

	<div class="container">

		<div class="card bg-warning text-black col-sm-9 col-md-9 col-sx-12">
			<div class="card-body"><h5>Información General     </h5>
			</div>
		</div>
		<br><br>


	<div class="col-sm-9 col-md-9">
		<label for="Fecha"> <h5>Fecha</h5></label>
		<input type="datetime" name="fecha"  value="<?php date_default_timezone_set('America/Bogota'); echo $fecha_actual=date("d-m-Y");?>" readonly="">
	</div>




	<div class="container">
		
		<div class ="col-sm-6 col-md-4 col-lg-4 col-sx-12">
			<div class="form-group">

						<label for="cliente">Cliente</label>

				<select class="form-control" id="ddlCliente" required ="true" name="ddlCliente" onchange = "direccion(this)">

					<option value="" > </option>

						<?php foreach($clientes as $value): ?>
						<option direc="<?= $value->direccion?>" tel= <?= $value->celular?> value="<?= $value->id_cliente?>"><?=$value->numero_documento.'  '.$value->nombres_cliente.'  '.$value->apellidos_cliente?></option>
						<?php endforeach; ?>


				</select>	<br><br>
				
			<div class="form-group col-sm-6 col-md-6">
			<label for="">Dirección :</label>
			<h3 id="dDir" class="form-control">-</h3>
			</div>
				
			<div class="form-group col-sm-6 col-md-6">		
				
			<label for="">Teléfono :</label>
			<h3 id="tTel" class="form-control">-</h3>
			</div>
					
			</div>
		</div>
	</div>



	
	<div class="card bg-warning text-black col-sm-9 col-md-9">
			<div class="card-body"><h5>Información Pedido     </h5>
			</div>

		</div><br><br>
		
	<div class="container">
		<div class ="col-sm-6 col-md-4 col-lg-4 col-sx-12">
			<div class="form-group">
					
						<label for="TipoVenta">Tipo de venta : </label>
						<input type="radio" required ="true" name="tipoVenta" id="credito" value= "credito">Crédito
						<input type="radio" required ="true" name="tipoVenta" id="contado" value= "contado">Contado



						<br><br>
					<label for="Fecha">Producto</label>
					<select class="form-control" required ="true" id="ddlProducto" onchange = "ponerPrecio(this)">
				<option value="" ></option>
				<?php foreach($productos as $value): ?>
				<option cantidad= "<?= $value->existencia ?>"  precio= "<?= $value->precio_venta ?>" idP= "<?= $value->nombre_producto ?>" value="<?= $value->id_producto ?>"><?= $value->nombre_producto ?></option>
				<?php endforeach; ?>
					</select><br><br><br>

				
				<div class="form-group col-sm-6 col-md-6">
				<label for="">Cantidades en existencia</label>
				<h3 id="cCantidades" class="form-control">0</h3>
				</div>
				
				
				
				<div class="form-group col-sm-6 col-md-6">
				<label for="">Precio</label>
				<h3 id="pPrecio" class="form-control">0</h3>
				</div>
				

							
				<br>

				
				<div class="form-group col-sm-6 col-md-6 col-sx-12">

				<label for="">Cantidad</label>
				<input type="number" class="form-control" name="cantidad" required ="true" pattern ="|0-9|" class="form-control" id="txtCantidad">
				
				<br><br>
				<button id="adicionar" class="btn btn-info float-right" type="button">Adicionar al pedido</button>
				
				<p>Productos en la Tabla:
  					<div id="adicionados">

					</div>
				</p>
		
				</div>
		
	




			</div>
		</div>

	
				
				
				
		
	</div>

			
		<div class="card bg-warning text-black col-sm-9 col-md-9">
			<div class="card-body"><h5>Pedido     </h5>
				<input type="hidden" name="estadoPedido" value="0">
			</div>
		</div>
			
    				<div class="row">
       					<div class="">

							<table  id="mytable">


								<tr>
									<th>Producto</th>
									<th>Cantidad</th>
									<th>Valor Unitario</th>
									<th>Subtotal</th>


								</tr>


							</table>


        				</div>
					</div>


			
			
				
			<label for="t"><h3>Total:</h3></label>
			<h3 id="gTotal">0</h3>
			<input type="hidden" id="totalInput" value="" name="totales">

				
			


				
			<label for="observaciones">Observaciones :</label><br>
			<textarea name="observaciones" id="observaciones" cols="60"></textarea>

				<div class="container">
			<button type="submit" name="btnEnviar" class="btn btn-success float-right" >Guardar Pedido</button><br><br>
		
				</div>
	
	</div>
</form>
<script>
$(document).ready(function(){
$("select").select2();

})
	
