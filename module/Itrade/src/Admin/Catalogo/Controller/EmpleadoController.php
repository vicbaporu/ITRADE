<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class EmpleadoController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
    
    public function nuevoAction()
    {
        
        
        //INSTANCIAMOS NUESTRO FORMULARIO
        $mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        $form = new \Catalogo\Form\EmpleadoForm($mexico_states);
        
        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
    }
}
