<?php

namespace Client\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        //$form = new \Catalogo\Form\ClienteForm();
        $form = new \Client\Form\ClienteForm($mexico_states);
       

        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
    }
}
