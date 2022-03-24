<?php

    require_once "conexion.php";

  class DashboardModel{

     static public function mdlGetDAtosDashboard(){

       $stmt = conexion::conectar() ->prepare('call prc_ObtenerDatosDashboard()');

       $stmt ->execute();


      return $stmt->fetchAll(PDO::FETCH_OBJ);


     }     
     
     
    //  static public function mdlGetMaterial(){

    //    $stmt = conexion::conectar() ->prepare('call prc_GetMaterial');
          
    //    $stmt ->execute();

    //   return $stmt->fetchAll(PDO::FETCH_OBJ);

    //  }


    //  static public function mdlGetItems(){

    //   $stmt = conexion::conectar() ->prepare('call prc_GetItems');
         
    //   $stmt ->execute();

    //  return $stmt->fetchAll(PDO::FETCH_OBJ);

    // }

  }



?>