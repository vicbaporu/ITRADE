<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Clientes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProveedorclientesController extends AbstractActionController
{

    public function nuevoAction(){
        
        $request = $this->getRequest();
        $idcliente = $this->params()->fromRoute('id');
        $cliente = \ClienteQuery::create()->findPk($idcliente);
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
           
            $entity = new \Proveedorcliente();
            
            foreach($post_data as $key => $value){
                if(\ProveedorclientePeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'cliente_cumpleanios'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->setIdcliente($idcliente);
            $entity->setProveedorclienteTipo('proveedor');
             
            $entity->save();
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'?active=proveedores');

        }
        
        $form = new \Admin\Clientes\Form\ProveedorForm($idcliente);
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/proveedor/nuevo');
        $view_model->setVariable('form', $form);
        $view_model->setVariable('cliente', $cliente);
        return $view_model;
        
        
        
    }

}
