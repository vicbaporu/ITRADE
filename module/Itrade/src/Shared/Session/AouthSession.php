<?php 

namespace Shared\Session;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class AouthSession extends AbstractActionController {

    /**
     * 
     * @param array $session
     * @param type $expirationTime
     */
    public function Create( array $session=null) {
            $session["idempleado"] = array_key_exists( "idempleado", $session ) ? $session["idempleado"] : null;
            $session["empleado_nombre"] = array_key_exists( "empleado_nombre", $session ) ? $session["empleado_nombre"] : null;
            $session["empleado_apellidopaterno"] = array_key_exists( "empleado_apellidopaterno", $session ) ? $session["empleado_apellidopaterno"] : null;
            $session["empleado_apallidomaterno"] = array_key_exists( "empleado_apallidomaterno", $session ) ? $session["empleado_apallidomaterno"] : null;
            $session["empleado_email"] = array_key_exists( "empleado_email", $session ) ? $session["empleado_email"] : null;
            $session["empleado_estatus"] = array_key_exists("empleado_estatus", $session ) ? $session["empleado_estatus"] : null;
            $session["empleado_rol"] = array_key_exists( "empleado_rol", $session ) ? $session["empleado_rol"] : null;
            $session["empleado_foto"] =  (array_key_exists("empleado_foto", $session ) && !is_null($session["empleado_foto"])) ? $session["empleado_foto"] : '/img/admin/profiles/avatar_default.jpg';

            $session_data = new Container('session_data');
            $session_data->idempleado           = $session["idempleado"];
            $session_data->empleado_nombre            = $session["empleado_nombre"];
            $session_data->empleado_apellidopaterno           = $session["empleado_apellidopaterno"];
            $session_data->empleado_apallidomaterno                = $session["empleado_apallidomaterno"];
            $session_data->empleado_email                = $session["empleado_email"];
            $session_data->empleado_estatus      = $session["empleado_estatus"];
            $session_data->empleado_rol      = $session["empleado_rol"];
            $session_data->empleado_foto        = $session["empleado_foto"];
          

    }
    
    /**
     * 
     * @return boolean
     */
    public function Close() {
        
        $session_data = new Container('session_data');
        $session_data->idempleado     = null;
        $session_data->empleado_nombre            = null;
        $session_data->empleado_apellidopaterno           = null;
        $session_data->empleado_apallidomaterno           = null;
        $session_data->empleado_email                = null;
        $session_data->empleado_estatus                  = null;
        $session_data->empleado_rol      = null;
        $session_data->empleado_foto        = null;

        $session_data->getManager()->getStorage()->clear('session_data');
        
        return true;  
    }
    
    /**
     * 
     * @return boolean
     */
    public function isActive() {    
        $session_data = new Container('session_data');
        if( $session_data->idempleado != null){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 
     * @return array
     */
    public function getData() {
        $session_data = new Container('session_data');
        
        return array(
            "idempleado"                => $session_data->idempleado,
            "empleado_nombre"           => $session_data->empleado_nombre,
            "empleado_apellidopaterno"  => $session_data->empleado_apellidopaterno,
            "empleado_apallidomaterno"  => $session_data->empleado_apallidomaterno,
            "empleado_email"            => $session_data->empleado_email,
            "empleado_estatus"          => $session_data->empleado_estatus,
            "empleado_rol"              => $session_data->empleado_rol,
            "empleado_foto"             => $session_data->empleado_foto,
        );
    }

}

class ClientSession extends AbstractActionController 
{

    /**
     * 
     * @param array $session
     * @param type $expirationTime
     */
    public function Create( array $session=null) 
    {
    
        $session["idcliente"]       = array_key_exists( "idcliente", $session )         ? $session["idcliente"] : null;
        $session["cliente_nombre"]  = array_key_exists( "cliente_nombre", $session )    ? $session["cliente_nombre"] : null;
        $session["cliente_email"]   = array_key_exists( "cliente_email", $session )     ? $session["empleado_apellidopaterno"] : null;
        
        $session_client = new Container('session_client');

        $session_client->idcliente            = $session["idcliente"];
        $session_client->cliente_nombre       = $session["cliente_nombre"];
        $session_client->email                = $session["email"];
    }
    
    /**
     * 
     * @return boolean
     */
    public function Close() 
    {
        
        $session_client                   = new Container('session_client');
        $session_client->idcliente        = null;
        $session_client->cliente_nombre   = null;
        $session_client->cliente_email    = null;

        $session_client->getManager()->getStorage()->clear('session_client');
        
        return true;  
    }
    
    /**
     * 
     * @return boolean
     */
    public function isActive() {    
        $session_client = new Container('session_client');

        if( $session_client->idcliente != null)
            return true;
        else
            return false;
    }

    /**
     * 
     * @return array
     */
    public function getData() 
    {
        $session_client = new Container('session_client');
        
        return array(
            "idcliente"         => $session_client->idcliente,
            "cliente_nombre"    => $session_client->cliente_nombre,
            "cliente_email"     => $session_client->cliente_email,
        );
    }

}

?>