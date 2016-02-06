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
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'proveedorcliente_nombre',
                1 => 'proveedorcliente_taxid',
                2 => 'proveedorcliente_nombrecontacto',
                3 => 'proveedorcliente_telefonocontacto',
            );
            
            $post_data = $request->getPost();
           
            //NUESTRA QUERY
            $query = new \ProveedorclienteQuery();
            $query->filterByIdcliente($post_data['idcliente'])->filterByproveedorclienteTipo('cliente');
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdcliente(\Criteria::DESC);
            }

            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('proveedorcliente.proveedorcliente_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('proveedorcliente.proveedorcliente_taxid', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('proveedorcliente.proveedorcliente_nombrecontacto', '%'.$search.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('proveedorcliente.proveedorcliente_telefonocontacto', '%'.$search.'%', \Criteria::LIKE);
 
                $c1->addOr($c2)->addOr($c3)->addOr($c4);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Proveedorcliente();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdproveedorcliente();
                $tmp['proveedorcliente_nombre'] = $value->getProveedorclienteNombre();
                $tmp['proveedorcliente_taxid'] =  $value->getProveedorclienteTaxid();
                $tmp['proveedorcliente_nombrecontacto'] = $value->getProveedorclienteNombrecontacto();
                $tmp['proveedorcliente_telefonocontacto'] = $value->getProveedorclienteTelefonocontacto();
                $tmp['proveedorcliente_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/clientes/ver/'.$value->getIdcliente().'/clientes/editar/'.$value->getIdproveedorcliente().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
                $data[] = $tmp;
 
            }  
            
            //El arreglo que regresamos
            $json_data = array(
                "draw"            => (int)$post_data['draw'],
                "recordsFiltered" => $recordsFiltered,
                "data"            => $data,
                "page"            => $post_data['url_params']['page']
            );

            
            return $this->getResponse()->setContent(json_encode($json_data));

        }
    }
    
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
            $entity->setProveedorclienteTipo('cliente');
            
            $entity->save();
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'?active=clientes');

        }
        
        $form = new \Admin\Clientes\Form\ProveedorForm($idcliente);
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/clientes/clientesclientes/nuevo');
        $view_model->setVariable('form', $form);
        $view_model->setVariable('cliente', $cliente);
        return $view_model;
        
        
        
    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('idclientecliente');
        $idcliente = $this->params()->fromRoute('id');
        
        if($request->isPost()){
            
            $entity = \ProveedorclienteQuery::create()->findPk($id);
            
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            return $this->getResponse()->setContent(json_encode(true));
        }

        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setTemplate('admin/clientes/clientesclientes/eliminar');
        
        return $viewModel;
        
    }
    public function editarAction(){
        
        $idcliente = $this->params()->fromRoute('id');
        $id = $this->params()->fromRoute('idclientecliente');
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = \ProveedorclienteQuery::create()->findPk($id);
            
            foreach($post_data as $key => $value){
                if(\ProveedorclientePeer::getTableMap()->hasColumn($key) && !empty($value) && $key != 'cliente_cumpleanios'){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'?active=clientes');
            
        }
        $exist = \ProveedorclienteQuery::create()->filterByIdproveedorcliente($id)->exists();
        
        if($exist){
            
            $entity = \ProveedorclienteQuery::create()->findPk($id);
            $cliente = \ClienteQuery::create()->findPk($idcliente);
            $form = new \Admin\Clientes\Form\ProveedorForm($idcliente);
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/clientes/clientesclientes/editar');
            $view_model->setVariables(array(
                'entity' => $entity,
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'form' => $form,
                'cliente' => $cliente
            ));
            return $view_model;

        }else{
             return $this->redirect()->toUrl('/clientes/ver/'.$idcliente.'?active=clientes');
        }
        
  
    }

}
