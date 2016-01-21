<?php

namespace Client\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$request = $this->getRequest();
        $message="";
        $id = '1';

        $entity = \ClienteQuery::create()->findPk($id);


    	if($request->isPost())
    	{
    		
    		$success = false;
    		$post_data = $request->getPost();

    		
    		$entity->setClienteRazonsocial($post_data['cliente_razon_social']);
            $entity->setClienteRfc($post_data['cliente_rfc']);
            $entity->setClienteCalle($post_data['cliente_calle']);
            $entity->setClienteNumero($post_data['cliente_numero_exterior']);
            $entity->setClienteInterior($post_data['cliente_numero_interior']);
            $entity->setClienteColonia($post_data['cliente_colonia']);
            $entity->setClienteCiudad($post_data['cliente_ciudad']);
            if($post_data['cliente_estado'] != 'Seleccione un estado');
                $entity->setClienteEstado($post_data['cliente_estado']);
            if($post_data['cliente_pais'] != 'Seleccione un país');
                $entity->setClienteEstado($post_data['cliente_pais']);
            $entity->setClienteEmail($post_data['cliente_email']);
            $entity->setClienteTelefono($post_data['cliente_telefono']);

            $entity->setCliente($post_data['cliente_rfc']);

    		$entity->setClienteNombrecontacto($post_data['cliente_nombre']);

            $entity->save();

            $message = "success";

    		/*
            //SETIAMOS EL STATUS COMO ACTIVO
            $entity->setClienteNombrecontacto('Victor');
          
            $entity->save();
			
    		/*
    		$cliente = \ClienteQuery::create()
			->filterByEmpleadoEmail($user)
			->find();

			if(count($empleado)!=0)
			{
				foreach($empleado as $emp) 
				{
				  if($emp->getEmpleadoEmail() == $user && $emp->getEmpleadoPassword() == $pass)
				  {
				  	$userSession = new Container('user');
        			$userSession->username = 'vic';	
        			echo $userSession->username;
				  	return $this->redirect()->toUrl('http://clientes.itrade/');
				  }
				}
			}
	  		
	  		*/
    	}


    	$mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        $form = new \Client\Form\ClienteForm($mexico_states,$entity);
       

        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' 		=> $form,
            'message'   => $message,
        ));
    }
}
