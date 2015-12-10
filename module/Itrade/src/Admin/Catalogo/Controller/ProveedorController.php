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

class ProveedorController extends AbstractActionController
{
    public function indexAction()
    {
        
        return new ViewModel(array(
            'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
        ));
        
    }

    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Proveedoritrade();
            
            foreach($post_data as $key => $value){
                if(\ProveedoritradePeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/proveedores', array('action' => 'editar','id' => $entity->getIdproveedoritrade()));

        }
        
        $form = new \Catalogo\Form\ProveedorForm();
        
        //RETORNAMOS A NUESTRA VISTA
        return new ViewModel(array(
            'form' => $form
        ));
        
    }
    
    public function editarAction(){
        
        //ID ENTIDAD
        $id = $this->params()->fromRoute('id');
        
        $request = $this->getRequest();
        
         $exist = \ProveedoritradeQuery::create()->filterByIdproveedoritrade($id)->exists();
         
         if($exist){
            
            $entity = \ProveedoritradeQuery::create()->findPk($id);

            //INSTANCIAMOS NUESTRO FORMULARIO
            $form = new \Catalogo\Form\ProveedorForm();
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
       
            //RETORNAMOS A NUESTRA VISTA
            return new ViewModel(array(
                'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'form' => $form
            ));
        
           
            
        }else{
            return $this->redirect()->toRoute('admin/catalogo/empleados', array('action' => 'index'));
        }
        
    }
    

    public function eliminarAction(){
        
        $request = $this->getRequest();
        
      

        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \ProveedoritradeQuery::create()->findPk($id);
            
            $entity->delete();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro eliminado exitosamente!');
            
            if($entity->isDeleted()){
                return $this->getResponse()->setContent(json_encode(true));
            }
            
            
        }
        
        $id = $this->params()->fromQuery('id');
         
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);


        return $viewModel;
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'proveedoritrade_nombre',
                1 => 'proveedor_nombrecontacto',
                2 => 'proveedoritrade_telefono',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \ProveedoritradeQuery();
            $query->filterByIdproveedoritrade(1,  \Criteria::NOT_EQUAL);
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdproveedoritrade(\Criteria::DESC);
            }
            
 
            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('proveedoritrade.proveedoritrade_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('proveedoritrade.proveedoritrade_nombrecontacto', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('proveedoritrade.proveedoritrade_telefono', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Proveedoritrade();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdproveedoritrade();
                $tmp['proveedoritrade_nombre'] = $value->getProveedoritradeNombre();
                $tmp['proveedor_nombrecontacto'] =  $value->getProveedoritradeNombrecontacto();
                $tmp['proveedoritrade_telefono'] = $value->getProveedoritradeTelefono();
                $tmp['empleado_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/catalogo/proveedores/editar/'.$value->getIdproveedoritrade().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';
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
}
