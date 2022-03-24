<?php

    require_once "conexion.php";

  class ItemModel{

    


     static public function mdlGetItem(){

      $stmt = conexion::conectar() ->prepare('call prc_GetItems');
         
      $stmt ->execute();

     return $stmt->fetchAll();

    }

  }



?>