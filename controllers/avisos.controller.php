<?php


class AvisosController{


    

    /***********************************************************************
     FUNCION PARA CARGA MASIVA DE AVISOS POR EXCEL 
         Oscar Sánchez-Marín Baquero 5/02/22   
    ************************************************************************ */
    static public function ctrCargaMasivaAvisos($fileAvisos){
        
        $respuesta = AvisosModel::mdlCargaMasivaAvisos($fileAvisos);
        
        return $respuesta;
    }


   /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS 
         Oscar Sánchez-Marín Baquero 01/02/22   
    ************************************************************************ */

    static public function ctrGetavisos(){

            $avisos = AvisosModel::mdlGetAvisos();



               return $avisos;
               //var_dump($material);
    }

     /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  DE CACERES
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosCaceres(){

        $avisos = AvisosModel::mdlGetAvisosCaceres();



           return $avisos;
           //var_dump($material);
}

    /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  de BADAJOZ
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosBadajoz(){

        $avisos = AvisosModel::mdlGetAvisosBadajoz();



           return $avisos;
           //var_dump($material);
}
  /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  DE CACERES tratados
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosCaceresTratados(){

        $avisos = AvisosModel::mdlGetAvisosCaceresTratados();



           return $avisos;
           //var_dump($material);
}
  /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  DE BADAJOZ tratados
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosBadajozTratados(){

        $avisos = AvisosModel::mdlGetAvisosBadajozTratados();



           return $avisos;
           //var_dump($material);
}


     /***********************************************************************
     FUNCION QUE REGISTRA LOS AVISOS 
         Oscar Sánchez-Marín Baquero 01/02/22   
    ************************************************************************ */

    static public function ctrRegistrarAvisos($numero_aviso, $centro, $localidad, $provincia, $averia, $prioridad){


        $registroAvisos = AvisosModel::mdlRegistrarAvisos($numero_aviso, $centro, $localidad, $provincia, $averia, $prioridad);


        return $registroAvisos;

    }


      /***********************************************************************
     FUNCION QUE ACTUALIZA LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrActualizarAvisos($table, $data, $id, $nameId){
        
        $respuesta = AvisosModel::mdlActualizarInformacion($table, $data, $id, $nameId);
        
        return $respuesta;
    }


    
      /***********************************************************************
     FUNCION QUE ELIMINA LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrTratarAvisosCaceres($table, $id, $nameId){
        $respuesta = AvisosModel::mdlTratarAvisosCaceres($table, $id, $nameId);
        
        return $respuesta;
    }

      /***********************************************************************
     FUNCION QUE ELIMINA LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrTratarAvisosBadajoz($table, $id, $nameId){
        $respuesta = AvisosModel::mdlTratarAvisosBadajoz($table, $id, $nameId);
        
        return $respuesta;
    }

     /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  DE CACERES CERRADOS
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosCaceresCerrados(){

        $avisos = AvisosModel::mdlGetAvisosCaceresCerrados();



           return $avisos;
           //var_dump($material);
    }

     /***********************************************************************
     FUNCION QUE OBTIENE LOS AVISOS  DE CACERES CERRADOS
         Oscar Sánchez-Marín Baquero 07/02/22   
    ************************************************************************ */

    static public function ctrGetavisosBadajozCerrados(){

        $avisos = AvisosModel::mdlGetAvisosBadajozCerrados();



           return $avisos;
           //var_dump($material);
    }

      /***********************************************************************
     FUNCION QUE PASA A EATDO CERRADO LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrCerrarAvisosCaceres($table, $id, $nameId){
        $respuesta = AvisosModel::mdlCerrarAvisosCaceres($table, $id, $nameId);
        
        return $respuesta;
    }

    

      /***********************************************************************
     FUNCION QUE PASA A EATDO CERRADO LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrCerrarAvisosBadajoz($table, $id, $nameId){
        $respuesta = AvisosModel::mdlCerrarAvisosBadajoz($table, $id, $nameId);
        
        return $respuesta;
    }

    
      /***********************************************************************
     FUNCION QUE PASA A EATDO CERRADO LOS AVISOS 
         Oscar Sánchez-Marín Baquero 05/02/22   
    ************************************************************************ */

    static public function ctrEliminarAvisos($table, $id, $nameId){
        $respuesta = AvisosModel::mdleliminarAvisos($table, $id, $nameId);
        
        return $respuesta;
    }


  
}