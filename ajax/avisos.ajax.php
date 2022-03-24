<?php

require_once "../controllers/avisos.controller.php";
require_once "../models/avisos.model.php";



require_once "../vendor/autoload.php";




  class ajaxAvisos{
    
    public $fileAvisos;

    public $numero_aviso;
    public $centro;
    public $localidad;
    public $provincia;
    public $averia;
    public $prioridad;


    public function ajaxCargaMasivaAvisos(){




         $respuesta = AvisosController::ctrCargaMasivaAvisos($this->fileAvisos);


         echo json_encode($respuesta);


    }

    // comentar function para obtener avisos 
    public function getAvisos(){

      $avisos = AvisosController::ctrGetAvisos();

      echo json_encode($avisos);



    }

    public function getAvisosCaceres(){

      $avisos = AvisosController::ctrGetAvisosCaceres();

      echo json_encode($avisos);



    }

    public function getAvisosCaceresTratados(){

      $avisos = AvisosController::ctrGetAvisosCaceresTratados();

      echo json_encode($avisos);



    }

    public function getAvisosBadajozTratados(){

      $avisos = AvisosController::ctrGetAvisosBadajozTratados();

      echo json_encode($avisos);



    }

    public function getAvisosCaceresCerrados(){

      $avisos = AvisosController::ctrGetAvisosCaceresCerrados();

      echo json_encode($avisos);



    }

    public function getAvisosBadajozCerrados(){

      $avisos = AvisosController::ctrGetAvisosBadajozCerrados();

      echo json_encode($avisos);



    }

    public function getAvisosBadajoz(){

      $avisos = AvisosController::ctrGetAvisosbadajoz();

      echo json_encode($avisos);



    }

    public function ajaxRegistrarAvisos(){


      $avisos = AvisosController::ctrRegistrarAvisos($this->numero_aviso, $this->centro, $this->localidad, $this->provincia, $this->averia, $this->prioridad);
      //console.log(material);

      echo json_encode($avisos);

    }
    public function ajaxActualizarAvisos($data){
          
      $table = "avisos";
      $id = $_POST["id_aviso"];
      $nameId = "id_aviso";

      $respuesta = AvisosController::ctrActualizarAvisos($table, $data, $id, $nameId);

      echo json_encode($respuesta);
    }

    public function ajaxTratarAvisosCaceres(){

        $table = "avisos"; 
        $id = $_POST["id_aviso"]; 
        $nameId = "id_aviso";

        $respuesta = AvisosController::ctrTratarAvisosCaceres($table, $id, $nameId);

        echo json_encode($respuesta);
    }

    public function ajaxTratarAvisosBadajoz(){

      $table = "avisos"; 
      $id = $_POST["id_aviso"]; 
      $nameId = "id_aviso";

      $respuesta = AvisosController::ctrTratarAvisosBadajoz($table, $id, $nameId);

      echo json_encode($respuesta);
  }

    public function ajaxCerrarAvisosCaceres(){

      $table = "avisos"; 
      $id = $_POST["id_aviso"]; 
      $nameId = "id_aviso";

      $respuesta = AvisosController::ctrCerrarAvisosCaceres($table, $id, $nameId);

      echo json_encode($respuesta);
    }

    public function ajaxCerrarAvisosBadajoz(){

      $table = "avisos"; 
      $id = $_POST["id_aviso"]; 
      $nameId = "id_aviso";

      $respuesta = AvisosController::ctrCerrarAvisosBadajoz($table, $id, $nameId);

      echo json_encode($respuesta);
    }

    public function ajaxeliminarAvisos(){

      $table = "avisos"; 
      $id = $_POST["id_aviso"]; 
      $nameId = "id_aviso";

      $respuesta = AvisosController::ctrEliminarAvisos($table, $id, $nameId);

      echo json_encode($respuesta);
    }

   

  }


if(isset($_POST['accion']) && $_POST['accion']  == 1){ // paramtero para listar avisos

  $datos = new ajaxavisos();
  $datos -> getAvisos();


}else if(isset($_POST['accion']) && $_POST['accion']  == 2){// regitrar AVISOS

        $registrarAviso = new ajaxAvisos();
        $registrarAviso -> numero_aviso     = $_POST["numero_aviso"];
        $registrarAviso -> centro           = $_POST["centro"];
        $registrarAviso -> localidad        = $_POST["localidad"];
        $registrarAviso -> provincia        = $_POST["provincia"];                             
        $registrarAviso -> averia           = $_POST["averia"];
        $registrarAviso -> prioridad        = $_POST["prioridad"];              
        $registrarAviso -> ajaxRegistrarAvisos();


}else if(isset($_POST['accion']) && $_POST['accion'] == 4){//Actualizar avisos
 
  $actualizarProducto = new ajaxavisos();

  $data = array(
      "id_aviso"     => $_POST["id_aviso"],
      "numero_aviso" => $_POST["numero_aviso"],
      "centro"       => $_POST["centro"],
      "localidad"    => $_POST["localidad"],
      "provincia"    => $_POST["provincia"],
      "averia"       => $_POST["averia"],
      "prioridad"    => $_POST["prioridad"],
  );

  $actualizarProducto -> ajaxActualizarAvisos($data);

}else if(isset($_POST['accion']) && $_POST['accion'] == 5){// cambiar el estado a Tratado

  $eliminarProducto = new ajaxavisos();
  $eliminarProducto -> ajaxTratarAvisosCaceres();

} else if(isset($_POST['accion']) && $_POST['accion']  == 6){ // paramtero para listar avisos Caceres

  $datos = new ajaxavisos();
  $datos -> getAvisosCaceres();

}else if(isset($_POST['accion']) && $_POST['accion']  == 7){ // paramtero para listar avisos Badajoz

  $datos = new ajaxavisos();
  $datos -> getAvisosBadajoz();

}else if(isset($_POST['accion']) && $_POST['accion']  == 8){ // paramtero para listar avisos Tratados Caceres 

  $datos = new ajaxavisos();
  $datos -> getAvisosCaceresTratados();

}else if(isset($_POST['accion']) && $_POST['accion']  == 9){ // paramtero para listar avisos Tratados Badajoz 

  $datos = new ajaxavisos();
  $datos -> getAvisosBadajozTratados();

}else if(isset($_POST['accion']) && $_POST['accion']  == 10){ // paramtero para listar avisos Cerrados Caceres 

  $datos = new ajaxavisos();
  $datos -> getAvisosCaceresCerrados();  
     
}else if(isset($_POST['accion']) && $_POST['accion']  == 11){ // paramtero para listar avisos Cerrados Badajoz

  $datos = new ajaxavisos();
  $datos -> getAvisosBadajozCerrados(); 
  
  
}else if(isset($_POST['accion']) && $_POST['accion'] == 12){// pasar avisos de Caceres al estado cerrado

  $eliminarProducto = new ajaxavisos();
  $eliminarProducto -> ajaxCerrarAvisosCaceres();

}else if(isset($_POST['accion']) && $_POST['accion'] == 13){// pasar elimar avisos, 

  $eliminarProducto = new ajaxavisos();
  $eliminarProducto -> ajaxEliminarAvisos();


}else if(isset($_POST['accion']) && $_POST['accion'] == 14){// pasar avisos al estado cerrado Badajoz

  $eliminarProducto = new ajaxavisos();
  $eliminarProducto -> ajaxCerrarAvisosBadajoz();    
       
     

}else if(isset($_POST['accion']) && $_POST['accion'] == 15){// cambiar el estado a Tratado

  $eliminarProducto = new ajaxavisos();
  $eliminarProducto -> ajaxTratarAvisosBadajoz();
  
  
  
}else if(isset($_FILES)){

        $archivo_avisos = new ajaxAvisos();
        $archivo_avisos ->fileAvisos = $_FILES['fileAvisos'];
        $archivo_avisos  ->ajaxCargaMasivaAvisos();




       }
    
    
    
    
    
    
    

?>