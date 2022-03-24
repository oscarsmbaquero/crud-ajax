  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mostrar Items</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

      <div class="content">
           <div class="container-fluid">
              <!-- <div class="row">
                <div class="col-12">
                   <div class="card card-info">
                     <div class="card-header">
                       <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                         <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse">
                             <i class="fas fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-tool" id="btnLimpiarBusqueda">
                               <i class="fas fa-times"></i>
                           </button>
                         </div> 
                       </div> 
                     <div class="card-body">
                     </div> 
                   </div>
                </div>
              </div> -->
              <div class="row">
                <div class="col-lg-12">
                  <table id="tabla_item" class="table table-striped w-100 shadow">
                    <thead>
                      <tr>                                              
                        <th>Codigo</th>
                        <th>Descripción</th>                  
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>

           </div>


      </div>
     
      <script>
  
          $(document).ready(function(){

              var table;

            $.ajax({

              url:"ajax/item.ajax.php",
              type: "POST",
              data: {
                'accion' :1 //1: LISTAR ITEMS
                },  
              //data : datos,
              dataType:'json',
              success:function(respuesta){
                //console.log("respuesta",respuesta);
              }

            });  

              table = $("#tabla_item").DataTable({
                  ajax:{
                    url:"ajax/item.ajax.php",
                    dataSrc: '',
                    type: "POST",
                    data: {'accion' :1},// 1 listar maerial nos traemos el materal

                  },
               languaje:{
                 url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
               }
              
              });
          })


      </script>