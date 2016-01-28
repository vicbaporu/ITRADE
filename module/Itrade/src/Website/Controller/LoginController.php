<?php
namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Session\Container;

class LoginController extends AbstractActionController
{


    public function indexAction()
    {
    	$request = $this->getRequest();
        $message="";

        /*
        $user = 'lopez.victor94@gmail.com';
        $pass = md5('qwerty');
        $entity = new \Empleado();
        $entity->setEmpleadoEmail($user);
        
        //SETIAMOS LA CONTRASEÑA EN MD5
        $entity->setEmpleadoPassword($pass);
        $entity->save();
		*/


    	if($request->isPost())
    	{	

    		$success = false;
    		

    		$post_data = $request->getPost();
    		$user = $post_data['txtUser'];
    		$pass = md5($post_data['txtPass']);

    		$entity = \ClienteQuery::create()
			->filterByClienteEmail($user)
			->find();
 			
 			//Crear un usuario
 			/*
			$entity = new \Cliente();
	        $entity->setClienteEmail($user);
	        
	        //SETIAMOS LA CONTRASEÑA EN MD5
	        $entity->setClientePassword($pass);
	        $entity->save();
			*/			
			
			if(count($entity)!=0)
			{				

				foreach($entity as $client) 
				{
				  if($client->getClienteEmail() == $user && $client->getClientePassword() == $pass )
				  {

				  	//Nuesta session
                	$session = new \Shared\Session\ClientSession();
                	$session->Create(array(
	                    'idcliente' 		=> $client->getIdCliente(),
	                    'cliente_nombre' 	=> $client->getClienteNombrecontacto(),
	                    'cliente_email' 	=> $client->getClienteEmail()
	                ));
	                
	                //var_dump($session->getData());
				  	
				  	return $this->redirect()->toUrl('http://itrade/');
				  	//return $this->redirect()->toRoute('client');
				  }
				}
				
			}
			
			
	  		$message = "Correo electrónico o contraseña incorrecta";
    	}
		

    	$layout = $this->layout();
	    $layout->setTemplate('website/layout/layout_login');

	    $viewModel = new ViewModel(array("mensaje"=>$message));
	    return $viewModel;

    }

    
}
