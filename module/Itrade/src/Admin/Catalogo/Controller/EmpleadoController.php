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
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            echo '<pre>';var_dump($post_data);echo '</pre>';
            echo '<pre>';var_dump($post_files);echo '</pre>';exit();
        }
        //INSTANCIAMOS NUESTRO FORMULARIO
        $mexico_states = \Shared\GeneralFunction\Geolocation::getMexicoStates();
        $form = new \Catalogo\Form\EmpleadoForm($mexico_states);
        
        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
    }
    
    public function validateajaxAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $query = new \EmpleadoQuery();
       
            $query->filterBy(\BasePeer::translateFieldname('empleado', $post_data['field'], \BasePeer::TYPE_FIELDNAME, \BasePeer::TYPE_PHPNAME), $post_data['value'], \Criteria::EQUAL);
            
            $exist = $query->exists();
            
            if($post_data['field'] == 'empleado_email'){
                $msj = 'correo electrónico en uso';
            }
            
            return $this->getResponse()->setContent(json_encode(array('exist' => $exist,'msj' => $msj)));
            
            
        }
        
       
    }
}
