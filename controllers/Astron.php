<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*===========================================================================
=            NUEVA CLASE DE ADMINISTRACIÓN PANEL DE CONTROL V1.0            =
===========================================================================*/

class Astron extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelo_intranet_usuarios');
        $this->load->model('modelo_intranet_permisos');
        $this->load->model('modelo_intranet_clientes');
        $this->load->model('modelo_intranet_astron');
        $this->load->library('form_validation');
    }

    // ********************************************************************************************************************************************************************************
    // ********************************************************************************************************************************************************************************
    // **        
    // ** 
    // **               Esta funcion muestra la vista con el datatable con los clientes
    // **                       
    // **                      
    // ** 
    // ********************************************************************************************************************************************************************************
    // **   Autor: Oscar Sánchez-Marín Baquero    Fecha 16/10/2021 
    // **    	
    // ********************************************************************************************************************************************************************************
     
    
    
    public function vista_mostrar_item() //Recibimos el llamamiento a esta funcion desde la opcion <li> de sidebar.php 
    {
     
        $this->load->model('Modelo_intranet_astron'); // Cargamos el modelo de maestro de articulos

       


                // funcion de modelo para pintar todas las marcas por pantalla
                $clientes = $this->Modelo_intranet_clientes->get_cliente();
                
                $datos['clientes'] = $clientes;
                $datos['opciones']['opcion']           = "astron/mostrar_item";
                $this->load->view("home", $datos);
          
    }
    // ********************************************************************************************************************************************************************************
        // ********************************************************************************************************************************************************************************
        // **        -- JQUERY_cliente_devuelve_cliente
        // ** 
        // **               NOs devuelve los clientes 
        // **  
        // **                       Variables de entrada
        // **                       ---------------------
        // **                          
        // ** 
        // **                       Variables de salida
        // **                       ---------------------
        // **                           · Array con los clientes
        // **
        // ********************************************************************************************************************************************************************************
        // **   Autor: Oscar Sánchez-Marin Baquero.    Fecha 16/10/2021 
        // **   
        // ********************************************************************************************************************************************************************************
        // **   ??/??/???? - Modificiacion Proyecto Maestro Artículos Autor
        // ********************************************************************************************************************************************************************************        
    
    
        public function JQUERY_devuelve_item()
        {

       
            $this->load->model('Modelo_intranet_astron'); // Cargamos el modelo de maestro de articulos

             
                    
                        $clientes = $this->Modelo_intranet_astron->get_items();                    
                        $array["data"] = [];
                        foreach($clientes as $row)
                        {
                            $array["data"][] = $row;
                        }

                        $resultado = json_encode($array);
                        header('Content-Type: application/json');		
                        echo $resultado;
             
    


 
    }

}
   