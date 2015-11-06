<?php
namespace Website\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class LoginController extends AbstractActionController
{
    public function indexAction()
    {
    	$layout = $this->layout();
	    $layout->setTemplate('layout/login');
	    $viewModel = new ViewModel();
	    return $viewModel;

    }
}
