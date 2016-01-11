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

class ServiciosController extends AbstractActionController
{
    public function indexAction()
    {
        
        $view_model = new ViewModel();
        $view_model->setTemplate('admin/catalogo/servicios/index');
        $view_model->setVariable('successMessages', json_encode($this->flashMessenger()->getSuccessMessages()));
        return $view_model;
        
    }
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //EL MAPEO DE NUESTRA TABALA
            $table_map = array(
                0 => 'servicio_nombre',
                1 => 'servicio_tipo',
                2 => 'servicio_medio',
            );
            
            $post_data = $request->getPost();

            //NUESTRA QUERY
            $query = new \ServicioQuery();
            
            //ORDER 
            if(isset($post_data['order'])){
                $order = $table_map[$post_data['order'][0]['column']];
                $dir = $post_data['order'][0]['dir'];
                $query->orderBy($order, $dir);
            }else{
                $query->orderByIdservicio(\Criteria::DESC);
            }

            if(!empty($post_data['search']['value'])){
                
                $search = $post_data['search']['value'];

                $c = new \Criteria();
                
                $c1= $c->getNewCriterion('servicio.servicio_tipo', '%'.$search.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('servicio.servicio_medio', '%'.$search.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('servicio.servicio_nombre', '%'.$search.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('servicio.servicio_descripcion', '%'.$search.'%', \Criteria::LIKE);

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
            $value = new \Servicio();
            foreach ($query->find() as $value){

                $tmp['DT_RowId'] = $value->getIdservicio();
                $tmp['servicio_nombre'] = $value->getServicioNombre();
                $tmp['servicio_tipo'] =  $value->getServicioTipo();
                $tmp['servicio_medio'] = $value->getServicioMedio();
                $tmp['servicio_descripcion'] = $value->getServicioDescripcion();
                $tmp['servicio_options'] = '<a data-toggle="tooltip" data-placement="left" title="Editar" href="/catalogo/servicios/editar/'.$value->getIdservicio().'"><i class="fa fa-pencil"></i></a>';
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
    
    public function editarAction(){
        
        //ID ENTIDAD
        $id = $this->params()->fromRoute('id');
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();

            //INSTANCIAMOS NUESTRA ENTIDAD
            $entity = \ServicioQuery::create()->findPk($id);
            
            //SETIAMOS NUESTROS DATOS CON EXCEPCIONES
            foreach($post_data as $key => $value){
                if(\ServicioPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            
            //Agregamos un mensaje
            $this->flashMessenger()->addSuccessMessage('Registro guardado exitosamente!');
            
             //REDIRECCIONAMOS A LA ENTIDAD QUE ACABAMOS DE CREAR
            return $this->redirect()->toRoute('admin/catalogo/servicios', array('action' => 'editar','id' => $entity->getIdservicio()));

        }
        
        
        $exist = \ServicioQuery::create()->filterByIdservicio($id)->exists();
         
         if($exist){
            
            $entity = \ServicioQuery::create()->findPk($id);

            //INSTANCIAMOS NUESTRO FORMULARIO
            $form = new \Catalogo\Form\ServiciosForm();
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            //RETORNAMOS A NUESTRA VISTA
            $view_model = new ViewModel();
            $view_model->setTemplate('admin/catalogo/servicios/editar');
            $view_model->setVariables(array(
                'entity' => json_encode($entity->toArray(\BasePeer::TYPE_FIELDNAME)),
                'successMessages' => json_encode($this->flashMessenger()->getSuccessMessages()),
                'form' => $form
            ));
            return $view_model;
        
           
            
        }else{
            return $this->redirect()->toRoute('admin/catalogo/proveedor', array('action' => 'index'));
        }
        
    }
}
