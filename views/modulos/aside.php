 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="images/logos/logo_astron.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">Astron</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu cambio de prueba-->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <!-- <li class="nav-item">
            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('views/dashboard.php','content-wrapper')">
               <i class="nav-icon fas fa-th"></i>
              <p>
                Items           
              </p>
            </a>
          </li> -->

                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link"
                         onclick="CargarContenido('views/material.php','content-wrapper')">
                         <i class="nav-icon fas fa-atlas"></i>
                         <p>
                             Material
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a style="cursor: pointer;" class="nav-link"
                         onclick="CargarContenido('views/item.php','content-wrapper')">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Items
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Incidencias
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a style="cursor: pointer;" class="nav-link"
                                 onclick="CargarContenido('views/avisos.php','content-wrapper')">
                                 <i class="fas fa-list"></i>
                                 <p>Total Incidencias</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a style="cursor: pointer;" class="nav-link"
                                 onclick="CargarContenido('views/carga_masiva_avisos.php','content-wrapper')">
                                 <i class="fas fa-file-excel"></i>
                                 <p>Carga Masiva</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon fas fa-building"></i>
                                 <p>
                                     Cáceres
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/avisosCaceres.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Abiertas Cáceres</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/tratadosCaceres.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Tratadas Cáceres</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/cerradosCaceres.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Cerradas Cáceres</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="nav-icon far fa-building"></i>
                                 <p>
                                     Badajoz
                                     <i class="right fas fa-angle-left"></i>
                                 </p>
                             </a>
                             <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/avisosBadajoz.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Abiertas Badajoz</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/tratadosBadajoz.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Tratadas Badajoz</p>
                                     </a>
                                 </li>
                                 <li class="nav-item">
                                     <a style="cursor: pointer;" class="nav-link"
                                         onclick="CargarContenido('views/cerradosBadajoz.php','content-wrapper')">
                                         <i class="fas fa-list"></i>
                                         <p>Cerradas Badajoz</p>
                                     </a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>


 <script>
// $(".nav-link").on('click',function(){
// $(".nav-link").removeClass('active');
// $(this).addClass('active');
//  }
 </script>