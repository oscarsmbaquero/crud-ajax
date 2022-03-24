<?php



   class DashboardController{


      static public function ctrGetDatosDashboard(){


         $datos = DashboardModel:: mdlGetDatosDashboard();

         return $datos;

         }



      // static public function ctrGetMaterial(){

      //       $material = DashboardMOdel::mdlGetMaterial();



      //          return $material;
      // }

      // static public function ctrGetItems(){

      //    $items = DashboardModel::mdlGetItems();



      //       return $items;
      //    }


       }      


         

    

   



?>