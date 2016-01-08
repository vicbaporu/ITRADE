<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Admin\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CategoriagastosController extends AbstractActionController
{
    
    public function indexAction()
    {
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/categoriasgastos/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;

    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'categoriagasto_nombre',
                1 => 'categoriagasto_descripcion',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \CategoriagastoQuery();
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdcategoriagasto(\Criteria::DESC);
            }

            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('categoriagasto.categoriagasto_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('categoriagasto.categoriagasto_descripcion', '%'.$search.'%', \Criteria::LIKE);

                $c1->addOr($c2);

                $query->addAnd($c1);
               
            }

            //EL TOTAL DE LA BUSQUEDA
            $recordsFiltered = $query->count();
            
            //SUSTITUIMOS VARIABLES SI NOS LAS ENVIAN POR LA URL
                if(isset($post_data['url_params']['limit']) && isset($post_data['url_params']['page'])){
                    $post_data['length'] = (int)$post_data['url_params']['limit'];
                    $post_data['start'] = 0;
                    if((int)$post_data['url_params']['page'] > 1){               
                        $post_data['start'] = ($post_data['url_params']['limit'] * ((int)$post_data['url_params']['page']-1));
                    }
            }

            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
             //DAMOS EL FORMATO CORRECTO
            $data = array();
            $value = new \Categoriagasto();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdcategoriagasto();
                $tmp['categoriagasto_nombre'] = $value->getCategoriagastoNombre();
                $tmp['categoriagasto_descripcion'] = $value->getCategoriagastoDescripcion();
                $tmp['gastofacturacion_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/catalogo/categorias-gastos/editar/'.$value->getIdcategoriagasto().'"><i class="fa fa-pencil"></i></a><a class="delete" data-toggle="tooltip" data-placement="left" title="Eliminar" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a>';

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
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            

            $entity = new \Categoriagasto();
            
            foreach($post_data as $key => $value){
                if(\CategoriagastoPeer::getTableMap()->hasColumn($key) && !empty($value)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }

            $entity->save();
            
             //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
            //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/catergoria-gastos', array('action' => 'editar','id' => $entity->getIdcategoriagasto()));

        }
        
        //INSTANCIAMOS NUESTRO FORMULARIO
        $form = new \Catalogo\Form\CategoriagastosForm();
        
        //RETORNAMOS A NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/categoriasgastos/nuevo');
        $view_model->setVariable('form', $form);
        return $view_model;

    }
    
    public function editarAction(){
        
        //ID ENTIDAD
        $id = $this->params()->fromRoute('id');
        
         $request = $this->getRequest();
         
          if($request->isPost()){
              
              $post_data = $request->getPost();
              
              //INSTANCIAMOS NUESTRA ENTIDAD
              $entity = \CategoriagastoQuery::create()->findPk($id);
              
                //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
                foreach($post_data as $key => $value){
                    if(\CategoriagastoPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                $entity->save();
                
                //Agregamos un mensaje
                $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
                  
                //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
                return $this->redirect()->toRoute('admin/catalogo/catergoria-gastos', array('action' => 'editar','id' => $entity->getIdcategoriagasto()));
              
              
          }
          
          
         $exist = \CategoriagastoQuery::create()->filterByIdcategoriagasto($id)->exists();
         
         if($exist){
             
                $entity = \CategoriagastoQuery::create()->findPk($id);
                
                //INSTANCIAMOS NUESTRO FORMULARIO
                $form = new \Catalogo\Form\CategoriagastosForm();
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                
                //RETORNAMOS A NUESTRA VISTA
                $view_model = new ViewModel();
                $view_model->setTemplate('admin/catalogo/categoriasgastos/editar');
                $view_model->setVariables(array(
                    'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                    'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                    'form' => $form
                ));
                
                return $view_model;
              
              
              
         }else{
             return $this->redirect()->toRoute('admin/catalogo/gastos', array('action' => 'index'));
         }
         
       

        
    }
    
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $request->getPost('id');
            
            $entity = \CategoriagastoQuery::create()->findPk($id);
            
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
        $viewModel->setTemplate('admin/catalogo/categoriasgastos/eliminar');
        return $viewModel;
    }
}
