<?php

namespace Client\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $session = new \Shared\Session\ClientSession();
        
        //if(!$session->isActive())
            //return $this->redirect()->toUrl('http://itrade/login');

    	$request = $this->getRequest();
        //echo $request;
        $message="success";


        $id = $session->getData()['idcliente'];
        $id = 1;

        $entity = \ClienteQuery::create()->findPk($id);


    	if($request->isPost())
    	{
            $success    = false;
            $post_data  = $request->getPost();
            $post_files = $request->getFiles();
            
            //Campos de datos generales
                $entity->setClienteRazonsocial($post_data['cliente_razon_social']);
                $entity->setClienteRfc($post_data['cliente_rfc']);
                $entity->setClienteCalle($post_data['cliente_calle']);
                $entity->setClienteNumero($post_data['cliente_numero_exterior']);
                $entity->setClienteInterior($post_data['cliente_numero_interior']);
                $entity->setClienteColonia($post_data['cliente_colonia']);
                $entity->setClienteCiudad($post_data['cliente_ciudad']);
                $entity->setClienteCodigopostal($post_data['cliente_cp']);
                
                if($post_data['cliente_estado'] != 'Seleccione un estado');
                    $entity->setClienteEstado($post_data['cliente_estado']);
                if($post_data['cliente_pais'] != 'Seleccione un país');
                    $entity->setClientePais($post_data['cliente_pais']);

                $entity->setClienteEmail($post_data['cliente_email']);
                $entity->setClienteTelefono($post_data['cliente_telefono']);
                $entity->setClienteRfc($post_data['cliente_rfc']);
                $entity->setClienteNombrecontacto($post_data['cliente_nombre']);
            //Terminan campos generales
            
            //Campos Fiscales
                //$entity->setClienteRazonsocial($post_data['cliente_f_razon_social']);
                //$entity->setClienteRfc($post_data['cliente_f_rfc']);
                $entity->setClienteCallefiscal($post_data['cliente_f_calle']);
                $entity->setClienteNumerofiscal($post_data['cliente_f_numero_exterior']);
                $entity->setClienteInteriorfiscal($post_data['cliente_f_numero_interior']);
                $entity->setClienteColoniafiscal($post_data['cliente_f_colonia']);
                $entity->setClienteCiudadfiscal($post_data['cliente_f_ciudad']);
                $entity->setClienteCodigopostalfiscal($post_data['cliente_f_cp']);
                
                if($post_data['cliente_f_estado'] != 'Seleccione un estado');
                    $entity->setClienteEstadofiscal($post_data['cliente_f_estado']);
                if($post_data['cliente_f_pais'] != 'Seleccione un país');
                    $entity->setClientePaisfiscal($post_data['cliente_f_pais']);
            //Terminan campos fiscales

            //Ruta donde se guardaran los archivos
            $upload_folder =  $_SERVER['DOCUMENT_ROOT']."/files/clientes/".$id."/";

            //Clase auxiliar para validar y guardar archivos
            $fileClass = new \Client\Files\SaveFiles();
            
            //Creamos el directorio del cliente si no existe
            if(!file_exists($upload_folder))
                mkdir($upload_folder);

            $names = array
            (
                'cliente_padron',
                'cliente_encargoconferido',
            );
            /*
            foreach ($post_files as $file ) 
            {
                $i = 0;
                //Verificamos si el no archivo es valido, si lo es proseguimos con el else
                if( !$fileClass->validateFile($file) == "") 
                    $message = $message.$fileClass->validateFile($file);
                else
                {
                    $newName = $names[$i];
                    $fileClass->saveFile($upload_folder,$file,$newName);
                    $debug = $names[$i];
                }
                $i++;
            }
            */

            //Verificamos que el usuario haya subido algún archivo
            $file = $post_files['cliente_padron'];
            if($file['name'] != "")
            {
                 if( !$fileClass->validateFile($file) == "") 
                    //Si el archivo que se quiso subir tiene error
                    $message = $message.$fileClass->validateFile($file);
                else
                {
                    //Si se valido que el archivo sea correcto
                    $fileClass->saveFile($upload_folder,$file,'cliente_padron');
                    //Insertamos a la base de datos
                    $entity->setClientePadronimportador("/files/clientes/".$id."/cliente_padron.".$fileClass->getType($file));
                }
            }


            //copy($post_files['cliente_padron']['tmp_name'], $upload_folder);


            
            if($message == "success")
                $entity->save();

    		/*
            $entity->setClienteNombrecontacto('Victor');
            $entity->save();
			
    		/*
    		$cliente = \ClienteQuery::create()
			->filterByEmpleadoEmail($user)
			->find();	  		
	  		*/
    	}
        else
            $message = "";


    	$mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        $form = new \Client\Form\ClienteForm($mexico_states,$entity);
       
        //$form = new \Catalogo\Form\ClienteForm();
        
        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' 		=> $form,
            'message'   => $message,
            'session'   => $session,
            'debug'     => $debug
        ));
    }
}
