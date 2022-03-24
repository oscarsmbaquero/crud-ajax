   <!-- Content Header (Page header) -->
   <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1 class="m-0">Pizarra</h1>
               </div><!-- /.col -->
               <div class="col-sm-6">
                   <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                       <li class="breadcrumb-item active">Principal</li>
                   </ol>
               </div><!-- /.col -->
           </div><!-- /.row -->
       </div><!-- /.container-fluid -->
   </div>
   <!--content-header-->
   <div class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-2">
                   <div class="small-box bg-success">
                       <div class="inner">
                           <h3 id="materialAveriado" class="text-center"><sup style="font-size: 20px">%</sup></h3>
                           <p>Material Averiado</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-cash"></i>
                       </div>
                       <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <div class="col-lg-2">
                   <div class="small-box bg-warning">
                       <div class="inner">
                           <h3 id="materialOperativo" class="text-center"><sup style="font-size: 20px">%</sup></h3>
                           <p>Material Operativo</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                       </div>
                       <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
               <div class="col-lg-2">
                   <div class="small-box bg-danger">
                       <div class="inner">
                           <h3 id="avisosPendientes" class="text-center"><sup style="font-size: 20px">%</sup></h3>
                           <p>Avisos Pendientes</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-stats-bars"></i>
                       </div>
                       <a href="#" class="small-box-footer">Mas info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
           </div>



       </div>
   </div>

   <script>
$(document).ready(function() {
    
    
      /***********************************************************************
     funcion en la que recibimos prc_ObtenerDatosDashboard
     Oscar Sánchez-Marín Baquero 29/01/22
    ************************************************************************ */
   

    $.ajax({
        url: "ajax/dashboard.ajax.php",
        method: 'POST',
        dataType: 'json',
        success: function(respuesta) {
            console.log("respuesta", respuesta);
            $("#materialAveriado").html(respuesta[0]['materialAveriado']);
            $("#materialOperativo").html(respuesta[0]['materialOperativo']);
            $("#avisosPendientes").html(respuesta[0]['avisosPendientes']);

        }


    });


    /***********************************************************************
     SOLICITUD LISTADO DE MATERIAL.  **********************accion 2*********
     Oscar Sánchez-Marín Baquero 29/01/22   *** esta desabilitada
    ************************************************************************ */
    $.ajax({

        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 2 //Listar material
        },
        dataType: 'json',
        success: function(respuesta) {
            //console.log("Entro");
            console.log("respuestassss", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                //console.log(i);
                filas = '<tr>' +
                    '<td>' + respuesta[i]["id_material"] + '</td>' +
                    '<td>' + respuesta[i]["descripcion"] + '</td>' +
                    '<td>' + respuesta[i]["estado"] + '</td>' +
                    '<td>' + respuesta[i]["unidades"] + '</td>' +
                    '<td>' + respuesta[i]["almacen"] + '</td>' +
                    '<td>' + respuesta[i]["incidencia"] + '</td>' +

                    '</tr>'
                $("#tabla_material tbody").append(filas);
                //console.log("LLego") ;
            }
        }


    });


    /***********************************************************************
     SOLICITUD LISTADO De items          **********************esta desabilitado
     Oscar Sánchez-Marín Baquero 29/01/22
    ************************************************************************ */
    $.ajax({

        url: "ajax/dashboard.ajax.php",
        type: "POST",
        data: {
            'accion': 3 //Listar ITEMS
        },
        dataType: 'json',
        success: function(respuesta) {
            //console.log("Entro");
            console.log("respuesta", respuesta);

            for (let i = 0; i < respuesta.length; i++) {
                //console.log(i);
                filas = '<tr>' +
                    '<td>' + respuesta[i]["codigo"] + '</td>' +
                    '<td>' + respuesta[i]["descripcion"] + '</td>' +
                    '</tr>'
                $("#tabla_items tbody").append(filas);
                //console.log("LLego") ;
            }
        }


    });

})
   </script>