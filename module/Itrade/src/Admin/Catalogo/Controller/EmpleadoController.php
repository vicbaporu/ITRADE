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
        $form = new \Catalogo\Form\EmpleadoForm();

        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
    }
}
