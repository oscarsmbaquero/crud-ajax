<?php

require_once "conexion.php";
use PhpOffice\PhpSpreadsheet\IOFactory;


class AvisosModel{

    /*===================================================================
    REALIZAR LA CARGA MASIVA DE AVISOS MEDIANTE ARCHIVO EXCEL
    CARGA MASIVAMENTE LOS AVISOSsss z
    Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlCargaMasivaAvisos($fileAvisos){

        $nombreArchivo = $fileAvisos['tmp_name'];

        $documento = IOFactory::load($nombreArchivo);

        

        $hojaAvisos = $documento->getSheet(0);//empezamos por la primer afila
        $numeroFilasAvisos = $hojaAvisos->getHighestDataRow(); 

        $avisosRegistrados = 0;       

            //CICLO FOR PARA REGISTROS DE PRODUCTOS
            for ($i=2; $i <= $numeroFilasAvisos ; $i++) { 

                $numero_aviso     = $hojaAvisos->getCellByColumnAndRow(1,$i);
                $centro           = $hojaAvisos->getCellByColumnAndRow(2,$i);
                $localidad        = $hojaAvisos->getCellByColumnAndRow(3,$i);
                $provincia        = $hojaAvisos->getCellByColumnAndRow(4,$i);
                $averia           = $hojaAvisos->getCellByColumnAndRow(5,$i); 
                $prioridad        = $hojaAvisos->getCellByColumnAndRow(6,$i);               
                //$fecha_actualizacion_producto = date('Y-m-d');

                if(!empty($numero_aviso)){
                    $stmt = Conexion::conectar()->prepare("INSERT INTO avisos(numero_aviso,
                                                                                centro,
                                                                                localidad,
                                                                                provincia,
                                                                                averia,
                                                                                prioridad)
                                                                        values(:numero_aviso,
                                                                                :centro,
                                                                                :localidad,
                                                                                :provincia,
                                                                                :averia,
                                                                                :prioridad);");

                    $stmt -> bindParam(":numero_aviso",$numero_aviso,PDO::PARAM_STR);
                    $stmt -> bindParam(":centro",$centro,PDO::PARAM_STR);
                    $stmt -> bindParam(":localidad",$localidad,PDO::PARAM_STR);
                    $stmt -> bindParam(":provincia",$provincia,PDO::PARAM_STR);
                    $stmt -> bindParam(":averia",$averia,PDO::PARAM_STR);
                    $stmt -> bindParam(":prioridad",$prioridad,PDO::PARAM_STR);


                    if($stmt->execute()){
                        $avisosRegistrados = $avisosRegistrados + 1;
                    }else{
                        $avisosRegistrados = 0;
                    }
                }

               
            }     
            return $avisosRegistrados;  
    }
    
    /*===================================================================
    lista avisos *** todos*****
    Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlGetAvisos(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisos');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }
     /*===================================================================
    OBTIENE MEDIANTE PROCEDIMIENTO MYSQL LOS AVISOS DE LA PROVINCIA DE CACERES
    Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlGetAvisosCaceres(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosCaceres');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }
     /*===================================================================
     OBTIENE MEDIANTE PROCEDIMIENTO MYSQL LOS AVISOS DE LA PROVINCIA DE BADAJOZ
     Oscar Sánchez-Marin Baquero    05-02-2022
    ====================================================================*/
    static public function mdlGetAvisosBadajoz(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosBadajoz');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }

    /*===================================================================
    *OBTIENE MEDIANTE PROCEDIMIENTO MYSQL LOS AVISOS TRATADOS DE CACERES
    *Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlGetAvisosCaceresTratados(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosCaceresTratados');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }

    /*===================================================================
    lista avisos *** Badajoz*****
    Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlGetAvisosBadajozTratados(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosBadajozTratados');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }

     /*===================================================================
    lista avisos cerrados Cáceres*****
    Oscar Sánchez-Marin Baquero    07-02-2022
    ====================================================================*/
    static public function mdlGetAvisosCaceresCerrados(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosCaceresCerrados');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }

     /*===================================================================
    lista avisos cerrados Badajoz*****
    ====================================================================*/
    static public function mdlGetAvisosBadajozCerrados(){

        $stmt = conexion::conectar() ->prepare('call prc_GetAvisosBadajozCerrados');
           
        $stmt ->execute();
 
       return $stmt->fetchAll();
 
    }




       // funcion introducir material**********************comentar 
    static public function mdlRegistrarAvisos($numero_aviso, $centro, $localidad, $provincia, $averia, $prioridad){
        
        try{
  
            $fecha = date('Y-m-d');
            $estado ='Abierto'; // creamos la variable aqui porque al añadir los avisos entran directamente con estado Abierto
           
                  $stmt = conexion::conectar() ->prepare("INSERT INTO avisos(numero_aviso,
                                                                                centro, 
                                                                                localidad,
                                                                                provincia,                                                                               
                                                                                averia,
                                                                                estado,
                                                                                prioridad,
                                                                                created_at,
                                                                                modified_at) 
                                                                                values (:numero_aviso, 
                                                                                :centro, 
                                                                                :localidad,
                                                                                :provincia,                                                                                
                                                                                :averia,
                                                                                :estado,
                                                                                :prioridad,
                                                                                :created_at,
                                                                                :modified_at)");
  
                  $stmt ->bindParam(":numero_aviso", $numero_aviso , PDO::PARAM_STR);
                  $stmt ->bindParam(":centro", $centro , PDO::PARAM_STR);
                  $stmt ->bindParam(":localidad", $localidad , PDO::PARAM_STR);
                  $stmt ->bindParam(":provincia", $provincia , PDO::PARAM_STR);                
                  $stmt ->bindParam(":averia", $averia , PDO::PARAM_STR);
                  $stmt ->bindParam(":estado", $estado , PDO::PARAM_STR);
                  $stmt ->bindParam(":prioridad", $prioridad , PDO::PARAM_STR);
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
  
    static public function mdlTratarAvisosCaceres($table, $id, $nameId){
               //update avisos set estado ='Cerrado' where nameId = :$nameId;
        $stmt = Conexion::conectar()->prepare("UPDATE $table  SET estado ='Tratado'WHERE provincia ='Caceres' and $nameId = :$nameId");
  
        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);
  
        if($stmt -> execute()){
  
            return "ok";;
        
        }else{
  
            return Conexion::conectar()->errorInfo();
  
        }
  
    }   

     /*=============================================
    Peticion DELETE para eliminar datos
    =============================================*/
  
    static public function mdlTratarAvisosBadajoz($table, $id, $nameId){
        //update avisos set estado ='Cerrado' where nameId = :$nameId;
        $stmt = Conexion::conectar()->prepare("UPDATE $table  SET estado ='Tratado'WHERE provincia ='Badajoz' and $nameId = :$nameId");

        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }

    }     
  
   

    // /*=============================================
    // Peticion DELETE para eliminar tratados a Cerrados---comentar
    // =============================================*/

    static public function mdlCerrarAvisosCaceres($table, $id, $nameId){

        $stmt = Conexion::conectar()->prepare("UPDATE  $table SET estado='Cerrado' WHERE provincia ='Caceres' and  $nameId = :$nameId"  );

        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }



    }    

    // /*=============================================
    // Peticion DELETE para eliminar tratados a Cerrados---comentar
    // =============================================*/

    static public function mdlCerrarAvisosBadajoz($table, $id, $nameId){

        $stmt = Conexion::conectar()->prepare("UPDATE  $table SET estado='Cerrado' WHERE provincia ='Badajoz' and  $nameId = :$nameId"  );

        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }
   
    }
    // /*=============================================
    // Peticion DELETE para eliminar avisos comentar elimina culeuiqer ventana 
    // =============================================*/

    static public function mdleliminarAvisos($table, $id, $nameId){

        $stmt = Conexion::conectar()->prepare("delete from  $table WHERE $nameId = :$nameId");

        $stmt -> bindParam(":".$nameId, $id, PDO::PARAM_INT);

        if($stmt -> execute()){

            return "ok";;
        
        }else{

            return Conexion::conectar()->errorInfo();

        }

    }   

    
}