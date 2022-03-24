<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Abiertas Badajoz</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Incidencias</li>
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
                <table id="tabla_averias" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <!-- <th>id</th> -->
                            <th>Nº Incidencia</th>
                            <th>Centro</th>
                            <th>Localidad</th>
                            <th>Provincia</th>
                            <th>Estado</th>
                            <th>Averia</th>
                            <th>Prioridad</th>
                            <th>F. Entrada</th>
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

<!-- Ventana Modal para ingresar o modificar LOS AVISOS -->
<div class="modal fade" id="mdlGestionarAvisos" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- contenido del modal -->
        <div class="modal-content">

            <!-- cabecera del modal -->
            <div class="modal-header bg-gray py-1">

                <h5 class="modal-title">Agregar Incidencias</h5>

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
                                <label class="" for="iptIdIncidencia"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Id Incidencia</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptIdIncidencia"
                                    name="iptIdIncidencia" placeholder="" readonly >
                                    <div class="invalid-feedback">Debe ingresar el ID</div>
                            </div>
                        </div>

                        <!-- Columna para registro del codigo de barras -->
                        <div class="col-12 col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptNumeroIncidencia"><i class="fas fa-barcode fs-6"></i>
                                    <span class="small">Nº Incidencia</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNumeroIncidencia"
                                    name="iptNumeroIncidencia" placeholder="Nº Incidencia" required>
                                <div class="invalid-feedback">Debe ingresar el número de incidencia</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la categoría del producto -->
                        <div class="col-12  col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptCentro"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Centro</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptCentro" name="iptCentro"
                                    placeholder="Centro " required>
                                <div class="invalid-feedback">Seleccione el Centro</div>
                            </div>
                        </div>

                        <!-- Columna para registro de la descripción del producto -->
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptLocalidad"><i class="fas fa-file-signature fs-6"></i> <span
                                        class="small">Localidad</span><span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="iptLocalidad"
                                    placeholder="Localidad" required>
                                <div class="invalid-feedback">Debe ingresar la localidad</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptProvincia"><i class="fas fa-file-signature fs-6"></i> <span
                                        class="small">Provincia</span><span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="iptProvincia"
                                    placeholder="Provincia" required>
                                <div class="invalid-feedback">Debe ingresar la provincia</div>
                            </div>
                        </div>

                        <!-- Columna para registro del Precio de Compra -->
                        <div class="col-12  col-lg-12">
                            <div class="form-group mb-2">
                                <label class="" for="iptAveria"><i class="fas fa-dollar-sign fs-6"></i> <span
                                        class="small">Averia
                                    </span><span class="text-danger">*</span></label>
                                <input type="text" min="0" class="form-control form-control-sm" id="iptAveria"
                                    placeholder="Descripcion de Incidencia" required>
                                <div class="invalid-feedback">Debe ingresar la Descripcion de la averia</div>
                            </div>
                        </div>
                        <div class="col-12  col-lg-10">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrioridad"><i class="fas fa-dollar-sign fs-6"></i> <span
                                        class="small">Prioridad
                                    </span><span class="text-danger">*</span></label>
                                <input type="text" min="0" class="form-control form-control-sm" id="iptPrioridad"
                                    placeholder="Prioridad" required>
                                <div class="invalid-feedback">Debe ingresar nivel de prioridad de la averia</div>
                            </div>
                        </div>
                        <!-- creacion de botones para cancelar y guardar el producto -->
                        <button type="button" class="btn btn-danger mt-3 mx-2" style="width:170px;"
                            data-dismiss="modal" id="btnCancelarRegistro">Cancelar</button>
                        <button type="button" style="width:170px;" class="btn btn-primary mt-3 mx-2"
                            id="btnGuardarAvisos">Guardar Producto</button>
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

    var todayDate = new Date();
    var AnteriorDate = new Date();
    AnteriorDate.setTime(todayDate.getTime()-(15*24*3600000));// le resto los 15 dias
    var formateo=AnteriorDate.toISOString().split('T')[0];// lo convierto para compararlo con el que traigo de la bse de datos


    /*===================================================================*/
    // CARGA DEL LISTADO CON EL PLUGIN DATATABLE JS
    /*===================================================================*/
    table = $("#tabla_averias").DataTable({
        dom: 'Bfrtip',
        rowCallback:function(row,data)
       {
      
                if(data[7] == "Prioritario")
                {
                    $($(row).find("td")[1]).css("background-color","yellow");
                    
                }
                else if(data[7] == "Normal"){
                    $($(row).find("td")[1]).css("background-color","green");                    
                }   

                if(data[8] <= formateo)
                {
                    $($(row).find("td")[6]).css("background-color","red");
                    
                }
                else if(data[8] > formateo){
                    $($(row).find("td")[6]).css("background-color","green");
                    
                } 
      
        },
        buttons: [{
                text: 'Agregar Incidencia',
                className: 'addNewRecord',
                action: function(e, dt, node, config) {
                    $("#mdlGestionarAvisos").modal('show');
                    accion = 2; //registrar
                }
            },
            'excel', 'print', 'pageLength'
        ],
        pageLength: [10, 25, 50, 100],
        pageLength: 25,
        ajax: {
            url: "ajax/avisos.ajax.php",
            dataSrc: '',
            type: "POST",
            data: {
                'accion': 7 //1: LISTAR AVISOS badajoz
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
                    targets: 4,
                    visible: false,
                    
                }, 
                {
                    targets: 6,
                    visible: false,                    
                                        
                }, 
                {
                    targets: 9,
                    orderable:false,
                    render: function(data, type, full, meta)
                    {
                      return "<center>" +
                                "<span class='btnEditarAvisos text-primary px-1' style='cursor:pointer;'>" + 
                                   "<i class='fas fa-pencil-alt fs-5'></i>" +
                                "</span>" +
                                // "<span class='btnAumentarStock text-success px-1' style='cursor:pointer;'>" +
                                // "<i class='fas fa-plus-circle fs-5'></i>" +
                                // "</span>" +
                                // "<span class='btnDisminuirStock text-warning px-1' style='cursor:pointer;'>" +
                                // "<i class='fas fa-minus-circle fs-5'></i>" +
                                // "</span>" +
                                "<span class='btnEliminarAviso text-warning px-1' style='cursor:pointer;'>" + 
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

 

    /* ======================================================================================
    EVENTO QUE LIMPIA EL INPUT DE INGRESO DE STOCK AL CERRAR LA VENTANA MODAL
    =========================================================================================*/
    $("#btnCancelarAverias, #btnCerrarModal").on('click', function() {
        $("#iptStockSumar").val("")
    })

  

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON EDITAR PRODUCTO
    =========================================================================================*/
    $('#tabla_averias tbody').on('click', '.btnEditarAvisos', function() {

        accion = 4; //seteamos la accion para editar

        $("#mdlGestionarAvisos").modal('show');

        var data = table.row($(this).parents('tr')).data();
        //console.log("🚀 ~ file: productos.php ~ line 751 ~ $ ~ data", data)
        
        // var id_aviso = data["id_aviso"]; 
        //console.log(id_aviso);
        $("#iptIdIncidencia").val(data["id_aviso"]);
        $("#iptNumeroIncidencia").val(data["numero_aviso"]);       
        $("#iptCentro").val(data["centro"]);
        $("#iptLocalidad").val(data["localidad"]);
        $("#iptProvincia").val(data["provincia"]);
        $("#iptAveria").val(data["averia"]);
        $("#iptPrioridad").val(data["prioridad"]);
       

    })

    /* ======================================================================================
    EVENTO AL DAR CLICK EN EL BOTON ELIOMINAR PRODUCTO
    =========================================================================================*/
    $('#tabla_averias tbody').on('click', '.btnEliminarAviso', function() {

        accion = 15; //seteamos la accion para editar

        var data = table.row($(this).parents('tr')).data();

        var id_aviso = data["id_aviso"];
       

        Swal.fire({
            title: 'Está seguro de que está tratado el aviso ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, está tratado!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {

            if (result.isConfirmed) {

                var datos = new FormData();

                datos.append("accion", accion);
                datos.append("id_aviso",id_aviso); //codigo_producto               

                $.ajax({
                    url: "ajax/avisos.ajax.php",
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
                                title: 'El Aviso se eliminó correctamente'
                            });

                            table.ajax.reload();

                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'El aviso no se pudo eliminar'
                            });
                        }

                    }
                });

            }
        })
    })


});


/*===================================================================*/
//EVENTO QUE GUARDA LOS DATOS DEL PRODUCTO, PREVIA VALIDACION DEL INGRESO DE LOS DATOS OBLIGATORIOS
/*===================================================================*/
document.getElementById("btnGuardarAvisos").addEventListener("click", function() {

    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {

        if (form.checkValidity() === true) {

            console.log("Listo para registrar el producto")

            Swal.fire({
                title: 'Está seguro de registrar el aviso?',
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
                    datos.append("id_aviso", $("#iptIdIncidencia").val()); //codigo_producto
                    datos.append("numero_aviso", $("#iptNumeroIncidencia").val()); //codigo_producto
                    datos.append("centro", $("#iptCentro").val()); //id_categoria_producto
                    datos.append("localidad", $("#iptLocalidad").val()); //descripcion_producto
                    datos.append("provincia", $("#iptProvincia").val()); //precio_compra_producto
                    datos.append("averia", $("#iptAveria").val()); //precio_venta_producto
                    datos.append("prioridad", $("#iptPrioridad").val()); //precio_venta_producto
                   

                    if (accion == 2) {
                        var titulo_msj = "El aviso se registró correctamente"
                    }

                    if (accion == 4) {
                        var titulo_msj = "El aviso se actualizó correctamente"
                    }

                    $.ajax({
                        url: "ajax/avisos.ajax.php",
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

                                $("#mdlGestionarAvisos").modal('hide');

                                $("#iptNumeroIncidencia").val("");
                                $("#iptCentro").val("");
                                $("#iptLocalidad").val("");
                                $("#iptProvincia").val("");
                                $("#iptAveria").val("");
                                $("#iptPrioridad").val("");
                                
                               

                            } else {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'El aviso no se pudo registrar'
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