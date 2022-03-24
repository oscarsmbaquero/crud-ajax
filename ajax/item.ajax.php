<?php




     require_once "../controllers/item.controller.php";
     require_once "../models/item.model.php";


   class AjaxItem{



      public function getItem(){

         $item = ItemController::ctrGetItem();

         echo json_encode($item);



      }

   }

     
      if(isset($_POST['accion']) && $_POST['accion']  == 1){

         $datos = new AjaxItem();
         $datos -> getItem();


      }else{

         // $datos = new AjaxItem();
         // $datos -> getItems();

      }

 

?>