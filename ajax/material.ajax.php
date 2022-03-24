<?php




     require_once "../controllers/material.controller.php";
     require_once "../models/material.model.php";


   class AjaxMaterial{
      
      
      //public $fileMaterial;

      public $descripcion;
      public $estado;
      public $unidades;
      public $almacen;
      public $incidencia;



     


      public function getMaterial(){

            $materialActual = MaterialController::ctrGetMaterial();

            echo json_encode($materialActual);



      }

      // public function getItems(){

      //    $items = MaterialController::ctrGetItems();

      //    echo json_encode($items);



      // }

      public function ajaxRegistrarMaterial(){


         $material = MaterialController::ctrRegistrarMaterial($this->descripcion, $this->estado, $this->unidades, $this->almacen, $this->incidencia);
         //console.log(material);

         echo json_encode($material);

      }

      public function ajaxActualizarProducto($data){
         
         $table = "material";
         $id = $_POST["id_material"];
         $nameId = "id_material";
 
         $respuesta = MaterialController::ctrActualizarProducto($table, $data, $id, $nameId);
 
         echo json_encode($respuesta);
     }
 
     public function ajaxEliminarProducto(){
 
         $table = "material"; 
         $id = $_POST["id_material"]; 
         $nameId = "id_material";
 
         $respuesta = MaterialController::ctrEliminarProducto($table, $id, $nameId);
 
         echo json_encode($respuesta);
     }

   }



      
      if(isset($_POST['accion']) && $_POST['accion']  == 1){ // paramtero para listar material

         $datos = new AjaxMaterial();
         $datos -> getMaterial();


      }
      else if(isset($_POST['accion']) && $_POST['accion']  == 2){// regitrar productos

               $registrarMaterial = new AjaxMaterial();
               $registrarMaterial -> descripcion = $_POST["descripcion"];
               $registrarMaterial -> estado      = $_POST["estado"];
               $registrarMaterial -> unidades    = $_POST["unidades"];
               $registrarMaterial -> almacen     = $_POST["almacen"];                             
               $registrarMaterial -> incidencia  = $_POST["incidencia"];              
               $registrarMaterial -> ajaxRegistrarMaterial();
               

         


      }else if(isset($_POST['accion']) && $_POST['accion'] == 4){
 
         $actualizarProducto = new AjaxMaterial();
     
         $data = array(
             "id_material" => $_POST["id_material"],
             "descripcion" => $_POST["descripcion"],
             "estado" => $_POST["estado"],
             "unidades" => $_POST["unidades"],
             "almacen" => $_POST["almacen"],
             "incidencia" => $_POST["incidencia"],
             
             
         );
         
         $actualizarProducto -> ajaxActualizarProducto($data);
         
     
     }else if(isset($_POST['accion']) && $_POST['accion'] == 5){
     
         $eliminarProducto = new AjaxMaterial();
         $eliminarProducto -> ajaxEliminarProducto();


     }

 

?>