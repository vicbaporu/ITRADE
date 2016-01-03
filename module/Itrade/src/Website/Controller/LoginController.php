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
    	if($request->isPost())
    	{
    		$success = false;
    		

    		$post_data = $request->getPost();
    		$user = $post_data['txtUser'];
    		$pass = md5($post_data['txtPass']);

    		$empleado = \EmpleadoQuery::create()
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
	  		$message = "Correo electrónico o contraseña incorrecta";
    	}
		

    	$layout = $this->layout();
	    $layout->setTemplate('website/layout/layout_login');

	    $viewModel = new ViewModel(array("mensaje"=>$message));
	    return $viewModel;

    }
}
