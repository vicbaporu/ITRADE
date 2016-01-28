<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        if($session->isActive()){
            return $this->redirect()->toRoute('admin');
        }
        
        $this->layout('admin/layout/layout_login');
        return new ViewModel();
    }
    
    public function inAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $empleado_email = $post_data['empleado_email'];
            $empleado_password = $post_data['empleado_password'] = md5($post_data['empleado_password']);
            
            //Verificamos si los datos de acceso son correctos y se encuentra activo
            $is_valid = \EmpleadoQuery::create()->filterByEmpleadoEmail($empleado_email)->filterByEmpleadoPassword($empleado_password)->filterByEmpleadoEstatus('activo')->exists();
            
            if($is_valid){
                
                //CREAMOS LA SESION DE NUESTRO USUARIO
                $empleado = \EmpleadoQuery::create()->filterByEmpleadoEmail($empleado_email)->filterByEmpleadoPassword($empleado_password)->findOne();
                
                //Nuesta session
                $session = new \Shared\Session\AouthSession();
                
                //Creamos nuestra session
                $session->Create(array(
                    'idempleado' => $empleado->getIdempleado(),
                    'empleado_nombre' => $empleado->getEmpleadoNombre(),
                    'empleado_apellidopaterno' => $empleado->getEmpleadoApellidopaterno(),
                    'empleado_apallidomaterno' => $empleado->getEmpleadoApallidomaterno(),
                    'empleado_email' => $empleado->getEmpleadoEmail(),
                    'empleado_estatus' => $empleado->getEmpleadoEstatus(),
                    'empleado_rol' => $empleado->getEmpleadoRol(),
                    'empleado_foto' => $empleado->getEmpleadoFoto()
                )); 
                
                return $this->redirect()->toRoute('admin');

            }else{
                return $this->redirect()->toRoute('admin/login');
            }
           
        }else{
            return $this->redirect()->toRoute('admin/login');
        }
    }
    
    public function outAction() {
         
         $AouthSession = new \Shared\Session\AouthSession();
         $AouthSession->Close();
         return $this->redirect()->toRoute('admin/login');
    }
}
