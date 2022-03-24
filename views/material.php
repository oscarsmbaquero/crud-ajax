<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Inventario / Material</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Inventario / Material</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">

    <div class="container-fluid">

        <!-- row para criterios de busqueda -->
       

        <!-- row para listado de productos/inventario -->
        <div class="row">
            <div class="col-lg-12">
                <table id="tabla_material" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <!-- <th>id</th> -->
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Unidades</th>
                            <th>Almacén</th>
                            <th>Incidencia</th>
                            <th class="text-cetner">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-small">

                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.container-fluid -->

</div>
<!-- /.content -->

<!-- Ventana Modal para ingresar o modificar un Productos -->
<div class="modal fade" id="mdlGestionarMaterial" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Material</h5>

                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" data-bs-dismiss="modal"
                    id="btnCerrarModal">
                    <i class="far fa-times-circle"></i>
                </button>

            </div>

            <!-- cuerpo del modal -->
            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <!-- Abrimos una fila -->
                    <div class="row">

                        
                    <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptIdMaterial"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Id Material</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptIdMaterial"
                                    name="iptIdMaterial" placeholder="" readonly >
                                    <div class="invalid-feedback">Debe ingresar el ID</div>
                            </div>
                        </div>

                        <!-- Columna para registro del codigo de barras -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptDescripcion"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Descripción</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptDescripcion"
                                    name="iptDescripcion" placeholder="Descripcion" required>
                                <div class="invalid-feedback">Debe ingresar la descripcion</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la categoría del producto -->
                        <div class="col-12  col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptEstado"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Estado</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptEstado" name="iptEstado"
                                    placeholder="Estado" required>
                                <div class="invalid-feedback">Seleccione el Estado</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la descripción del producto -->
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptUnidades"><i class="fas fa-file-signature fs-6"></i> <span
                                        class="small">Unidades</span><span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="iptUnidades"
                                    placeholder="Unidades" required>
                                <div class="invalid-feedback">Debe ingresar unidades</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Precio de Compra -->
                        <div class="col-12  col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptAlmacen"><i class="fas fa-dollar-sign fs-6"></i> <span
                                        class="small">Almacén
                                    </span><span class="text-danger">*</span></label>
                                <input type="text" min="0" class="form-control form-control-sm" id="iptAlmacen"
                                    placeholder="Almacen" required>
                                <div class="invalid-feedback">Debe ingresar el Almacén</div>
                            </div>
                        </div>
                        <div class="col-12  col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptIncidencia"><i class="fas fa-dollar-sign fs-6"></i> <span
                                        class="small">Incidencia
                                    </span><span class="text-danger">*</span></label>
                                <input type="text" min="0" class="form-control form-control-sm" id="iptIncidencia"
                                    placeholder="Incidencia" required>
                                <div class="invalid-feedback">Debe ingresar la incidencia</div>
                            </div>
                        </div>
                        <!-- creacion de botones para cancelar y guardar el producto -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                        <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                            id="btnGuardarMaterial">Guardar Producto</button>
                        <!-- <button class="btn btn-default btn-success" type="submit" name="submit" value="Submit">Save</button> -->

                    </div>
                </form>

            </div>

        </div>
    </div>


</div>
<!-- /. End Ventana Modal para ingreso de Productos -->



<script>
var accion;
var table;
//var operacion_stock = 0; // permitar definir si vamos a sumar o restar al stock (1: sumar, 2:restar)

/*===================================================================*/
//INICIALIZAMOS EL MENSAJE DE TIPO TOAST (EMERGENTE EN LA PARTE SUPERIOR)
/*===================================================================*/
var Toast = Swal.mixin({
    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3000
});

$(document).ready(function() {


    /*===================================================================*/
    // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    /*===================================================================*/
    table = $("#tabla_material").DataTable({
        dom: 'Bfrtip',
        rowCallback:function(row,data)
       {
      
                if(data[2] == "Operativo")
                {
                    $($(row).find("td")[2]).css("background-color","green");
                }
                else if(data[2] == "Averiado"){
                    $($(row).find("td")[2]).css("background-color","red");
                }    
      
        },
        buttons: [{
                text: 'Agregar Producto',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    $("#mdlGestionarMaterial").modal('show');
                    accion = 2; //registrar
                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [5, 10, 15, 30, 50, 100],
        pageLength: 10,
        ajax: {
            url: "ajax/material.ajax.php",
            dataSrc: '',
            type: "POST",
            data: {
                'accion': 1 //1: LISTAR PRODUCTOS
            },
        },
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs:[
                {
                    targets: 0,
                    orderable: false,
                    className: 'control',
                                        
                }, 
                {
                    targets: 6,
                    orderable:false,
                    render: function(data, type, full, meta)
                    {
                      return "<center>" +
                                "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" + 
                                   "<i class='fas fa-pencil-alt fs-5'></i>" +
                                "</span>" +
                                // "<span class='btnAumentarStock text-success px-1' style='cursor:pointer;'>" +
                                // "<i class='fas fa-plus-circle fs-5'></i>" +
                                // "</span>" +
                                // "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer;'>" +
                                // "<i class='fas fa-minus-circle fs-5'></i>" +
                                // "</span>" +
                                "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" + 
                                   "<i class='fas fa-trash-alt  fs-5'></i>" +
                                "</span>" +
                              "</center>"  


                    }

                }                            

               ],
       
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
    });

    // /*===================================================================*/
    // // EVENTOS PARA CRITERIOS DE BUSQUEDA (CODIGO, CATEGORIA Y PRODUCTO)
    // /*===================================================================*/
    // $("#iptDescripcion").keyup(function() {
    //     table.column($(this).data('index')).search(this.value).draw();
    // })

    // $("#iptEstado").keyup(function() {
    //     table.column($(this).data('index')).search(this.value).draw();
    // })

    // $("#iptAlmacen").keyup(function() {
    //     table.column($(this).data('index')).search(this.value).draw();
    // })
    /*===================================================================*/
    // EVENTO PARA LIMPIAR INPUTS DE CRITERIOS DE BUSQUEDA
    /*===================================================================*/
    // $("#btnLimpiarBusqueda").on('click', function() {

    //     $("#iptDescripcion").val('')
    //     $("#iptEstado").val('')
    //     $("#iptUnidades").val('')
    //     $("#iptAlmacen").val('')
    //     $("#iptIncidencia").val('')

    //     table.search('').columns().search('').draw();
    // })

    // $("#btnCancelarRegistro, #btnCerrarModal").on('click', function() {

    //     $("#validate_descripcion").css("display", "none");
    //     $("#validate_estado").css("display", "none");
    //     $("#validate_unidades").css("display", "none");
    //     $("#validate_almacen").css("display", "none");
    //     $("#validate_incidencia").css("display", "none");
       
    //     $("#iptDescripcion").val("");
    //     $("#iptEstado").val("");
    //     $("#iptUnidades").val("");
    //     $("#iptAlmacen").val("");
    //     $("#iptIncidencia").val("");
        

    // })

 

    /* ======================================================================================
    EVENTO QUE LIMPIA EL INPUT DE INGRESO DE STOCK AL CERRAR LA VENTANA MODAL
    =========================================================================================*/
    $("#btnCancelarMaterial, #btnCerrarModal").on('click', function() {
        $("#iptStockSumar").val("")
    })

  

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tabla_material tbody').on('click', '.btnEditarProducto', function() {

        accion = 4; //seteamos la accion para editar

        $("#mdlGestionarMaterial").modal('show');

        var data = table.row($(this).parents('tr')).data();
        //console.log("🚀 ~ file: productos.php ~ line 751 ~ $ ~ data", data)
        
        // var id_material = data["id_material"]; 
        //console.log(id_material);
        $("#iptIdMaterial").val(data["id_material"]);
        $("#iptDescripcion").val(data["descripcion"]);       
        $("#iptEstado").val(data["estado"]);
        $("#iptUnidades").val(data["unidades"]);
        $("#iptAlmacen").val(data["almacen"]);
        $("#iptIncidencia").val(data["incidencia"]);
       

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON ELIOMINAR PRODUCTO
    =========================================================================================*/
    $('#tabla_material tbody').on('click', '.btnEliminarProducto', function() {

        accion = 5; //seteamos la accion para editar

        var data = table.row($(this).parents('tr')).data();

        var id_material = data["id_material"];
       

        Swal.fire({
            title: 'Está seguro de eliminar el producto?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, deseo eliminarlo!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {

            if (result.isConfirmed) {

                var datos = new FormData();

                datos.append("accion", accion);
                datos.append("id_material",id_material); //codigo_producto               

                $.ajax({
                    url: "ajax/material.ajax.php",
                    method: "POST",
                    data: datos,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function(respuesta) {

                        if (respuesta == "ok") {

                            Toast.fire({
                                icon: 'success',
                                title: 'El producto se eliminó correctamente'
                            });

                            table.ajax.reload();

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'El producto no se pudo eliminar'
                            });
                        }

                    }
                });

            }
        })
    })


});

// CALCULA LA UTILIDAD
// function calcularUtilidad() {

//     var iptAlmacen = $("#iptAlmacen").val();
//     var iptPrecioVentaReg = $("#iptPrecioVentaReg").val();
//     var Utilidad = iptPrecioVentaReg - iptAlmacen;

//     $("#iptUtilidadReg").val(Utilidad.toFixed(2));

// }

/*===================================================================*/
//EVENTO QUE GUARDA LOS DATOS DEL PRODUCTO, PREVIA VALIDACION DEL INGRESO DE LOS DATOS OBLIGATORIOS
/*===================================================================*/
document.getElementById("btnGuardarMaterial").addEventListener("click", function() {

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

        if (form.checkValidity() === true) {

            console.log("Listo para registrar el producto")

            Swal.fire({
                title: 'Está seguro de registrar el producto?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, deseo registrarlo!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {

                if (result.isConfirmed) {

                    var datos = new FormData();

                    datos.append("accion", accion);
                    datos.append("id_material", $("#iptIdMaterial").val()); //codigo_producto
                    datos.append("descripcion", $("#iptDescripcion").val()); //codigo_producto
                    datos.append("estado", $("#iptEstado").val()); //id_categoria_producto
                    datos.append("unidades", $("#iptUnidades").val()); //descripcion_producto
                    datos.append("almacen", $("#iptAlmacen").val()); //precio_compra_producto
                    datos.append("incidencia", $("#iptIncidencia").val()); //precio_venta_producto
                   

                    if (accion == 2) {
                        var titulo_msj = "El producto se registró correctamente"
                    }

                    if (accion == 4) {
                        var titulo_msj = "El producto se actualizó correctamente"
                    }

                    $.ajax({
                        url: "ajax/material.ajax.php",
                        method: "POST",
                        data: datos,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: 'json',
                        success: function(respuesta) {

                            if (respuesta == "ok") {

                                Toast.fire({
                                    icon: 'success',
                                    title: titulo_msj
                                });

                                table.ajax.reload();

                                $("#mdlGestionarMaterial").modal('hide');

                                $("#iptDescripcion").val("");
                                $("#iptEstado").val("");
                                $("#iptUnidades").val("");
                                $("#iptAlmacen").val("");
                                $("#iptIncidencia").val("");
                               

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'El producto no se pudo registrar'
                                });
                            }

                        }
                    });

                }
            })
        } else {
            console.log("No paso la validacion")
        }

        form.classList.add('was-validated');

    });
});


/*===================================================================*/
//EVENTO QUE LIMPIA LOS MENSAJES DE ALERTA DE INGRESO DE DATOS DE CADA INPUT AL CANCELAR LA VENTANA MODAL
/*===================================================================*/
document.getElementById("btnCancelarRegistro").addEventListener("click", function() {
    $(".needs-validation").removeClass("was-validated");
})
</script>