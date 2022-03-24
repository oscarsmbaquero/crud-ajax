<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astron </title>
  <!-- Establecemos el icono en el navegador -->
  <link rel="shortcut icon" href="images/logos/logo_astron.png" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/dist/css/adminlte.min.css">
  <!-- chart.js -->
  <link rel="stylesheet" href="views/assets/plugins/chart.js/Chart.min.js">
   <!--alertas swal-->
  <link rel="stylesheet" href="views/assets/plugins/sweetalert2/sweetalert2.js">
  
  
  <!-- jQuery -->
<script src="views/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!--sweet alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- SweetAlert2 -->
<script src="views/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- JS Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>



<!-- SweetAlert2  CSS-->
<link rel="stylesheet" href="views/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">



 <!-- ============================================================
    =LIBRERIAS PARA USO DE DATATABLES JS
    ===============================================================-->
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>        
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>


    <!-- ============================================================
    =LIBRERIAS PARA EXPORTAR A ARCHIVOS
    ===============================================================-->
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>

<!-- ============================================================
    =ESTILOS PARA USO DE DATATABLES JS
    ===============================================================-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">

<!-- AdminLTE App -->
<script src="views/assets/dist/js/adminlte.min.js"></script>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <?php
        include "modulos/navbar.php";
        include "modulos/aside.php";
       
      
    ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
       <?php include "views/dashboard.php" ?>
    </div>
   
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
     <?php
     
       include "modulos/footer.php";
     ?>
 
<script>
      function CargarContenido(pagina_php,contenedor){
          //console.log("Entro");
       $("." + contenedor).load(pagina_php);

      }

</script>


</body>
</html>
