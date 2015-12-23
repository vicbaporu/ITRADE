<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Client\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Zend\Session\Container;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$userSession = new Container('user');
    	$name = $userSession->username;
    	
    	$viewModel = new ViewModel(array("mensaje"=>$name));
	    return $viewModel;
    }
}
