$(traer(), mostrar(), menus(),ver_agotados());

function menus() {
    if ($('#user_log').val() == "ADMINISTRADOR") {

    } else if ($('#user_log').val() == "BODEGA") {
        $('#clientes').hide();
        $('#usuarios').hide();
        $('#rutas').hide();
        $('#carteras').hide();
        $('#movimientos').hide();
    } else if ($('#user_log').val() == "VENTAS") {
        $('#compras').hide();
        $('#usuarios').hide();
        $('#proveedores').hide();
        $('#productos').hide();
        $('#movimientos').hide();
        $('.children-c').hide();
    }
}

function traer() {
    if ($('#carga').val() == "1") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/Usuario/index', function () {
            buscar_usuario();
        });
    } else if ($('#carga').val() == "2") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/cliente/index', function () {
            buscar_cliente();
        });

    } else if ($('#carga').val() == "3") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/Proveedor/index', function () {
            buscar_proveedor();
        });
    } else if ($('#carga').val() == "4"){

    } else if ($('#carga').val() == "5") {
        $('#contenido').html("");

    } else if ($('#carga').val() == "6") {
        $('#contenido').html("");
        $('#contenido').load(uri+'/compras/crear');

    } else if ($('#carga').val() == "7") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/Pedido/consulta_Pedido',function(){
            ConsultarDetalle(); 
        });

    } else if ($('#carga').val() == "8") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/Ruta/index');

    } else if ($('#carga').val() == "9") {
        $('#contenido').html("");
        $('#contenido').load(uri + '/movimientos/index', function () {
            buscar_movimientos();
        });
    }
}

function mostrar() {
    if ($('#org').val() != "") {
        mensaje = $('#org').val();
        ver_success();
        limpiar();
    }
}

$(document).on('click', '#usuarios', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Usuario/index', function () {
        buscar_usuario();
    });
});

$(document).on('click', '#categorias', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/categoria/index', function () {
        buscar_categoria();
    });
});

$(document).on('click', '#clientes', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/cliente/index', function () {
        buscar_cliente();
    });
});

$(document).on('click', '#proveedores', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Proveedor/index', function () {
        buscar_proveedor();
    });
});

$(document).on('click', '#productos', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Producto/index', function () {
        buscar_producto();
    });
});

$(document).on('click', '#carteras', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/cartera/index');
});

$(document).on('click', '#rutas', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Ruta/index');
});

$(document).on('click', '#compras', function () {
    $('#contenido').html("");
    $('#contenido').load(uri+'/compras/crear', function () {
        listar_proveedor();
        $("#proveedor").select2();
        $("#ddlproducto").select2();
    });
});

$(document).on('click', '#ReporteCompras', function () {
    $('#contenido').html("");
    $('#contenido').load(uri+'/compras/index', function () {
        ConsultarCompra()
    });
});

$(document).on('click', '#agotados', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/producto/vista', function () {
        ver_agotados();
    });
});

$(document).on('click', '#movimientos', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/movimientos/index', function () {
        buscar_movimientos();
    });
});

//boton crear ruta
$(document).on('click', '#cr', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Ruta/crear');
});

//boton editar ruta
$(document).on('click', '#tedi', function () {
    var id = $(this).val();
    $('#form_editar').show();
    $('#tabla_rutas').hide();
    $('#inicio_ruta').hide();
    editarBarrios(id);
});

//Pedidos
$(document).on('click', '#crearPedido', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Pedido/index');
    ponerPrecio();
    direccion();
});

$(document).on('click', '#consultaPedido', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/Pedido/consulta_Pedido',function(){
    ConsultarPed();
    });
});

$(document).on('click', '#ayuda', function () {
    $('#contenido').html("");
    $('#contenido').load(uri + '/login/ayuda',function(){
    });
});