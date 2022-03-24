<?php




     require_once "../controllers/dashboard.controller.php";
     require_once "../models/dashboard.model.php";


   class AjaxDashboard{


      public function getDatosDashboard(){


       $datos = DashboardController::ctrGetDatosDashboard();

           echo json_encode($datos);
      }


      // public function getMaterial(){

      //       $materialActual = DashboardController::ctrGetMaterial();

      //       echo json_encode($materialActual);



      // }

      // public function getItems(){

      //    $items = DashboardController::ctrGetItems();

      //    echo json_encode($items);



      // }

   }




      if(isset($_POST['accion']) && $_POST['accion']  == 2){

         $datos = new AjaxDashboard();
         $datos -> getMaterial();


      }else if(isset($_POST['accion']) && $_POST['accion']  == 3){

         $datos = new AjaxDashboard();
         $datos -> getItems();


      }else{

          $datos =new AjaxDashboard();
          $datos ->getDatosDashboard();

      }

 

?>