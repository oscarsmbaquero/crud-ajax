<?php



   class MaterialController{




      static public function ctrGetMaterial(){

            $material = MaterialModel::mdlGetMaterial();



               return $material;
               //var_dump($material);
            }

      // static public function ctrGetItems(){

      //    $items = MaterialModel::mdlGetItems();



      //       return $items;
      //    }


      //comentar funcion añadir producto
      
      static public function ctrRegistrarMaterial($descripcion, $estado, $unidades, $almacen, $incidencia){


          $registroMaterial = MaterialModel::mdlRegistrarMaterial($descripcion, $estado, $unidades, $almacen, $incidencia);


          return $registroMaterial;

      }

      static public function ctrActualizarProducto($table, $data, $id, $nameId){
        
         $respuesta = MaterialModel::mdlActualizarInformacion($table, $data, $id, $nameId);
         
         return $respuesta;
     }
 
     static public function ctrEliminarProducto($table, $id, $nameId)
     {
         $respuesta = MaterialModel::mdlEliminarInformacion($table, $id, $nameId);
         
         return $respuesta;
     }


      }      


         

    

   



?>