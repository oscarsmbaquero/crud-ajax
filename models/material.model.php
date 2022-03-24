<?php

    require_once "conexion.php";

  class MaterialModel{

    
     
     
     static public function mdlGetMaterial(){

       $stmt = conexion::conectar() ->prepare('call prc_GetMaterial');
          
       $stmt ->execute();

      return $stmt->fetchAll();

     }


    //  static public function mdlGetItems(){

    //   $stmt = conexion::conectar() ->prepare('call prc_GetItems');
         
    //   $stmt ->execute();

    //  return $stmt->fetchAll();

    // }


    // funcion introducir material**********************comentar 
    static public function mdlRegistrarMaterial($descripcion, $estado, $unidades, $almacen, $incidencia){
        
      try{

          $fecha = date('Y-m-d');

         
                $stmt = conexion::conectar() ->prepare("INSERT INTO material(descripcion,
                                                                              estado, 
                                                                              unidades,
                                                                              almacen,                                                                               
                                                                              incidencia,
                                                                              created_at,
                                                                              modified_at) 
                                                                              values (:descripcion, 
                                                                              :estado, 
                                                                              :unidades,
                                                                              :almacen,                                                                                
                                                                              :incidencia,
                                                                              :created_at,
                                                                              :modified_at)");

                $stmt ->bindParam(":descripcion", $descripcion , PDO::PARAM_STR);
                $stmt ->bindParam(":estado", $estado , PDO::PARAM_STR);
                $stmt ->bindParam(":unidades", $unidades , PDO::PARAM_STR);
                $stmt ->bindParam(":almacen", $almacen , PDO::PARAM_STR);                
                $stmt ->bindParam(":incidencia", $incidencia , PDO::PARAM_STR);
                $stmt ->bindParam(":created_at", $fecha , PDO::PARAM_STR);
                $stmt ->bindParam(":modified_at", $fecha , PDO::PARAM_STR);



                if($stmt ->execute()){

                  $resultado = "ok";
                }else {

                  $resultado = "error";
                }
         }
          catch(Exception $e) {
              $resultado = 'Excepcion capturada: ' . $e->getMessage(). "\n";

          }
                return $resultado;

                $stmt = null;
             
                  
    }

    static public function mdlActualizarInformacion($table, $data, $id, $nameId){

      $set = "";

      foreach ($data as $key => $value) {
          
          $set .= $key." = :".$key.",";
              
      }

      $set = substr($set, 0, -1);

      $stmt = Conexion::conectar()->prepare("UPDATE $table SET $set WHERE $nameId = :$nameId");

      foreach ($data as $key => $value) {
          
          $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
          
      }		

      $stmt->bindParam(":".$nameId, $id, PDO::PARAM_INT);

      if($stmt->execute()){

          return "ok";

      }else{

          return Conexion::conectar()->errorInfo();
      
      }
  }

  /*=============================================
  Peticion DELETE para eliminar datos
  =============================================*/

  static public function mdlEliminarInformacion($table, $id, $nameId){

      $stmt = Conexion::conectar()->prepare("DELETE FROM $table WHERE $nameId = :$nameId");

      $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

      if($stmt -> execute()){

          return "ok";;
      
      }else{

          return Conexion::conectar()->errorInfo();

      }

  }   

  }



?>